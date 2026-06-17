import { getSupabase, json, visitStateId } from "./_shared.js";

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

function koreaDate(value = new Date()) {
  return new Intl.DateTimeFormat("en-CA", {
    timeZone: "Asia/Seoul",
    year: "numeric",
    month: "2-digit",
    day: "2-digit",
  }).format(value);
}

function koreaTime(value = new Date()) {
  return new Intl.DateTimeFormat("ko-KR", {
    timeZone: "Asia/Seoul",
    year: "numeric",
    month: "numeric",
    day: "numeric",
    hour: "numeric",
    minute: "2-digit",
    second: "2-digit",
  }).format(value);
}

function recentVisitLogDates(now = new Date()) {
  const oneDay = 24 * 60 * 60 * 1000;
  return new Set([
    koreaDate(now),
    koreaDate(new Date(now.getTime() - oneDay)),
  ]);
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
  const date = koreaDate(now);

  const { data, error: readError } = await supabase
    .from("site_state")
    .select("data")
    .eq("id", visitStateId)
    .maybeSingle();

  if (readError) {
    return json(res, 500, { error: readError.message });
  }

  const state = data?.data || {};
  const visits = Array.isArray(state.visits) ? state.visits : [];
  const visitLogs = Array.isArray(state.visitLogs) ? state.visitLogs : [];
  const sameDayIpLogs = visitLogs.filter((log) => log.date === date && String(log.ip || "") === ip);
  const visitCountByIp = sameDayIpLogs.length + 1;
  const day = visits.find((item) => item.date === date);
  if (day) {
    const uniqueIps = new Set(visitLogs.filter((log) => log.date === date).map((log) => String(log.ip || "")).filter(Boolean));
    if (ip) uniqueIps.add(ip);
    day.count = uniqueIps.size;
    day.browser = browser;
    day.os = os;
    day.uniqueIps = [...uniqueIps];
  } else {
    visits.unshift({ date, count: ip ? 1 : 0, browser, os, uniqueIps: ip ? [ip] : [] });
  }

  visitLogs.unshift({
    id: `${Date.now()}`,
    date,
    time: koreaTime(now),
    memberId: memberId ? String(memberId) : "",
    name: "",
    nick: "",
    phone: "",
    browser,
    os,
    ip,
    visitCountByIp,
    userAgent,
  });

  const keepDates = recentVisitLogDates(now);
  state.visits = visits;
  state.visitLogs = visitLogs.filter((log) => keepDates.has(log.date));

  const { error: writeError } = await supabase
    .from("site_state")
    .upsert({ id: visitStateId, data: state, updated_at: now.toISOString() });

  if (writeError) {
    return json(res, 500, { error: writeError.message });
  }

  return json(res, 200, { ok: true });
}
