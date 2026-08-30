import { getSupabase, json, visitStateId } from "./_shared.js";

function parseUserAgent(userAgent = "") {
  const ua = String(userAgent);
  const browser = /KAKAOTALK|KakaoTalk/i.test(ua) ? "카카오톡 인앱브라우저"
    : /NAVER\(inapp|NaverApp|NAVER/i.test(ua) ? "네이버 인앱브라우저"
      : /Instagram/i.test(ua) ? "인스타그램 인앱"
        : /FBAN|FBAV|FB_IAB|FBIOS|FB4A/i.test(ua) ? "페이스북 인앱"
          : /Line\//i.test(ua) ? "라인 인앱"
            : /DaumApps|DaumDevice/i.test(ua) ? "다음 인앱"
              : /CriOS/i.test(ua) ? "Chrome iOS"
                : /FxiOS/i.test(ua) ? "Firefox iOS"
                  : /Edg\//.test(ua) || /EdgiOS|EdgA/i.test(ua) ? "Edge"
                    : /SamsungBrowser/i.test(ua) ? "삼성 인터넷"
                      : /Whale/i.test(ua) ? "네이버 웨일"
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
  const device = /iPhone/.test(ua) ? "iPhone"
    : /iPad/.test(ua) ? "iPad"
      : /iPod/.test(ua) ? "iPod"
        : /SM-|SAMSUNG|Samsung/i.test(ua) ? "Samsung Galaxy"
          : /Android/.test(ua) ? "Android 기기"
            : /Windows NT/.test(ua) ? "Windows PC"
              : /Macintosh|Mac OS X/.test(ua) ? "Mac"
                : "기타";
  return { browser, os, device };
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

function referrerHost(value) {
  try {
    return new URL(value).hostname.replace(/^www\./, "").toLowerCase();
  } catch {
    return "";
  }
}

function ownHostSet() {
  const hosts = new Set(
    String(process.env.SITE_HOSTS || process.env.VERCEL_PROJECT_PRODUCTION_URL || "")
      .split(",")
      .map((item) => item.trim().replace(/^https?:\/\//, "").replace(/\/$/, "").replace(/^www\./, "").toLowerCase())
      .filter(Boolean)
  );
  ["xn--she-vg3mw53b.com", "분당she.com", "bundangshe.com"].forEach((host) => hosts.add(host.toLowerCase()));
  return hosts;
}

function platformSourceForHost(host = "") {
  if (!host) return "";
  if (host.includes("kisstime")) return "kisstime";
  if (host.includes("kissinfo")) return "kissinfo";
  if (host.includes("google.")) return "google";
  if (host.includes("naver.")) return "naver";
  if (host.includes("kakao.") || host.includes("daum.")) return "kakao";
  if (host.includes("instagram.")) return "instagram";
  if (host.includes("facebook.") || host.includes("fb.")) return "facebook";
  return "";
}

function classifySource({ referrer, landingUrl, utmSource, utmMedium, utmCampaign, utmTerm }) {
  const ref = trimText(referrer, 1000);
  const landing = trimText(landingUrl, 1000);
  const host = referrerHost(ref);
  const source = trimText(utmSource, 80).toLowerCase();
  const medium = trimText(utmMedium, 80);
  const campaign = trimText(utmCampaign, 120);
  const term = trimText(utmTerm || queryParam(ref, ["q", "query", "keyword", "search_query"]), 120);

  if (source) {
    const normalized = source.includes("google") ? "google"
      : source.includes("naver") ? "naver"
        : source.includes("kakao") || source.includes("daum") ? "kakao"
          : source.includes("kisstime") ? "kisstime"
            : source.includes("kissinfo") ? "kissinfo"
              : source.includes("instagram") ? "instagram"
                : source;
    return {
      source: normalized,
      sourceLabel: sourceLabel(normalized),
      medium,
      campaign,
      searchTerm: term,
      referrer: ref,
      referrerHost: host,
      landingUrl: landing,
    };
  }

  if (!ref) {
    return { source: "direct", sourceLabel: "직접유입", medium: "", campaign, searchTerm: term, referrer: "", referrerHost: "", landingUrl: landing };
  }

  const ownHosts = ownHostSet();
  const sourceKey = platformSourceForHost(host) || (ownHosts.has(host) ? "internal" : "external");

  return {
    source: sourceKey,
    sourceLabel: sourceLabel(sourceKey),
    medium,
    campaign,
    searchTerm: term,
    referrer: ref,
    referrerHost: host,
    landingUrl: landing,
  };
}

function sourceLabel(value) {
  const labels = {
    google: "구글",
    naver: "네이버",
    kakao: "카카오/다음",
    kisstime: "키스타임",
    kissinfo: "키스인포",
    instagram: "인스타그램",
    facebook: "페이스북",
    direct: "직접유입",
    internal: "사이트 내부이동",
    external: "외부사이트",
  };
  return labels[value] || value || "직접유입";
}

function normalizeFirstTraffic(traffic) {
  if (traffic.source !== "internal") return traffic;
  return {
    ...traffic,
    source: "direct",
    sourceLabel: sourceLabel("direct"),
    referrer: "",
    referrerHost: "",
  };
}

function shouldUseIncomingFirstTraffic(existingLog, traffic) {
  if (!existingLog) return true;
  const currentSource = String(existingLog.source || "");
  const incomingSource = String(normalizeFirstTraffic(traffic).source || "");
  if (!currentSource || currentSource === "internal") return true;
  return currentSource === "direct" && incomingSource && incomingSource !== "direct" && incomingSource !== "internal";
}

function logVisitCount(log) {
  return Math.max(1, Number(log?.visitCountByIp || 0) || 1);
}

function compactVisitLogs(logs = []) {
  const map = new Map();
  const compacted = [];
  logs.forEach((log) => {
    const ip = String(log.ip || "");
    const key = ip ? `${log.date || ""}|${ip}` : "";
    if (!key) {
      compacted.push(log);
      return;
    }
    const current = map.get(key);
    if (!current) {
      const next = { ...log, visitCountByIp: logVisitCount(log) };
      map.set(key, next);
      compacted.push(next);
      return;
    }
    current.visitCountByIp += logVisitCount(log);
    current.firstTime = log.firstTime || log.time || current.firstTime;
    current.lastTime = current.lastTime || log.lastTime || log.time;
    current.browser = log.browser || current.browser;
    current.os = log.os || current.os;
    current.device = log.device || current.device;
    current.source = current.source || log.source;
    current.sourceLabel = current.sourceLabel || log.sourceLabel;
    current.lastSource = current.lastSource || log.lastSource || log.source;
    current.lastSourceLabel = current.lastSourceLabel || log.lastSourceLabel || log.sourceLabel;
    current.referrer = current.referrer || log.referrer;
    current.referrerHost = current.referrerHost || log.referrerHost;
    current.lastReferrer = current.lastReferrer || log.lastReferrer || log.referrer;
    current.lastReferrerHost = current.lastReferrerHost || log.lastReferrerHost || log.referrerHost;
    current.landingUrl = current.landingUrl || log.landingUrl;
    current.lastLandingUrl = current.lastLandingUrl || log.lastLandingUrl || log.landingUrl;
    current.path = current.path || log.path;
    current.lastPath = current.lastPath || log.lastPath || log.path;
    current.utmSource = current.utmSource || log.utmSource;
    current.utmMedium = current.utmMedium || log.utmMedium;
    current.utmCampaign = current.utmCampaign || log.utmCampaign;
    current.utmTerm = current.utmTerm || log.utmTerm;
    current.searchTerm = current.searchTerm || log.searchTerm;
    current.userAgent = log.userAgent || current.userAgent;
  });
  return compacted;
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
  const { browser, os, device } = parseUserAgent(userAgent);
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
  const existingLogs = visitLogs.filter((log) => log.date === date && String(log.ip || "") === ip);
  const existingLog = existingLogs[0] || null;
  const firstTraffic = normalizeFirstTraffic(traffic);
  const useIncomingFirstTraffic = shouldUseIncomingFirstTraffic(existingLog, traffic);
  const visitCountByIp = existingLogs.reduce((total, log) => total + logVisitCount(log), 0) + 1;
  const day = visits.find((item) => item.date === date);
  if (day) {
    const uniqueIps = new Set(visitLogs.filter((log) => log.date === date).map((log) => String(log.ip || "")).filter(Boolean));
    if (ip) uniqueIps.add(ip);
    day.count = uniqueIps.size;
    day.browser = browser;
    day.os = os;
    day.device = device;
    day.uniqueIps = [...uniqueIps];
  } else {
    visits.unshift({ date, count: ip ? 1 : 0, browser, os, device, uniqueIps: ip ? [ip] : [] });
  }

  const nextLog = {
    ...(existingLog || {}),
    id: existingLog?.id || `${Date.now()}`,
    date,
    time: koreaTime(now),
    firstTime: existingLog?.firstTime || existingLog?.time || koreaTime(now),
    lastTime: koreaTime(now),
    memberId: existingLog?.memberId || (memberId ? String(memberId) : ""),
    name: "",
    nick: "",
    phone: "",
    browser,
    os,
    device,
    ip,
    visitCountByIp,
    source: useIncomingFirstTraffic ? firstTraffic.source : existingLog?.source || firstTraffic.source,
    sourceLabel: useIncomingFirstTraffic ? firstTraffic.sourceLabel : existingLog?.sourceLabel || firstTraffic.sourceLabel,
    lastSource: traffic.source,
    lastSourceLabel: traffic.sourceLabel,
    referrer: useIncomingFirstTraffic ? firstTraffic.referrer : existingLog?.referrer || firstTraffic.referrer,
    referrerHost: useIncomingFirstTraffic ? firstTraffic.referrerHost : existingLog?.referrerHost || firstTraffic.referrerHost,
    lastReferrer: traffic.referrer,
    lastReferrerHost: traffic.referrerHost,
    landingUrl: useIncomingFirstTraffic ? firstTraffic.landingUrl : existingLog?.landingUrl || firstTraffic.landingUrl,
    lastLandingUrl: traffic.landingUrl,
    path: trimText(path, 500) || existingLog?.path || "",
    lastPath: trimText(path, 500) || existingLog?.lastPath || "",
    utmSource: existingLog?.utmSource || trimText(utmSource, 80),
    utmMedium: existingLog?.utmMedium || traffic.medium,
    utmCampaign: existingLog?.utmCampaign || traffic.campaign,
    utmTerm: existingLog?.utmTerm || trimText(utmTerm, 120),
    searchTerm: existingLog?.searchTerm || traffic.searchTerm,
    userAgent,
  };

  state.visits = visits;
  state.visitLogs = compactVisitLogs([
    nextLog,
    ...visitLogs.filter((log) => !(log.date === date && String(log.ip || "") === ip)),
  ]);

  const { error: writeError } = await supabase
    .from("site_state")
    .upsert({ id: visitStateId, data: state, updated_at: now.toISOString() });

  if (writeError) {
    return json(res, 500, { error: writeError.message });
  }

  return json(res, 200, { ok: true });
}
