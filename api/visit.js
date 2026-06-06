import { getSupabase, json, stateId } from "./_shared.js";

function parseUserAgent(userAgent = "") {
  const ua = String(userAgent);
  const browser = /Edg\//.test(ua) ? "Edge"
    : /Chrome\//.test(ua) && !/Chromium/.test(ua) ? "Chrome"
      : /Safari\//.test(ua) && /Version\//.test(ua) ? "Safari"
        : /Firefox\//.test(ua) ? "Firefox"
          : /OPR\//.test(ua) || /Opera/.test(ua) ? "Opera"
            : "기타";
  const os = /Windows NT/.test(ua) ? "Windows"
    : /Mac OS X/.test(ua) && !/Mobile/.test(ua) ? "macOS"
      : /Android/.test(ua) ? "Android"
        : /iPhone|iPad|iPod/.test(ua) ? "iOS"
          : /Linux/.test(ua) ? "Linux"
            : "기타";
  return { browser, os };
}

function clientIp(req) {
  const forwarded = req.headers["x-forwarded-for"];
  if (forwarded) return String(forwarded).split(",")[0].trim();
  return String(req.headers["x-real-ip"] || req.socket?.remoteAddress || "");
}

export default async function handler(req, res) {
  if (req.method !== "POST") {
    return json(res, 405, { error: "Method not allowed" });
  }

  const supabase = getSupabase();
  if (!supabase) {
    return json(res, 503, { error: "Supabase env vars are not configured" });
  }

  const { memberId } = req.body || {};
  const userAgent = String(req.headers["user-agent"] || "");
  const { browser, os } = parseUserAgent(userAgent);
  const ip = clientIp(req);
  const now = new Date();
  const date = now.toISOString().slice(0, 10);

  const { data, error: readError } = await supabase
    .from("site_state")
    .select("data")
    .eq("id", stateId)
    .maybeSingle();

  if (readError) {
    return json(res, 500, { error: readError.message });
  }

  const state = data?.data || {};
  const members = Array.isArray(state.members) ? state.members : [];
  const member = members.find((item) => String(item.id) === String(memberId));
  const visits = Array.isArray(state.visits) ? state.visits : [];
  const visitLogs = Array.isArray(state.visitLogs) ? state.visitLogs : [];
  const day = visits.find((item) => item.date === date);
  if (day) {
    day.count = Number(day.count || 0) + 1;
    day.browser = browser;
    day.os = os;
  } else {
    visits.unshift({ date, count: 1, browser, os });
  }

  visitLogs.unshift({
    id: `${Date.now()}`,
    date,
    time: now.toLocaleString("ko-KR"),
    memberId: member ? String(member.id) : "",
    name: member ? String(member.name || "") : "",
    nick: member ? String(member.nick || "") : "",
    phone: member ? String(member.phone || member.contact || member.mobile || "") : "",
    browser,
    os,
    ip,
    userAgent,
  });

  state.visits = visits;
  state.visitLogs = visitLogs.slice(0, 1000);

  const { error: writeError } = await supabase
    .from("site_state")
    .upsert({ id: stateId, data: state, updated_at: now.toISOString() });

  if (writeError) {
    return json(res, 500, { error: writeError.message });
  }

  return json(res, 200, { ok: true });
}
