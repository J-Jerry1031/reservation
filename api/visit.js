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

function trimText(value, max = 500) {
  return String(value || "").slice(0, max);
}

function queryParam(url, names = []) {
  try {
    const parsed = new URL(url);
    for (const name of names) {
      const value = parsed.searchParams.get(name);
      if (value) return value;
    }
  } catch {
  }
  return "";
}

function classifySource({ referrer, landingUrl, utmSource, utmMedium, utmCampaign, utmTerm }) {
  const ref = trimText(referrer, 1000);
  const landing = trimText(landingUrl, 1000);
  const source = trimText(utmSource, 80).toLowerCase();
  const medium = trimText(utmMedium, 80);
  const campaign = trimText(utmCampaign, 120);
  const term = trimText(utmTerm || queryParam(ref, ["q", "query", "keyword", "search_query"]), 120);

  if (source) {
    const normalized = source.includes("google") ? "google"
      : source.includes("naver") ? "naver"
        : source.includes("kakao") || source.includes("daum") ? "kakao"
          : source.includes("instagram") ? "instagram"
            : source;
    return {
      source: normalized,
      sourceLabel: sourceLabel(normalized),
      medium,
      campaign,
      searchTerm: term,
      referrer: ref,
      landingUrl: landing,
    };
  }

  if (!ref) {
    return { source: "direct", sourceLabel: "직접유입", medium: "", campaign, searchTerm: term, referrer: "", landingUrl: landing };
  }

  let host = "";
  try {
    host = new URL(ref).hostname.replace(/^www\./, "").toLowerCase();
  } catch {
  }

  const ownHosts = new Set(["xn--she-vg3mw53b.com", "분당she.com", "bundangshe.com"]);
  const sourceKey = host.includes("google.") ? "google"
    : host.includes("naver.") ? "naver"
      : host.includes("kakao.") || host.includes("daum.") ? "kakao"
        : host.includes("instagram.") ? "instagram"
          : ownHosts.has(host) ? "internal"
            : "external";

  return {
    source: sourceKey,
    sourceLabel: sourceLabel(sourceKey),
    medium,
    campaign,
    searchTerm: term,
    referrer: ref,
    landingUrl: landing,
  };
}

function sourceLabel(value) {
  const labels = {
    google: "구글",
    naver: "네이버",
    kakao: "카카오/다음",
    instagram: "인스타그램",
    direct: "직접유입",
    internal: "사이트 내부이동",
    external: "외부사이트",
  };
  return labels[value] || value || "직접유입";
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

  const { memberId, referrer, landingUrl, path, utmSource, utmMedium, utmCampaign, utmTerm } = req.body || {};
  const userAgent = String(req.headers["user-agent"] || "");
  const { browser, os } = parseUserAgent(userAgent);
  const ip = clientIp(req);
  const now = new Date();
  const date = koreaDate(now);
  const traffic = classifySource({
    referrer: referrer || req.headers.referer || "",
    landingUrl,
    utmSource,
    utmMedium,
    utmCampaign,
    utmTerm,
  });

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
    source: traffic.source,
    sourceLabel: traffic.sourceLabel,
    referrer: traffic.referrer,
    landingUrl: traffic.landingUrl,
    path: trimText(path, 500),
    utmSource: trimText(utmSource, 80),
    utmMedium: traffic.medium,
    utmCampaign: traffic.campaign,
    utmTerm: trimText(utmTerm, 120),
    searchTerm: traffic.searchTerm,
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
