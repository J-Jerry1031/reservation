const defaultBoards = {
  day: {
    title: "실시간 출근부",
    banner: "board-1",
    total: 0,
    type: "list",
    posts: [],
  },
  gallery: {
    title: "매니저 프로필",
    banner: "board-3",
    total: 0,
    type: "gallery",
    posts: [],
  },
  notice: {
    title: "공지사항",
    banner: "board-2",
    total: 0,
    type: "list",
    protected: true,
    posts: [],
  },
  review: {
    title: "이용후기",
    banner: "board-2",
    total: 0,
    type: "list",
    protected: false,
    posts: [],
  },
};

const app = document.querySelector("#app");
const params = new URLSearchParams(location.search);
const path = location.pathname;
const defaultMainImage = "/assets/fox-og-20260609.png";
document.body.classList.toggle("admin-mode", path.includes("/adm"));

const defaultAdminState = {
  config: {
    siteName: "분당 Fox",
    description: "이성과 교감적인 데이트를 즐길 수 있는 대화 카페입니다.",
    address: "분당 야탑역 도보 3분 직진 차병원 앞",
    hours: "AM 11:00~출근부 마감전까지",
    theme: "home",
    metaTitle: "분당 Fox | 분당·야탑 키스방 실시간 출근부",
    metaDescription: "분당·야탑 키스방 실시간 출근부와 매니저 프로필을 확인할 수 있는 분당 Fox 공식 안내 사이트입니다. 고액 알바, 단기 고액알바, 고액단기알바 관련 안내도 확인하세요.",
    metaKeywords: "분당 Fox\n분당폭스\n분당 키스방\n분당키스방\n야탑 키스방\n야탑키스방\n성남 키스방\n성남키스방\n분당 야탑 키스방\n분당 키스방 실시간 출근부\n분당 매니저 프로필\n실시간 출근부\n고액 알바\n고액알바\n단기 고액알바\n단기고액알바\n고액단기알바\n단기 알바",
    ogImage: "/assets/fox-og-20260609.png",
    canonicalUrl: "https://xn--she-vg3mw53b.com",
    robots: "index,follow",
    googleVerification: "I7Pir-KxLwjmrfDzidQ5f0c-V1iev1YlDSj559gTykI",
    naverVerification: "",
    gaMeasurementId: "",
    naverAnalyticsId: "",
  },
  boards: defaultBoards,
  members: [
    { id: "admin", name: "관리자", nick: "관리자", phone: "", level: 10, point: 1000, status: "정상", joined: "2026-06-01" },
  ],
  popups: [
    { id: "welcome", title: "공지 팝업", enabled: false, content: "분당 Fox 공지사항을 입력하세요." },
  ],
  menus: [
    { label: "실시간 출근부", url: "/bbs/board.php?bo_table=day", visible: true },
    { label: "매니저 프로필", url: "/bbs/board.php?bo_table=gallery", visible: true },
    { label: "공지사항", url: "/bbs/board.php?bo_table=notice", visible: true },
    { label: "이용후기", url: "/bbs/board.php?bo_table=review", visible: true },
  ],
  points: [],
  contents: [
    { id: "privacy", title: "개인정보처리방침", body: "운영 정책을 입력하세요." },
    { id: "provision", title: "이용약관", body: "서비스 이용약관을 입력하세요." },
  ],
  faq: [
    { question: "이용 문의는 어떻게 하나요?", answer: "고객센터 안내를 확인해주세요." },
  ],
  permissions: {
    memberViewOnly: true,
    publicBoards: true,
    protectedBoardsForMembers: true,
  },
  themeSettings: {
    primaryColor: "#c92346",
    headerMode: "dark",
    mainCopy: "",
    mainImage: defaultMainImage,
  },
  groups: [
    { id: "community", name: "커뮤니티", description: "기본 게시판 그룹" },
  ],
  popular: [
    { keyword: "출근부", url: "/bbs/board.php?bo_table=day", visible: true },
    { keyword: "매니저 프로필", url: "/bbs/board.php?bo_table=gallery", visible: true },
  ],
  polls: [
    { id: "poll-default", title: "사이트 이용 만족도", options: ["만족", "보통", "문의 필요"], enabled: false, votes: [0, 0, 0] },
  ],
  mailLogs: [],
  maintenance: {
    cacheVersion: "1",
    lastCacheClear: "",
    uploadsNote: "이미지는 파일 업로드 후 게시글 데이터에 저장됩니다.",
  },
  visits: [],
  visitLogs: [],
  manuals: [
    { category: "게시판 운영", title: "게시글 작성/수정", body: "관리자는 각 게시판의 글쓰기 버튼 또는 관리자 > 게시판관리에서 게시글을 작성하고 수정할 수 있습니다. 이미지 업로드와 글꼴 크기, 색상, 줄간격 편집을 지원합니다." },
    { category: "매니저 관리", title: "매니저 프로필 등록", body: "관리자 > 게시판관리의 매니저 프로필 등록에서 이름, 금액, 출근상태, 일정, 소개글, 사진을 입력하면 매니저 프로필에 카드 형태로 노출됩니다." },
    { category: "권한", title: "회원/관리자 권한", body: "일반 회원은 게시판 열람만 가능합니다. 글 작성, 수정, 삭제, 관리자 메뉴 접근은 관리자만 가능합니다." },
    { category: "SEO", title: "검색엔진 노출", body: "기본환경설정에서 메타 타이틀, 설명, 키워드, 검색 로봇, 구글/네이버 인증값을 입력하면 사이트 head 영역에 반영됩니다." },
  ],
};

let adminState = structuredClone(defaultAdminState);
let boards = adminState.boards;

const adminHelp = {
  dashboard: "전체 운영 현황을 빠르게 보는 화면입니다. 회원, 게시글, 팝업, 포인트 내역과 최근 게시글을 확인합니다.",
  config: "사이트명, 영업정보, 검색엔진 메타태그, 구글/네이버 인증값을 관리합니다. 저장하면 사용자 화면과 head 메타에 반영됩니다.",
  auth: "권한 정책을 관리합니다. 일반 회원은 열람만 가능하고, 작성/수정/삭제와 관리자 메뉴는 관리자만 사용할 수 있습니다.",
  theme: "사이트 대표 색상, 헤더 모드, 메인 슬라이드 문구와 메인 간판 이미지를 관리합니다.",
  menus: "상단/모바일/서브 메뉴 노출과 연결 URL을 관리합니다.",
  popups: "사용자 메인 화면에 띄울 공지 팝업을 추가하고 노출 여부를 토글합니다.",
  maintenance: "로컬 캐시와 사이트 상태 캐시 버전을 갱신합니다.",
  members: "회원 목록을 확인하고 회원을 추가/삭제합니다. 일반 회원은 게시판 열람만 가능합니다.",
  mail: "회원 메일 발송 내용을 기록합니다. 실제 SMTP 발송은 외부 메일 서비스 연결 후 확장할 수 있습니다.",
  visits: "접속자 통계 데이터를 확인합니다.",
  points: "회원별 포인트 지급/차감 내역을 관리합니다.",
  polls: "메인에 표시할 투표를 생성하고 노출 여부를 관리합니다.",
  boards: "게시판 생성, 게시글 작성/삭제, 매니저 프로필 등록, 기존 글 수정 진입을 관리합니다.",
  posts: "작성된 게시글을 게시판별로 필터링하고 10개 단위로 확인, 수정, 삭제합니다.",
  groups: "게시판을 묶는 그룹을 생성하고 게시판 수를 확인합니다.",
  popular: "메인에 노출할 인기검색어와 연결 URL을 관리합니다.",
  contents: "개인정보처리방침, 이용약관 같은 고정 페이지 내용을 관리합니다.",
  faq: "FAQ 질문과 답변을 관리합니다.",
  "write-count": "게시판별 글 수와 댓글 수를 확인합니다.",
  manuals: "관리자 메뉴별 사용 방법을 확인합니다.",
};

function layout(content) {
  app.innerHTML = content;
}

function visibleMenus() {
  return (adminState.menus || []).filter((menu) => menu.visible);
}

function syncChrome() {
  const config = adminState.config;
  const seo = currentPageSeo(config);
  const title = seo.title;
  const description = seo.description;
  const keywords = seoKeywords(config.metaKeywords).join(", ");
  document.title = title;
  setMeta("name", "description", description);
  setMeta("name", "keywords", keywords);
  setMeta("name", "robots", seo.robots);
  const socialImage = config.ogImage || adminState.themeSettings.mainImage || "/assets/fox-og-20260609.png";
  setMeta("property", "og:title", title);
  setMeta("property", "og:description", description);
  setMeta("property", "og:image", absoluteUrl(socialImage));
  setMeta("property", "og:image:secure_url", absoluteUrl(socialImage));
  setMeta("property", "og:image:type", "image/png");
  setMeta("property", "og:url", seo.canonical);
  setMeta("name", "twitter:card", "summary_large_image");
  setMeta("name", "twitter:title", title);
  setMeta("name", "twitter:description", description);
  setMeta("name", "twitter:image", absoluteUrl(socialImage));
  setLink("canonical", seo.canonical);
  setJsonLd(seo);
  if (config.googleVerification) setMeta("name", "google-site-verification", config.googleVerification);
  if (config.naverVerification) setMeta("name", "naver-site-verification", config.naverVerification);
  syncAnalyticsScripts(config);
  document.documentElement.style.setProperty("--admin-primary", adminState.themeSettings.primaryColor || "#c92346");
  document.body.dataset.theme = adminState.themeSettings.headerMode || "dark";
  const heading = document.querySelector("#hd h1");
  if (heading) heading.textContent = config.siteName;
  const logo = document.querySelector(".logo span");
  if (logo) logo.innerHTML = brandNameMarkup(config.siteName);
  const logoLink = document.querySelector(".logo");
  if (logoLink) logoLink.setAttribute("aria-label", `${config.siteName} 홈`);

  const nav = document.querySelector("#gnb");
  if (nav) {
    nav.innerHTML = `
      ${visibleMenus().map((menu) => `<a href="${menu.url}">${menu.label}</a>`).join("")}
    `;
  }

  const mobile = document.querySelector(".mobile-menu");
  const loginLinks = adminSessionLinks() || (memberSession()
    ? `<a class="button login" href="/bbs/member.php">${escapeHtml(memberSession().nick || memberSession().id)}님</a><a class="button join" href="#" data-logout-member>로그아웃</a>`
    : `<a class="button join" href="/bbs/register.php">회원가입</a><a class="button login" href="/bbs/login.php">로그인</a>`);
  if (mobile) {
    mobile.innerHTML = `
      <section class="mobile-login">
        <h2>회원로그인</h2>
        ${loginLinks}
      </section>
      ${visibleMenus().map((menu) => `<a href="${menu.url}">${menu.label}</a>`).join("")}
    `;
  }

  const topLinks = document.querySelector(".top-links");
  if (topLinks) {
    topLinks.innerHTML = adminSessionLinks("top") || (memberSession()
      ? `<a href="/bbs/member.php">MY</a><a href="#" data-logout-member>LOGOUT</a>`
      : `<a href="/bbs/register.php">JOIN</a><a href="/bbs/login.php">LOGIN</a>`);
  }

  document.querySelectorAll("[data-logout-member], [data-logout-admin]").forEach((link) => {
    link.addEventListener("click", (event) => {
      event.preventDefault();
      sessionStorage.removeItem("dateclubMember");
      sessionStorage.removeItem("dateclubAdmin");
      sessionStorage.removeItem("dateclubAdminToken");
      localStorage.removeItem("dateclubMember");
      localStorage.removeItem("dateclubAdmin");
      localStorage.removeItem("dateclubAdminToken");
      syncChrome();
      renderHome();
    });
  });

  const footer = document.querySelector("#ft p");
  if (footer) footer.textContent = `Copyright © ${config.siteName} All rights reserved.`;
}

function adminSessionLinks(mode = "mobile") {
  if (!isAdminLoggedIn()) return "";
  if (mode === "top") return `<a href="/adm/">ADMIN</a><a href="#" data-logout-admin>LOGOUT</a>`;
  return `<a class="button login" href="/adm/">관리자</a><a class="button join" href="#" data-logout-admin>로그아웃</a>`;
}

function brandNameMarkup(value) {
  const text = String(value || "분당 Fox").trim();
  const match = text.match(/^(.*?)(NYX|Fox|She)$/i);
  if (!match) return escapeHtml(text);
  const prefix = match[1].trim();
  return `${prefix ? `<b class="brand-kor">${escapeHtml(prefix)}</b>` : ""}<em class="brand-en">${escapeHtml(match[2])}</em>`;
}

function cssImageUrl(value) {
  return String(value || defaultMainImage).replace(/[\\')]/g, "");
}

const areaPages = {
  "/area/bundang": {
    key: "bundang",
    label: "분당",
    roman: "BUNDANG",
    title: "분당 키스방 실시간 출근부 | 분당 Fox",
    description: "분당 키스방 실시간 출근부와 매니저 프로필을 확인할 수 있는 분당 Fox 지역 안내 페이지입니다. 분당 오늘의 출근 일정과 공지사항을 확인하세요.",
    keywords: ["분당 키스방", "분당키스방", "분당 키스방 실시간 출근부", "분당 매니저 프로필", "분당 고액 알바"],
    heading: "분당 키스방 실시간 출근부",
    lead: "분당에서 오늘의 출근 일정과 매니저 프로필을 빠르게 확인할 수 있는 분당 Fox 안내 페이지입니다.",
    intro: "분당 인근 실시간 출근 정보, 매니저 프로필, 운영 공지와 이용후기를 기존 분당 Fox 게시판에서 바로 확인할 수 있습니다.",
  },
  "/area/yatap": {
    key: "yatap",
    label: "야탑",
    roman: "YATAP",
    title: "야탑 키스방 실시간 출근부 | 분당 Fox",
    description: "야탑 키스방 실시간 출근부와 매니저 프로필을 확인할 수 있는 분당 Fox 지역 안내 페이지입니다. 야탑 인근 오늘의 일정과 공지를 확인하세요.",
    keywords: ["야탑 키스방", "야탑키스방", "야탑 키스방 실시간 출근부", "야탑 매니저 프로필", "야탑 고액 알바"],
    heading: "야탑 키스방 실시간 출근부",
    lead: "야탑 인근에서 오늘의 출근 일정과 매니저 프로필을 확인할 수 있는 분당 Fox 안내 페이지입니다.",
    intro: "야탑권 실시간 출근 정보와 매니저 프로필은 기존 분당 Fox 게시판과 동일하게 운영되며, 공지사항과 이용후기도 함께 확인할 수 있습니다.",
  },
  "/area/seongnam": {
    key: "seongnam",
    label: "성남",
    roman: "SEONGNAM",
    title: "성남 키스방 실시간 출근부 | 분당 Fox",
    description: "성남 키스방 실시간 출근부와 매니저 프로필을 확인할 수 있는 분당 Fox 지역 안내 페이지입니다. 성남 인근 오늘의 출근 안내를 확인하세요.",
    keywords: ["성남 키스방", "성남키스방", "성남 키스방 실시간 출근부", "성남 매니저 프로필", "성남 고액 알바"],
    heading: "성남 키스방 실시간 출근부",
    lead: "성남 인근에서 오늘의 출근 일정과 매니저 프로필을 확인할 수 있는 분당 Fox 안내 페이지입니다.",
    intro: "성남권 실시간 출근 정보, 매니저 프로필, 운영 공지는 기존 분당 Fox 게시판으로 연결되어 최신 내용으로 확인할 수 있습니다.",
  },
};

function currentAreaPage() {
  return areaPages[path.replace(/\/$/, "")] || null;
}

function setMeta(attr, key, content) {
  if (!content && key.includes("verification")) {
    document.querySelector(`meta[${attr}="${key}"]`)?.remove();
    return;
  }
  let tag = document.querySelector(`meta[${attr}="${key}"]`);
  if (!tag) {
    tag = document.createElement("meta");
    tag.setAttribute(attr, key);
    document.head.appendChild(tag);
  }
  tag.setAttribute("content", content);
}

function setLink(rel, href) {
  let tag = document.querySelector(`link[rel="${rel}"]`);
  if (!tag) {
    tag = document.createElement("link");
    tag.setAttribute("rel", rel);
    document.head.appendChild(tag);
  }
  tag.setAttribute("href", href);
}

function currentPageSeo(config) {
  const origin = String(config.canonicalUrl || location.origin).replace(/\/$/, "");
  const siteName = config.siteName || "분당 Fox";
  const area = currentAreaPage();
  const home = {
    title: config.metaTitle || `${siteName} | 분당·야탑 키스방 실시간 출근부`,
    description: config.metaDescription || `분당·야탑 키스방 실시간 출근부와 매니저 프로필을 확인할 수 있는 ${siteName} 공식 안내 사이트입니다.`,
    canonical: `${origin}/`,
    robots: config.robots || "index,follow",
    type: "website",
  };
  if (area) {
    return {
      ...home,
      title: area.title,
      description: area.description,
      canonical: `${origin}/area/${area.key}`,
      area,
    };
  }
  if (/\/adm|\/bbs\/(login|register|member|write)\.php/.test(path)) {
    return { ...home, canonical: `${origin}${path}`, robots: "noindex,nofollow" };
  }
  if (!path.includes("/bbs/board.php")) return home;

  const table = params.get("bo_table") || "day";
  const boardSeo = {
    day: {
      title: `분당·야탑 키스방 실시간 출근부 | ${siteName}`,
      description: `${siteName}의 오늘 키스방 실시간 출근 정보와 최신 일정을 확인하세요.`,
    },
    gallery: {
      title: `분당·야탑 매니저 프로필 | ${siteName}`,
      description: `${siteName} 매니저의 최신 프로필과 출근 정보를 확인하세요.`,
    },
    notice: {
      title: `${siteName} 공지사항 | 분당·야탑 키스방 이용 안내`,
      description: `${siteName}의 운영 소식과 이용 안내를 확인하세요.`,
    },
    review: {
      title: `${siteName} 이용후기 | 분당·야탑 키스방`,
      description: `${siteName} 이용후기 게시판에서 최신 후기를 확인하세요.`,
    },
  }[table] || {
    title: `${boards[table]?.title || "게시판"} | ${siteName}`,
    description: `${siteName} ${boards[table]?.title || "게시판"}입니다.`,
  };
  const wrId = params.get("wr_id");
  const post = wrId !== null ? findPost(boards[table] || { posts: [] }, wrId) : null;
  const canonicalParams = new URLSearchParams({ bo_table: table });
  if (wrId !== null) canonicalParams.set("wr_id", wrId);
  return {
    title: post?.title ? `${post.title} | ${boards[table]?.title || "게시판"} | ${siteName}` : boardSeo.title,
    description: post?.summary || plainText(post?.content || "").slice(0, 150) || boardSeo.description,
    canonical: `${origin}/bbs/board.php?${canonicalParams}`,
    robots: config.robots || "index,follow",
    type: post ? "article" : "website",
  };
}

function setJsonLd(seo) {
  let script = document.querySelector("script[data-site-structured-data]");
  if (!script) {
    script = document.createElement("script");
    script.type = "application/ld+json";
    script.dataset.siteStructuredData = "true";
    document.head.appendChild(script);
  }
  const origin = String(adminState.config.canonicalUrl || location.origin).replace(/\/$/, "");
  const organizationId = `${origin}/#organization`;
  const websiteId = `${origin}/#website`;
  script.textContent = JSON.stringify({
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "Organization",
        "@id": organizationId,
        name: adminState.config.siteName || "분당 Fox",
        alternateName: ["분당폭스", "분당 Fox"],
        url: `${origin}/`,
        logo: absoluteUrl("/assets/fox-logo.png"),
      },
      {
        "@type": "WebSite",
        "@id": websiteId,
        name: adminState.config.siteName || "분당 Fox",
        url: `${origin}/`,
        publisher: { "@id": organizationId },
      },
      {
        "@type": "WebPage",
        name: seo.title,
        description: seo.description,
        keywords: seo.area ? [...seo.area.keywords, ...seoKeywords(adminState.config.metaKeywords)] : seoKeywords(adminState.config.metaKeywords),
        url: seo.canonical,
        isPartOf: { "@id": websiteId },
      },
    ],
  });
}

function syncAnalyticsScripts(config = {}) {
  syncGa4Script(String(config.gaMeasurementId || "").trim());
  syncNaverAnalyticsScript(String(config.naverAnalyticsId || "").trim());
}

function syncGa4Script(measurementId) {
  document.querySelectorAll("[data-managed-ga4]").forEach((node) => node.remove());
  if (!/^G-[A-Z0-9]+$/i.test(measurementId)) return;
  const loader = document.createElement("script");
  loader.async = true;
  loader.src = `https://www.googletagmanager.com/gtag/js?id=${encodeURIComponent(measurementId)}`;
  loader.dataset.managedGa4 = "loader";
  const inline = document.createElement("script");
  inline.dataset.managedGa4 = "config";
  inline.textContent = `
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', '${measurementId}');
  `;
  document.head.append(loader, inline);
}

function syncNaverAnalyticsScript(siteId) {
  document.querySelectorAll("[data-managed-naver-analytics]").forEach((node) => node.remove());
  if (!siteId) return;
  const inline = document.createElement("script");
  inline.dataset.managedNaverAnalytics = "config";
  inline.textContent = `
    if (!window.wcs_add) window.wcs_add = {};
    window.wcs_add.wa = '${siteId.replace(/['\\]/g, "")}';
  `;
  const loader = document.createElement("script");
  loader.src = "https://wcs.naver.net/wcslog.js";
  loader.dataset.managedNaverAnalytics = "loader";
  loader.onload = () => {
    if (window.wcs_do) window.wcs_do();
  };
  document.head.append(inline, loader);
}

function absoluteUrl(value) {
  try {
    return new URL(value, location.origin).href;
  } catch {
    return location.href;
  }
}

function pageUrl() {
  const base = adminState.config.canonicalUrl || location.origin;
  try {
    return new URL(location.pathname + location.search, base).href;
  } catch {
    return location.href;
  }
}

function seoKeywords(value) {
  return String(value || "")
    .split(/[\n,#]+/)
    .map((item) => item.trim().replace(/^#+/, ""))
    .filter(Boolean)
    .filter((item, index, array) => array.indexOf(item) === index);
}

function plainText(value) {
  const template = document.createElement("template");
  template.innerHTML = String(value || "");
  return String(template.content.textContent || "").replace(/\s+/g, " ").trim();
}

function seoKeywordValue(value) {
  return seoKeywords(value).join("\n");
}

function cleanMetaTitle(value, fallback = "분당 Fox") {
  return String(value || "")
    .split(/[\n,#]/)[0]
    .trim() || fallback;
}

function renderKeywordChips(value) {
  const keywords = seoKeywords(value);
  return keywords.length
    ? `<div class="seo-chip-list">${keywords.map((keyword) => `<span>#${escapeHtml(keyword)}</span>`).join("")}</div>`
    : `<p class="admin-muted">등록된 키워드가 없습니다.</p>`;
}

function apiUrl(pathname) {
  const url = new URL(pathname, location.origin);
  url.searchParams.set("_", Date.now().toString());
  return `${url.pathname}${url.search}`;
}

function explicitTrue(value) {
  if (value === true || value === 1) return true;
  if (typeof value === "string") return /^(true|1|yes|y)$/i.test(value.trim());
  return false;
}

async function loadAdminState() {
  const allowLocalFallback = path.startsWith("/adm");
  try {
    const response = await fetch(apiUrl("/api/state"), { cache: "no-store" });
    if (response.ok) {
      const payload = await response.json();
      if (payload.data) {
        adminState = mergeState(payload.data);
        boards = adminState.boards;
        localStorage.setItem("dateclubAdminState", JSON.stringify(adminState));
        return;
      }
    }
  } catch {
  }

  if (!allowLocalFallback) {
    adminState = structuredClone(defaultAdminState);
    boards = adminState.boards;
    return;
  }

  try {
    const saved = JSON.parse(localStorage.getItem("dateclubAdminState") || "null");
    if (saved) {
      adminState = mergeState(saved);
      boards = adminState.boards;
      return;
    }
  } catch {
    localStorage.removeItem("dateclubAdminState");
  }
  adminState = structuredClone(defaultAdminState);
  boards = adminState.boards;
}

function mergeState(saved) {
  const merged = {
    ...structuredClone(defaultAdminState),
    ...saved,
    config: { ...defaultAdminState.config, ...(saved.config || {}) },
    boards: { ...structuredClone(defaultBoards), ...(saved.boards || {}) },
    members: saved.members || structuredClone(defaultAdminState.members),
    popups: saved.popups || structuredClone(defaultAdminState.popups),
    menus: saved.menus || structuredClone(defaultAdminState.menus),
    points: saved.points || structuredClone(defaultAdminState.points),
    contents: saved.contents || structuredClone(defaultAdminState.contents),
    faq: saved.faq || structuredClone(defaultAdminState.faq),
    permissions: { ...defaultAdminState.permissions, ...(saved.permissions || {}) },
    themeSettings: { ...defaultAdminState.themeSettings, ...(saved.themeSettings || {}) },
    groups: saved.groups || structuredClone(defaultAdminState.groups),
    popular: saved.popular || structuredClone(defaultAdminState.popular),
    polls: saved.polls || structuredClone(defaultAdminState.polls),
    mailLogs: saved.mailLogs || structuredClone(defaultAdminState.mailLogs),
    maintenance: { ...defaultAdminState.maintenance, ...(saved.maintenance || {}) },
    visits: saved.visits || structuredClone(defaultAdminState.visits),
    visitLogs: saved.visitLogs || structuredClone(defaultAdminState.visitLogs),
    manuals: saved.manuals || structuredClone(defaultAdminState.manuals),
  };
  return normalizeAdminState(merged);
}

function normalizeAdminState(state) {
  state = migrateBrandState(state);
  state = ensureBundangSeoState(state);
  if (state.boards.gallery) state.boards.gallery.title = "매니저 프로필";
  if (state.boards.review) state.boards.review.title = "이용후기";
  state.menus = (state.menus || []).map((menu) => {
    if (menu.url?.includes("bo_table=gallery")) return { ...menu, label: "매니저 프로필" };
    if (menu.url?.includes("bo_table=review")) return { ...menu, label: "이용후기" };
    return menu;
  });
  if (!state.menus.some((menu) => menu.url?.includes("bo_table=review"))) {
    state.menus.push({ label: "이용후기", url: "/bbs/board.php?bo_table=review", visible: true });
  }
  state.popular = (state.popular || []).map((item) => item.keyword === "매니저실사" ? { ...item, keyword: "매니저 프로필" } : item);
  state.visits = (state.visits || []).filter((visit) => !(
    (visit.date === "2026-06-02" && Number(visit.count) === 128 && visit.browser === "Chrome" && visit.os === "macOS")
    || (visit.date === "2026-06-01" && Number(visit.count) === 96 && visit.browser === "Safari" && visit.os === "iOS")
    || (visit.date === "2026-05-31" && Number(visit.count) === 74 && visit.browser === "Edge" && visit.os === "Windows")
  ));
  state.visitLogs = state.visitLogs || [];
  return state;
}

function migrateBrandState(value) {
  if (typeof value === "string") {
    return value
      .replace(/분당\s*She/g, "분당 Fox")
      .replace(/분당She/g, "분당Fox")
      .replace(/분당\s*FOX/g, "분당 Fox")
      .replace(/분당FOX/g, "분당Fox")
      .replace(/Yellow\s*date\s*cafe/gi, "분당 Fox")
      .replace(/옐로우데이트카페/g, "분당 Fox");
  }
  if (Array.isArray(value)) {
    return value.map((item) => migrateBrandState(item));
  }
  if (value && typeof value === "object") {
    return Object.fromEntries(Object.entries(value).map(([key, item]) => [key, migrateBrandState(item)]));
  }
  return value;
}

function ensureBundangSeoState(state) {
  const config = state.config || {};
  config.siteName = "분당 Fox";
  config.description = "이성과 교감적인 데이트를 즐길 수 있는 대화 카페입니다.";
  config.address = "분당 야탑역 도보 3분 직진 차병원 앞";
  config.metaTitle = cleanMetaTitle(config.metaTitle, config.siteName || "분당 Fox");
  if (["분당 Fox", "분당Fox"].includes(config.metaTitle) || /강남|NYX|역삼|선릉/.test(config.metaTitle) || !/키스방/.test(config.metaTitle)) {
    config.metaTitle = "분당 Fox | 분당·야탑 키스방 실시간 출근부";
  }
  if (!config.metaDescription || /강남|NYX|역삼|선릉|매니저 안내/.test(config.metaDescription) || !/키스방/.test(config.metaDescription)) {
    config.metaDescription = "분당·야탑 키스방 실시간 출근부와 매니저 프로필을 확인할 수 있는 분당 Fox 공식 안내 사이트입니다. 고액 알바, 단기 고액알바, 고액단기알바 관련 안내도 확인하세요.";
  }
  const keywords = seoKeywords(config.metaKeywords).filter((keyword) => !/강남|NYX|엔와이엑스|역삼|선릉/.test(keyword));
  ["분당 Fox", "분당폭스", "분당 키스방", "분당키스방", "야탑 키스방", "야탑키스방", "성남 키스방", "성남키스방", "분당 야탑 키스방", "분당 키스방 실시간 출근부", "분당 매니저 프로필", "실시간 출근부", "고액 알바", "고액알바", "단기 고액알바", "단기고액알바", "고액단기알바", "단기 알바"].forEach((keyword) => {
    if (!keywords.includes(keyword)) keywords.push(keyword);
  });
  config.metaKeywords = keywords.join("\n");
  if (!config.ogImage || /main-slide|nyx/i.test(config.ogImage)) {
    config.ogImage = "/assets/fox-og-20260609.png";
  }
  config.canonicalUrl = "https://xn--she-vg3mw53b.com";
  config.googleVerification = config.googleVerification || "I7Pir-KxLwjmrfDzidQ5f0c-V1iev1YlDSj559gTykI";
  config.robots = "index,follow";
  state.config = config;
  const savedMainImage = state.themeSettings?.mainImage || "";
  const shouldUseBundangMainImage = !savedMainImage || /main-slide|she|kiss|nyx/i.test(savedMainImage);

  state.themeSettings = {
    ...defaultAdminState.themeSettings,
    ...(state.themeSettings || {}),
    mainCopy: "",
    mainImage: shouldUseBundangMainImage
      ? defaultMainImage
      : savedMainImage,
  };
  return state;
}

async function saveAdminState() {
  localStorage.setItem("dateclubAdminState", JSON.stringify(adminState));
  boards = adminState.boards;
  const token = sessionStorage.getItem("dateclubAdminToken") || localStorage.getItem("dateclubAdminToken");
  if (!token) {
    return false;
  }
  try {
    const response = await fetch("/api/state", {
      method: "PUT",
      headers: {
        "Content-Type": "application/json",
        Authorization: `Bearer ${token}`,
      },
      body: JSON.stringify({ data: adminState }),
    });
    return response.ok;
  } catch {
    return false;
  }
}

function isAdminLoggedIn() {
  const token = sessionStorage.getItem("dateclubAdminToken") || localStorage.getItem("dateclubAdminToken");
  const flag = sessionStorage.getItem("dateclubAdmin") || localStorage.getItem("dateclubAdmin");
  if (flag !== "1" || !token) return false;
  const payload = readTokenPayload(token);
  if (!payload?.exp || payload.exp <= Date.now()) {
    sessionStorage.removeItem("dateclubAdmin");
    sessionStorage.removeItem("dateclubAdminToken");
    localStorage.removeItem("dateclubAdmin");
    localStorage.removeItem("dateclubAdminToken");
    return false;
  }
  return true;
}

function readTokenPayload(token) {
  try {
    return JSON.parse(atob(token.split(".")[0].replace(/-/g, "+").replace(/_/g, "/")));
  } catch {
    return null;
  }
}

function memberSession() {
  try {
    return JSON.parse(sessionStorage.getItem("dateclubMember") || localStorage.getItem("dateclubMember") || "null");
  } catch {
    sessionStorage.removeItem("dateclubMember");
    localStorage.removeItem("dateclubMember");
    return null;
  }
}

function storeAdminSession(token, remember = false) {
  const storage = remember ? localStorage : sessionStorage;
  sessionStorage.removeItem("dateclubAdmin");
  sessionStorage.removeItem("dateclubAdminToken");
  localStorage.removeItem("dateclubAdmin");
  localStorage.removeItem("dateclubAdminToken");
  storage.setItem("dateclubAdmin", "1");
  storage.setItem("dateclubAdminToken", token);
}

function storeMemberSession(member, remember = false) {
  const storage = remember ? localStorage : sessionStorage;
  sessionStorage.removeItem("dateclubMember");
  localStorage.removeItem("dateclubMember");
  storage.setItem("dateclubMember", JSON.stringify(member));
}

async function recordVisit() {
  if (path.includes("/adm")) return;
  const user = memberSession() || (isAdminLoggedIn() ? { id: "admin" } : null);
  const params = new URLSearchParams(location.search);
  try {
    await fetch("/api/visit", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({
        memberId: user?.id || "",
        referrer: document.referrer || "",
        landingUrl: location.href,
        path: location.pathname + location.search,
        utmSource: params.get("utm_source") || "",
        utmMedium: params.get("utm_medium") || "",
        utmCampaign: params.get("utm_campaign") || "",
        utmTerm: params.get("utm_term") || params.get("query") || params.get("q") || "",
      }),
    });
  } catch {
  }
}

function currentUser() {
  return memberSession() || (isAdminLoggedIn() ? { id: "admin", nick: "관리자", role: "admin" } : null);
}

function canReadBoard(board) {
  if (isAdminLoggedIn()) return true;
  return Boolean(board || adminState.permissions.publicBoards);
}

function canWrite(table = "") {
  return isAdminLoggedIn() || (table === "review" && Boolean(memberSession()));
}

function canEdit() {
  return isAdminLoggedIn();
}

function navHref(table) {
  return `/bbs/board.php?bo_table=${table}`;
}

function isPostHidden(post) {
  return explicitTrue(post?.hidden) || post?.manager?.status === "휴무";
}

function visiblePosts(posts = []) {
  return posts.filter((post) => !isPostHidden(post));
}

function managerStatusOptions(selected = "출근") {
  return ["출근", "휴무"].map((status) => `<option value="${status}" ${selected === status ? "selected" : ""}>${status}</option>`).join("");
}

function clonePost(post) {
  return JSON.parse(JSON.stringify(post || {}));
}

function renderHome() {
  const config = adminState.config;
  const mainImage = adminState.themeSettings.mainImage || defaultMainImage;
  const aboutImages = managerThumbs(8);
  const homeBoards = [
    ["공지사항", boards.notice],
    ["출근부", boards.day],
    ["매니저 프로필", boards.gallery],
    ["이용후기", boards.review],
  ];
  layout(`
    ${renderActivePopups()}
    <section class="visual-banner" style="--main-visual-image: url('${escapeHtml(cssImageUrl(mainImage))}')">
      <img class="visual-banner-image" src="${escapeHtml(mainImage)}" alt="${escapeHtml(config.siteName)} 메인 이미지">
    </section>

    <section class="main-section main-latest-list">
      <div class="inner latest-wrap">
        ${homeBoards.map(([label, board]) => latestBox(label, board)).join("")}
      </div>
    </section>

    <section class="main-section about">
      <div class="about-bg-grid" aria-hidden="true">${aboutImages.slice(0, 4).map((image, index) => `
        <div class="about-bg-cell">
          <span style="background-image:url('${escapeHtml(cssImageUrl(image))}')"></span>
          <span class="alt" style="background-image:url('${escapeHtml(cssImageUrl(aboutImages[index + 4] || image))}')"></span>
        </div>
      `).join("")}</div>
      <div class="inner about-content">
        <h2>About ${escapeHtml(config.siteName)}</h2>
        <p>안녕하세요. ${escapeHtml(config.siteName)}입니다.<br>${escapeHtml(config.description)}</p>
        <p class="local-seo-copy">분당 야탑역 인근 키스방 정보를 확인할 수 있는 실시간 출근부와 매니저 프로필 안내 사이트입니다.</p>
      </div>
    </section>

    <section class="main-section home-local-guide" aria-labelledby="local-guide-title">
      <div class="inner home-local-guide-inner">
        <div>
          <p class="section-label">BUNDANG · YATAP · SEONGNAM</p>
          <h2 id="local-guide-title">분당,야탑,성남 실시간 안내</h2>
          <p>분당 Fox는 분당 야탑역 인근에서 오늘의 출근 일정과 매니저 프로필을 확인할 수 있는 공식 안내 사이트입니다.</p>
          <p>운영시간은 ${escapeHtml(config.hours)}이며, 출근 정보와 공지사항은 운영 상황에 맞춰 수시로 업데이트됩니다.</p>
        </div>
        <nav class="home-guide-links" aria-label="주요 안내 바로가기">
          <a href="/bbs/board.php?bo_table=day"><span>오늘의 일정</span><strong>실시간 출근부</strong></a>
          <a href="/bbs/board.php?bo_table=gallery"><span>사진과 안내</span><strong>매니저 프로필</strong></a>
          <a href="/bbs/board.php?bo_table=notice"><span>운영 정보</span><strong>공지사항</strong></a>
          <a href="/bbs/board.php?bo_table=review"><span>이용자 게시판</span><strong>이용후기</strong></a>
        </nav>
        ${areaLinkNav()}
      </div>
    </section>
  `);
  setupSlider();
  bindPopupClose();
  bindPollForm();
}

function renderAreaPage(area = currentAreaPage()) {
  if (!area) return renderHome();
  const config = adminState.config;
  const mainImage = adminState.themeSettings.mainImage || defaultMainImage;
  const aboutImages = managerThumbs(8);
  const relatedAreas = Object.values(areaPages).filter((item) => item.key !== area.key);
  layout(`
    ${renderActivePopups()}
    <section class="visual-banner area-visual" style="--main-visual-image: url('${escapeHtml(cssImageUrl(mainImage))}')">
      <img class="visual-banner-image" src="${escapeHtml(mainImage)}" alt="${escapeHtml(config.siteName)} 메인 이미지">
      <div class="hero-text active area-hero-copy">
        <p>${escapeHtml(area.roman)} · FOX</p>
        <h2>${escapeHtml(area.heading)}</h2>
        <strong>${escapeHtml(area.lead)}</strong>
      </div>
    </section>

    <section class="main-section area-seo-landing">
      <div class="inner area-seo-inner">
        <div class="area-seo-copy">
          <p class="section-label">${escapeHtml(area.roman)} AREA GUIDE</p>
          <h2>${escapeHtml(area.heading)}</h2>
          <p>${escapeHtml(area.intro)}</p>
          <p>분당 Fox는 분당·야탑·성남 인근 키스방 실시간 출근부와 매니저 프로필을 한 곳에서 확인할 수 있도록 운영됩니다.</p>
        </div>
        <nav class="home-guide-links area-cta-links" aria-label="${escapeHtml(area.label)} 주요 게시판 바로가기">
          <a href="/bbs/board.php?bo_table=day"><span>${escapeHtml(area.label)} 오늘의 일정</span><strong>실시간 출근부 보기</strong></a>
          <a href="/bbs/board.php?bo_table=gallery"><span>${escapeHtml(area.label)} 사진과 안내</span><strong>매니저 프로필 보기</strong></a>
          <a href="/bbs/board.php?bo_table=notice"><span>${escapeHtml(area.label)} 운영 정보</span><strong>공지사항 보기</strong></a>
          <a href="/bbs/board.php?bo_table=review"><span>${escapeHtml(area.label)} 이용자 게시판</span><strong>이용후기 보기</strong></a>
        </nav>
      </div>
    </section>

    <section class="main-section main-latest-list area-latest-list">
      <div class="inner latest-wrap">
        ${[
          ["공지사항", boards.notice],
          ["출근부", boards.day],
          ["매니저 프로필", boards.gallery],
          ["이용후기", boards.review],
        ].map(([label, board]) => latestBox(label, board)).join("")}
      </div>
    </section>

    <section class="main-section about area-about">
      <div class="about-bg-grid" aria-hidden="true">${aboutImages.slice(0, 4).map((image, index) => `
        <div class="about-bg-cell">
          <span style="background-image:url('${escapeHtml(cssImageUrl(image))}')"></span>
          <span class="alt" style="background-image:url('${escapeHtml(cssImageUrl(aboutImages[index + 4] || image))}')"></span>
        </div>
      `).join("")}</div>
      <div class="inner about-content">
        <h2>About ${escapeHtml(config.siteName)}</h2>
        <p>안녕하세요. ${escapeHtml(config.siteName)}입니다.<br>${escapeHtml(config.description)}</p>
        <p class="local-seo-copy">${escapeHtml(area.label)} 인근 키스방 정보를 확인할 수 있는 실시간 출근부와 매니저 프로필 안내 사이트입니다.</p>
      </div>
    </section>

    <section class="main-section home-local-guide area-related-guide" aria-labelledby="area-related-title">
      <div class="inner home-local-guide-inner">
        <div>
          <p class="section-label">RELATED AREA</p>
          <h2 id="area-related-title">분당권 지역별 안내</h2>
          <p>${escapeHtml(area.label)} 외에도 분당 Fox의 분당·야탑·성남 실시간 출근부와 매니저 프로필 안내를 같은 사이트에서 확인할 수 있습니다.</p>
        </div>
        <nav class="area-link-list" aria-label="지역별 안내 링크">
          ${relatedAreas.map((item) => `<a href="/area/${item.key}">${escapeHtml(item.label)} 키스방 실시간 출근부</a>`).join("")}
          <a href="/">분당 Fox 메인</a>
        </nav>
      </div>
    </section>
  `);
  setupSlider();
  bindPopupClose();
  bindPollForm();
}

function areaLinkNav() {
  return `
    <nav class="area-link-list home-area-links" aria-label="지역별 키스방 안내">
      <a href="/area/bundang">분당 키스방 실시간 출근부</a>
      <a href="/area/yatap">야탑 키스방 실시간 출근부</a>
      <a href="/area/seongnam">성남 키스방 실시간 출근부</a>
    </nav>
  `;
}

function managerThumbs(count = 8) {
  const images = visiblePosts(adminState.boards.gallery?.posts || [])
    .map((post) => postThumbnail(post))
    .filter(Boolean);
  const fallback = adminState.themeSettings.mainImage || defaultMainImage;
  while (images.length < count) images.push(fallback);
  return images.slice(0, count);
}

function renderActivePopups() {
  const popups = (adminState.popups || []).filter((popup) => popup.enabled);
  if (!popups.length) return "";
  return `
    <div class="site-popups">
      ${popups.map((popup, index) => `
        <article class="site-popup" data-popup="${index}">
          <h2>${escapeHtml(popup.title)}</h2>
          <p>${escapeHtml(popup.content)}</p>
          <button type="button" data-close-popup="${index}">닫기</button>
        </article>
      `).join("")}
    </div>
  `;
}

function bindPopupClose() {
  document.querySelectorAll("[data-close-popup]").forEach((button) => {
    button.addEventListener("click", () => {
      document.querySelector(`[data-popup="${button.dataset.closePopup}"]`)?.remove();
    });
  });
}

function renderHomeWidgets() {
  const popular = (adminState.popular || []).filter((item) => item.visible);
  const poll = (adminState.polls || []).find((item) => item.enabled);
  if (!popular.length && !poll) return "";
  return `
    <div class="inner home-widgets">
      ${popular.length ? `
        <section class="home-widget">
          <h2>인기검색어</h2>
          <div class="keyword-list">${popular.map((item) => `<a href="${item.url || `/bbs/board.php?bo_table=day&stx=${encodeURIComponent(item.keyword)}`}">${escapeHtml(item.keyword)}</a>`).join("")}</div>
        </section>
      ` : ""}
      ${poll ? `
        <section class="home-widget">
          <h2>${escapeHtml(poll.title)}</h2>
          <form id="poll-form" data-poll-id="${escapeHtml(poll.id)}">
            ${poll.options.map((option, index) => `<label><input type="radio" name="option" value="${index}" ${index === 0 ? "checked" : ""}> ${escapeHtml(option)}</label>`).join("")}
            <button type="submit">투표</button>
          </form>
          ${renderPollResult(poll)}
        </section>
      ` : ""}
    </div>
  `;
}

function renderPollResult(poll) {
  const total = poll.votes.reduce((sum, vote) => sum + Number(vote || 0), 0);
  return `
    <div class="poll-result">
      ${poll.options.map((option, index) => {
        const votes = Number(poll.votes[index] || 0);
        const pct = total ? Math.round((votes / total) * 100) : 0;
        return `<p><span>${escapeHtml(option)}</span><b style="width:${pct}%"></b><em>${votes}표</em></p>`;
      }).join("")}
    </div>
  `;
}

function bindPollForm() {
  document.querySelector("#poll-form")?.addEventListener("submit", async (event) => {
    event.preventDefault();
    const poll = adminState.polls.find((item) => item.id === event.currentTarget.dataset.pollId);
    if (!poll) return;
    const option = Number(new FormData(event.currentTarget).get("option"));
    poll.votes[option] = Number(poll.votes[option] || 0) + 1;
    await saveAdminState();
    renderHome();
  });
}

function latestBox(label, board) {
  const table = boardKeyByTitle(board.title);
  const posts = visiblePosts(board.posts || []);
  const items = posts.length
    ? posts.slice(0, 5).map((post, index) => `
      <li>
        <a class="list-link" href="${navHref(table)}&wr_id=${post.id || index}">
          <div class="list-tit-box">
            <div class="list-tit">${escapeHtml(post.title || "제목 없음")}<span class="hot-icon">H</span></div>
            <span class="lt-date">${escapeHtml(post.date || "")}</span>
          </div>
        </a>
      </li>`).join("")
    : `<li class="empty-li">게시물이 없습니다.</li>`;

  return `
    <div class="latest-list-box">
      <div class="latest-list-tit">
        <h2 class="board-tit">${label}</h2>
      </div>
      <div class="lat">
        <h3><a href="${navHref(table)}">${board.title}</a></h3>
        <ul>${items}</ul>
      </div>
    </div>`;
}

function renderBoard(table) {
  const board = boards[table] || boards.day;
  if (!canReadBoard(board)) {
    renderLogin("목록을 볼 권한이 없습니다. 회원이시라면 로그인 후 이용해 보십시오.");
    return;
  }
  const wrId = params.get("wr_id");
  if (wrId !== null) {
    renderPostDetail(table, board, wrId);
    return;
  }

  layout(`
    <section class="sub-banner ${board.banner}"><h2>${board.title}</h2></section>
    <section class="inner board-top">
      <h2 class="main-tit">${board.title}</h2>
      ${canWrite(table || "day") ? `<a class="write-link" href="/bbs/write.php?bo_table=${table || "day"}">글쓰기</a>` : ""}
    </section>
    ${board.type === "gallery" ? renderGallery(board) : renderList(board)}
  `);
  bindBoardDeleteButtons();
}

function subMenu(title) {
  return `
    <nav class="mysubmenu">
      <div class="inner submenu-inner">
        <a class="home" href="/">⌂</a>
        <button type="button">${title}</button>
        <div class="submenu-links">
          ${visibleMenus().map((menu) => `<a href="${menu.url}">${menu.label}</a>`).join("")}
        </div>
      </div>
    </nav>`;
}

function renderList(board) {
  const table = boardKeyByTitle(board.title);
  const filteredPosts = filterPosts(visiblePosts(board.posts || []));
  const rows = filteredPosts.length
    ? filteredPosts.map((post, index) => `
      <li class="board-list-body ${post.notice ? "bo-notice" : ""}">
        <div class="list-subject">
          <a href="${navHref(table)}&wr_id=${post.id ?? index}">${post.notice ? '<span class="notice-item">[공지]</span>' : ""}${escapeHtml(post.title)} <span class="heart">♥</span></a>
          ${canEdit() ? `<span class="inline-actions"><a class="inline-edit" href="/bbs/write.php?bo_table=${table}&wr_id=${post.id ?? index}">수정</a><button type="button" class="inline-delete" data-board-delete="${table}:${post.id ?? index}">삭제</button></span>` : ""}
        </div>
        <div class="list-writer">${post.writer}</div>
        <div class="list-count"><span>조회 </span>${post.hit}</div>
        <div class="list-date">${post.date}</div>
      </li>`).join("")
    : `<li class="empty-li">게시물이 없습니다.</li>`;

  return `
    <section id="bo-list" class="inner">
      <div id="bo-btn-top"><span>Total ${filteredPosts.length}</span> / 1 Page</div>
      <ul class="board-list-content">
        <li class="board-head-list"><div>Title</div><div>Writer</div><div>Hit</div><div>DateTime</div></li>
        ${rows}
      </ul>
      ${searchBox()}
    </section>`;
}

function renderGallery(board) {
  const table = boardKeyByTitle(board.title);
  const filteredPosts = filterPosts(visiblePosts(board.posts || []));
  const cards = filteredPosts.map((post, index) => {
    const manager = post.manager || {};
    const canSeePreview = Boolean(currentUser());
    const thumb = postThumbnail(post, true);
    return `
      <li class="gall-li">
        <a href="${navHref(table)}&wr_id=${post.id || index}" class="gall-box manager-card">
          <div class="gall-img">${thumb ? `<img src="${thumb}" alt="">` : '<span class="no-image">No Image</span>'}</div>
          <div class="gall-tit">${escapeHtml(manager.name || post.title)} <span class="heart">♥</span></div>
          ${canSeePreview ? `
            <div class="manager-meta"><span>${escapeHtml(manager.status || "상담")}</span><span>${escapeHtml(manager.fee || "")}</span></div>
            <p>${escapeHtml(manager.profile || excerpt(post.content || post.summary || ""))}</p>
          ` : ""}
          <div class="gall-info">Hit ${post.hit}<span>${post.date}</span></div>
        </a>
        ${canEdit() ? `<div class="gallery-edit-row"><a class="inline-edit gallery-edit" href="/bbs/write.php?bo_table=${table}&wr_id=${post.id || index}">수정</a><button type="button" class="inline-delete gallery-delete" data-board-delete="${table}:${post.id || index}">삭제</button></div>` : ""}
      </li>`;
  }).join("");
  return `
    <section id="bo-gall" class="inner">
      <div id="bo-btn-top"><span>Total ${filteredPosts.length}</span> / 1 페이지</div>
      <ul class="gallery-grid">
        ${cards || `<li class="empty-li">게시물이 없습니다.</li>`}
      </ul>
      ${searchBox()}
    </section>`;
}

function searchBox() {
  return `
    <form class="search-box" method="get" action="/bbs/board.php">
      <input type="hidden" name="bo_table" value="${escapeHtml(params.get("bo_table") || "day")}">
      <select name="sfl"><option value="title">제목</option><option value="content">내용</option><option value="title_content">제목+내용</option><option value="writer">글쓴이</option></select>
      <input type="text" name="stx" value="${escapeHtml(params.get("stx") || "")}" placeholder="검색어를 입력해주세요">
      <button type="submit">검색</button>
    </form>`;
}

function filterPosts(posts) {
  const keyword = (params.get("stx") || "").trim().toLowerCase();
  const field = params.get("sfl") || "title_content";
  if (!keyword) return posts;
  return posts.filter((post) => {
    const title = String(post.title || "").toLowerCase();
    const content = String(post.summary || post.content || "").toLowerCase();
    const writer = String(post.writer || "").toLowerCase();
    if (field === "title") return title.includes(keyword);
    if (field === "content") return content.includes(keyword);
    if (field === "writer") return writer.includes(keyword);
    return title.includes(keyword) || content.includes(keyword);
  });
}

function boardKeyByTitle(title) {
  return Object.entries(boards).find(([, board]) => board.title === title)?.[0] || "day";
}

function renderPostDetail(table, board, wrId, options = {}) {
  const post = findPost(board, wrId);
  if (!post) {
    layout(`
      <section class="sub-banner ${board.banner}"><h2>${board.title}</h2></section>
      <article class="inner post-detail">
        <h2>게시글을 찾을 수 없습니다.</h2>
        <p class="admin-muted">주소가 잘못되었거나 삭제된 게시글입니다.</p>
        <div class="post-actions"><a href="${navHref(table)}" class="back-link">목록</a></div>
      </article>
    `);
    return;
  }
  const postId = post?.id ?? board.posts.indexOf(post);
  if (post && isPostHidden(post) && !isAdminLoggedIn()) {
    layout(`
      <section class="sub-banner ${board.banner}"><h2>${board.title}</h2></section>
      <article class="inner post-detail">
        <h2>게시글을 볼 수 없습니다.</h2>
        <p class="admin-muted">현재 숨김 처리된 게시글입니다.</p>
        <div class="post-actions"><a href="${navHref(table)}" class="back-link">목록</a></div>
      </article>
    `);
    return;
  }
  layout(`
    <section class="sub-banner ${board.banner}"><h2>${board.title}</h2></section>
    <article class="inner post-detail">
      <h2>${escapeHtml(post?.title || "게시글")}</h2>
      <div class="post-meta">작성자 ${escapeHtml(post?.writer || "관리자")} · ${escapeHtml(post?.date || "")} · 조회 <span data-hit-count>${escapeHtml(post?.hit || "0")}</span></div>
      <div class="post-body rich-content">${sanitizeRichHtml(post?.content || post?.summary || "")}</div>
      ${post?.notice ? "" : renderComments(table, post)}
      <div class="post-actions">
        <a href="${navHref(table)}" class="back-link">목록</a>
        ${canEdit() ? `<a href="/bbs/write.php?bo_table=${table}&wr_id=${postId}" class="back-link edit-link">수정</a>` : ""}
        ${canEdit() ? `<button type="button" class="back-link delete-link" data-board-delete="${table}:${postId}">삭제</button>` : ""}
      </div>
    </article>
  `);
  if (options.countHit !== false) incrementPostHit(table, post);
  if (!post?.notice) bindCommentForm(table, post);
  bindBoardDeleteButtons();
}

function renderComments(table, post) {
  const comments = post?.comments || [];
  return `
    <section class="comments">
      <h3>댓글 ${comments.length}</h3>
      ${comments.length ? comments.map((comment) => renderCommentItem(table, post, comment)).join("") : `<p class="admin-muted">등록된 댓글이 없습니다.</p>`}
      ${canComment(table, post) ? `
        <form id="comment-form">
          <textarea name="content" placeholder="댓글을 입력하세요" required></textarea>
          <div class="comment-options">
            <label><input type="checkbox" name="private" data-private-comment> 비공개 댓글</label>
            <input type="password" name="password" placeholder="비공개 댓글 비밀번호" data-private-password hidden>
          </div>
          <button type="submit">댓글등록</button>
        </form>
      ` : ""}
    </section>
  `;
}

function canComment(table, post) {
  if (post?.notice) return false;
  if (isAdminLoggedIn()) return true;
  return table === "review" && Boolean(memberSession());
}

function renderCommentItem(table, post, comment) {
  const visible = canSeeComment(post, comment);
  return `
    <article class="comment-item ${comment.private ? "private-comment" : ""}" data-comment-id="${escapeHtml(comment.id || "")}">
      <div class="comment-head">
        <strong>${escapeHtml(comment.writer || "회원")}</strong>
        <span>${escapeHtml(comment.date || "")}</span>
        ${comment.private ? `<em>비공개</em>` : ""}
      </div>
      ${visible ? `<p>${escapeHtml(comment.content || "")}</p>` : renderLockedComment(comment)}
      ${visible && comment.replies?.length ? `
        <div class="comment-replies">
          ${comment.replies.map((reply) => `
            <article>
              <strong>${escapeHtml(reply.writer || "관리자")}</strong>
              <span>${escapeHtml(reply.date || "")}</span>
              <p>${escapeHtml(reply.content || "")}</p>
            </article>
          `).join("")}
        </div>
      ` : ""}
      ${isAdminLoggedIn() ? `
        <form class="reply-form" data-reply-comment="${escapeHtml(comment.id || "")}">
          <textarea name="content" placeholder="관리자 대댓글을 입력하세요" required></textarea>
          <button type="submit">대댓글등록</button>
        </form>
      ` : ""}
    </article>
  `;
}

function renderLockedComment(comment) {
  return `
    <form class="private-unlock-form" data-unlock-comment="${escapeHtml(comment.id || "")}">
      <p>비공개 댓글입니다.</p>
      <input type="password" name="password" placeholder="비밀번호">
      <button type="submit">확인</button>
    </form>
  `;
}

function canSeeComment(post, comment) {
  if (!comment.private) return true;
  if (isAdminLoggedIn()) return true;
  const user = currentUser();
  if (!user) return false;
  if (comment.writerId && comment.writerId === user.id) return true;
  if (post.writerId && post.writerId === user.id) return true;
  if (post.writer && post.writer === user.nick) return true;
  return sessionStorage.getItem(`comment-unlock-${comment.id}`) === "1";
}

function bindCommentForm(table, post) {
  document.querySelector("[data-private-comment]")?.addEventListener("change", (event) => {
    const password = document.querySelector("[data-private-password]");
    if (password) {
      password.hidden = !event.currentTarget.checked;
      password.required = event.currentTarget.checked;
    }
  });
  document.querySelector("#comment-form")?.addEventListener("submit", async (event) => {
    event.preventDefault();
    const form = new FormData(event.currentTarget);
    const content = form.get("content");
    const user = currentUser();
    const nextComment = {
      writer: user?.nick || user?.id || "회원",
      writerId: user?.id || "member",
      content,
      private: Boolean(form.get("private")),
      password: form.get("password") || "",
    };
    post.comments = post.comments || [];
    const comments = await persistComment(table, post, { action: "comment", comment: nextComment });
    if (comments) post.comments = comments;
    else if (isAdminLoggedIn()) post.comments.push({ id: `${Date.now()}`, ...nextComment, date: nowText(), replies: [] });
    else {
      alert("댓글 저장에 실패했습니다. 잠시 후 다시 시도해 주세요.");
      return;
    }
    renderPostDetail(table, boards[table], post.id ?? boards[table].posts.indexOf(post), { countHit: false });
  });
  document.querySelectorAll(".reply-form").forEach((form) => {
    form.addEventListener("submit", async (event) => {
      event.preventDefault();
      const content = new FormData(event.currentTarget).get("content");
      const comments = await persistComment(table, post, {
        action: "reply",
        commentId: event.currentTarget.dataset.replyComment,
        reply: { content },
      });
      if (comments) post.comments = comments;
      renderPostDetail(table, boards[table], post.id ?? boards[table].posts.indexOf(post), { countHit: false });
    });
  });
  document.querySelectorAll(".private-unlock-form").forEach((form) => {
    form.addEventListener("submit", (event) => {
      event.preventDefault();
      const comment = post.comments.find((item) => String(item.id) === String(event.currentTarget.dataset.unlockComment));
      const password = new FormData(event.currentTarget).get("password");
      if (comment?.password && String(comment.password) === String(password)) {
        sessionStorage.setItem(`comment-unlock-${comment.id}`, "1");
        renderPostDetail(table, boards[table], post.id ?? boards[table].posts.indexOf(post), { countHit: false });
      } else {
        event.currentTarget.classList.add("invalid");
      }
    });
  });
}

async function persistComment(table, post, payload) {
  try {
    const token = sessionStorage.getItem("dateclubAdminToken") || localStorage.getItem("dateclubAdminToken") || "";
    const response = await fetch("/api/comment", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
        ...(token ? { Authorization: `Bearer ${token}` } : {}),
      },
      body: JSON.stringify({
        table,
        postId: post.id ?? boards[table].posts.indexOf(post),
        memberId: currentUser()?.id || "",
        ...payload,
      }),
    });
    if (!response.ok) return null;
    const result = await response.json();
    await loadAdminState();
    return result.comments;
  } catch {
    return null;
  }
}

async function incrementPostHit(table, post) {
  if (!post) return;
  try {
    const response = await fetch("/api/hit", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({ table, postId: post.id ?? boards[table].posts.indexOf(post) }),
    });
    if (!response.ok) return;
    const result = await response.json();
    post.hit = result.hit;
    const hit = document.querySelector("[data-hit-count]");
    if (hit) hit.textContent = result.hit;
  } catch {
  }
}

function renderLogin(message = "") {
  layout(`
    <section class="sub-banner user"><h2>로그인</h2></section>
    <section id="mb-login" class="mbskin">
      <div class="mbskin-box">
        <h1>로그인</h1>
        ${message ? `<p class="login-alert">${message}</p>` : ""}
        <div class="mb-log-cate"><h2>로그인</h2><a href="/bbs/register.php">회원가입</a></div>
        <form id="login-form">
          <input type="text" name="id" placeholder="아이디" required>
          <input type="password" name="password" placeholder="비밀번호" required>
          <button type="submit">로그인</button>
          <div class="login-info"><label><input type="checkbox" name="remember"> 자동로그인</label><a href="#">정보찾기</a></div>
        </form>
      </div>
    </section>
  `);
  document.querySelector("#login-form").addEventListener("submit", async (event) => {
    event.preventDefault();
    const form = new FormData(event.currentTarget);
    const token = await loginAdmin(form.get("id"), form.get("password"));
    if (token) {
      storeAdminSession(token, Boolean(form.get("remember")));
      location.href = "/adm/";
    } else {
      const member = adminState.members.find((item) => item.id === form.get("id") && String(item.password || "1124") === String(form.get("password")));
      if (member && member.status !== "차단") {
        storeMemberSession({ id: member.id, nick: member.nick, role: "member" }, Boolean(form.get("remember")));
        syncChrome();
        renderHome();
        recordVisit();
      } else {
        renderLogin("아이디 또는 비밀번호가 올바르지 않습니다.");
      }
    }
  });
}

function renderWritePage() {
  const table = params.get("bo_table") || "day";
  const board = boards[table] || boards.day;
  const wrId = params.get("wr_id");
  const post = wrId !== null ? findPost(board, wrId) : null;
  if ((post && !canEdit()) || (!post && !canWrite(table))) {
    renderLogin("글쓰기 권한이 필요합니다.");
    return;
  }
  const manager = post?.manager || {};
  layout(`
    <section class="sub-banner ${board.banner}"><h2>${escapeHtml(board.title)} 글쓰기</h2></section>
    <form class="inner post-editor" id="write-form">
      ${postEditorFields(board, post)}
      <button type="submit">${post ? "수정 저장" : "등록"}</button>
    </form>
  `);
  bindEditorTools(document.querySelector("#write-form"));
  document.querySelector("#write-form").addEventListener("submit", async (event) => {
    event.preventDefault();
    const form = Object.fromEntries(new FormData(event.currentTarget).entries());
    const user = currentUser();
    const content = readEditorContent(event.currentTarget);
    const image = firstContentImage(content) || post?.image || "";
    const nextPost = {
      ...(post || {}),
      id: post?.id ?? Date.now().toString(),
      title: form.title,
      writer: user?.nick || user?.id || "회원",
      hit: post?.hit || "0",
      date: post?.date || today(),
      summary: excerpt(content),
      content,
      image,
      notice: isAdminLoggedIn() && Boolean(form.notice),
      comments: post?.comments || [],
    };
    if (board.type === "gallery") {
      const managerStatus = form.managerStatus || "출근";
      nextPost.manager = {
        name: form.managerName || form.title,
        fee: form.managerFee || "",
        status: managerStatus,
        schedule: form.managerSchedule || "",
        profile: form.managerProfile || excerpt(content),
      };
      nextPost.title = form.title || nextPost.manager.name;
      nextPost.summary = nextPost.manager.profile;
      nextPost.hidden = managerStatus === "휴무";
    }
    if (post) {
      const index = board.posts.indexOf(post);
      adminState.boards[table].posts[index] = nextPost;
      await saveAdminState();
    } else {
      const savedPost = await persistPost(table, nextPost);
      if (savedPost && !savedPost.error) {
        await loadAdminState();
        alert("등록이 완료되었습니다.");
        location.href = `${navHref(table)}&wr_id=${savedPost.id}`;
        return;
      }
      if (!isAdminLoggedIn()) {
        alert(savedPost?.error || "게시글 저장에 실패했습니다. 잠시 후 다시 시도해 주세요.");
        return;
      }
      adminState.boards[table].posts.unshift(nextPost);
      await saveAdminState();
    }
    alert(post ? "수정이 완료되었습니다." : "등록이 완료되었습니다.");
    location.href = `${navHref(table)}&wr_id=${nextPost.id}`;
  });
}

function firstContentImage(html) {
  const value = String(html || "");
  if (typeof document !== "undefined") {
    const template = document.createElement("template");
    template.innerHTML = value;
    const img = template.content.querySelector("img");
    if (img?.getAttribute("src")) return img.getAttribute("src");
  }
  const match = value.match(/<img[^>]+src=(?:"([^"]+)"|'([^']+)'|([^\\s>]+))/i);
  return match?.[1] || match?.[2] || match?.[3] || "";
}

function postThumbnail(post, withFallback = false) {
  const managerImage = firstContentImage(post?.content) || post?.image || firstContentImage(post?.summary);
  return managerImage || (withFallback ? (adminState.themeSettings.mainImage || "/assets/fox-logo.png") : "");
}

async function deleteBoardPost(table, postRef) {
  const board = adminState.boards[table] || boards[table];
  if (!board) return false;
  const index = board.posts.findIndex((item, itemIndex) => String(item.id ?? itemIndex) === String(postRef));
  if (index < 0) return false;
  board.posts.splice(index, 1);
  await saveAdminState();
  return true;
}

function bindBoardDeleteButtons() {
  document.querySelectorAll("[data-board-delete]").forEach((button) => {
    button.addEventListener("click", async (event) => {
      event.preventDefault();
      event.stopPropagation();
      const [table, postRef] = button.dataset.boardDelete.split(":");
      if (!confirm("게시글을 삭제할까요?")) return;
      const deleted = await deleteBoardPost(table, postRef);
      if (!deleted) return;
      alert("삭제가 완료되었습니다.");
      if (params.get("wr_id") !== null) {
        location.href = navHref(table);
      } else {
        renderBoard(table);
      }
    });
  });
}

async function persistPost(table, post) {
  try {
    const token = sessionStorage.getItem("dateclubAdminToken") || localStorage.getItem("dateclubAdminToken") || "";
    const user = currentUser();
    const response = await fetch("/api/post", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
        ...(token ? { Authorization: `Bearer ${token}` } : {}),
      },
      body: JSON.stringify({
        table,
        post,
        memberId: user?.id || "",
      }),
    });
    if (!response.ok) {
      const result = await response.json().catch(() => ({}));
      return { error: result.error || "게시글 저장에 실패했습니다." };
    }
    const result = await response.json();
    return result.post;
  } catch {
    return { error: "네트워크 상태를 확인한 뒤 다시 시도해 주세요." };
  }
}

function postEditorFields(board, post = null) {
  const manager = post?.manager || {};
  return `
    <label>제목<input name="title" value="${escapeHtml(post?.title || "")}" required></label>
    ${board.type === "gallery" ? `
      <section class="manager-editor-grid">
        <label>매니저 이름<input name="managerName" value="${escapeHtml(manager.name || post?.title || "")}" required></label>
        <label>이용 금액<input name="managerFee" value="${escapeHtml(manager.fee || "")}" placeholder="예: 13만 / 상담문의"></label>
        <label>출근 상태
          <select name="managerStatus">
            ${managerStatusOptions(manager.status || "출근")}
          </select>
        </label>
        <label>출근 일정<input name="managerSchedule" value="${escapeHtml(manager.schedule || "")}" placeholder="예: 13:00 - 22:00"></label>
      </section>
      <label>프로필 요약<textarea name="managerProfile" class="short-text">${escapeHtml(manager.profile || post?.summary || "")}</textarea></label>
    ` : ""}
    <label>본문</label>
    ${editorToolbar()}
    <div class="rich-editor" contenteditable="true" data-rich-editor>${prepareEditorHtml(post?.content || post?.summary || "")}</div>
    ${isAdminLoggedIn() && board.type !== "gallery" ? `<label class="check-row"><input type="checkbox" name="notice" ${post?.notice ? "checked" : ""}> 공지글</label>` : ""}
  `;
}

function editorToolbar() {
  const editorColors = [
    ["검정", "#222222"],
    ["회색", "#777777"],
    ["흰색", "#ffffff"],
    ["빨강", "#e53935"],
    ["주황", "#f57c00"],
    ["노랑", "#fbc02d"],
    ["초록", "#2e7d32"],
    ["연두", "#8bc34a"],
    ["파랑", "#1565c0"],
    ["하늘", "#29b6f6"],
    ["보라", "#7b1fa2"],
    ["연보라", "#b39ddb"],
    ["진회색", "#444444"],
    ["분홍", "#ec407a"],
    ["코랄", "#ff7043"],
    ["갈색", "#8d6e63"],
    ["금색", "#c9a227"],
    ["민트", "#26a69a"],
    ["청록", "#00897b"],
    ["남색", "#283593"],
    ["라벤더", "#9575cd"],
    ["와인", "#ad1457"],
    ["살구", "#ffb74d"],
    ["올리브", "#7cb342"],
    ["진초록", "#00695c"],
    ["네이비", "#0d47a1"],
    ["인디고", "#3949ab"],
    ["자주", "#8e24aa"],
    ["핫핑크", "#d81b60"],
    ["연회색", "#bdbdbd"],
    ["아이보리", "#fff8e1"],
    ["진빨강", "#b71c1c"],
  ];
  return `
    <div class="editor-toolbar" aria-label="본문 편집 도구">
      <div class="toolbar-group">
        <button type="button" data-editor-command="bold" title="굵게"><strong>B</strong></button>
        <button type="button" data-editor-command="italic" title="기울임"><em>I</em></button>
        <button type="button" data-editor-command="underline" title="밑줄"><u>U</u></button>
        <button type="button" data-editor-command="strikeThrough" title="취소선"><s>S</s></button>
      </div>
      <div class="toolbar-group">
        <button type="button" data-editor-block="p">본문</button>
        <button type="button" data-editor-block="h2">제목</button>
      </div>
      <div class="toolbar-group">
        <button type="button" data-editor-command="justifyLeft" title="왼쪽 정렬">좌</button>
        <button type="button" data-editor-command="justifyCenter" title="가운데 정렬">중</button>
        <button type="button" data-editor-command="justifyRight" title="오른쪽 정렬">우</button>
      </div>
      <select data-editor-size aria-label="글자크기">
        <option value="">글자크기</option>
        <option value="14px">14px</option>
        <option value="16px">16px</option>
        <option value="18px">18px</option>
        <option value="22px">22px</option>
        <option value="28px">28px</option>
      </select>
      <div class="toolbar-color-picker" data-editor-color-picker>
        <button type="button" class="toolbar-color-trigger" data-editor-color-trigger aria-haspopup="true" aria-expanded="false">
          <span>색상</span>
          <span class="toolbar-color-current" data-editor-color-current style="--swatch-color:#222222" aria-hidden="true"></span>
        </button>
        <div class="toolbar-color-palette" data-editor-color-palette role="menu" aria-label="글자 색상 선택" hidden>
          ${editorColors.map(([name, color]) => `
            <button type="button" class="toolbar-color-option${color === "#ffffff" ? " is-light" : ""}" data-editor-color="${color}" role="menuitem" title="${name}" aria-label="${name}">
              <span class="toolbar-color-swatch" style="--swatch-color:${color}" aria-hidden="true"></span>
              <span>${name}</span>
            </button>
          `).join("")}
        </div>
      </div>
      <select data-editor-line aria-label="줄간격">
        <option value="">줄간격</option>
        <option value="1.4">1.4</option>
        <option value="1.7">1.7</option>
        <option value="2">2.0</option>
      </select>
      <div class="toolbar-group">
        <button type="button" data-editor-link title="링크">링크</button>
        <button type="button" data-editor-image title="사진첨부">사진</button>
        <input type="file" accept="image/*" data-editor-image-file multiple hidden>
      </div>
    </div>
  `;
}

function bindEditorTools(scope = document) {
  const editor = scope.querySelector("[data-rich-editor]");
  if (!editor) return;
  let lastRange = null;
  const rememberRange = () => {
    const selection = getSelection();
    if (!selection || !selection.rangeCount) return;
    const range = selection.getRangeAt(0);
    if (editor.contains(range.commonAncestorContainer)) {
      lastRange = range.cloneRange();
    }
  };
  const restoreRange = () => {
    editor.focus();
    const selection = getSelection();
    if (!selection) return;
    selection.removeAllRanges();
    if (lastRange) {
      selection.addRange(lastRange);
      return;
    }
    const range = document.createRange();
    range.selectNodeContents(editor);
    range.collapse(false);
    selection.addRange(range);
  };
  ["keyup", "mouseup", "touchend", "input", "focus"].forEach((eventName) => editor.addEventListener(eventName, rememberRange));
  editor.addEventListener("dragover", (event) => {
    if (!event.dataTransfer?.types.includes("text/plain")) return;
    event.preventDefault();
  });
  editor.addEventListener("drop", (event) => {
    const figureId = event.dataTransfer?.getData("text/plain");
    if (!figureId?.startsWith("editor-image:")) return;
    const id = figureId.replace("editor-image:", "");
    const figure = [...editor.querySelectorAll("[data-editor-image-id]")].find((item) => item.dataset.editorImageId === id);
    if (!figure) return;
    event.preventDefault();
    const range = caretRangeFromPoint(event.clientX, event.clientY);
    if (!range) return;
    range.insertNode(figure);
    figure.insertAdjacentHTML("afterend", "<p><br></p>");
    normalizeEditorImages(editor);
    rememberRange();
  });
  normalizeEditorImages(editor);
  scope.querySelectorAll("[data-editor-command]").forEach((button) => {
    button.addEventListener("click", () => {
      editor.focus();
      document.execCommand(button.dataset.editorCommand, false);
      rememberRange();
    });
  });
  scope.querySelectorAll("[data-editor-block]").forEach((button) => {
    button.addEventListener("click", () => {
      editor.focus();
      document.execCommand("formatBlock", false, button.dataset.editorBlock);
      rememberRange();
    });
  });
  scope.querySelector("[data-editor-size]")?.addEventListener("change", (event) => {
    restoreRange();
    wrapSelection(editor, { fontSize: event.currentTarget.value });
    event.currentTarget.value = "";
    rememberRange();
  });
  const colorPicker = scope.querySelector("[data-editor-color-picker]");
  const colorTrigger = colorPicker?.querySelector("[data-editor-color-trigger]");
  const colorPalette = colorPicker?.querySelector("[data-editor-color-palette]");
  const closeColorPalette = () => {
    if (!colorPalette || !colorTrigger) return;
    colorPalette.hidden = true;
    colorTrigger.setAttribute("aria-expanded", "false");
  };
  colorTrigger?.addEventListener("click", () => {
    if (!colorPalette) return;
    const willOpen = colorPalette.hidden;
    colorPalette.hidden = !willOpen;
    colorTrigger.setAttribute("aria-expanded", String(willOpen));
  });
  colorPicker?.querySelectorAll("[data-editor-color]").forEach((button) => {
    button.addEventListener("mousedown", (event) => event.preventDefault());
    button.addEventListener("click", () => {
      const color = button.dataset.editorColor;
      restoreRange();
      wrapSelection(editor, { color });
      colorPicker.querySelector("[data-editor-color-current]")?.style.setProperty("--swatch-color", color);
      closeColorPalette();
      rememberRange();
    });
  });
  scope.addEventListener("click", (event) => {
    if (!colorPicker?.contains(event.target)) closeColorPalette();
  });
  colorPicker?.addEventListener("keydown", (event) => {
    if (event.key !== "Escape") return;
    closeColorPalette();
    colorTrigger?.focus();
  });
  scope.querySelector("[data-editor-line]")?.addEventListener("change", (event) => {
    restoreRange();
    wrapSelection(editor, { lineHeight: event.currentTarget.value });
    event.currentTarget.value = "";
    rememberRange();
  });
  scope.querySelector("[data-editor-link]")?.addEventListener("click", () => {
    restoreRange();
    const url = prompt("링크 주소를 입력하세요.", "https://");
    if (!url || url === "https://") return;
    document.execCommand("createLink", false, url);
    rememberRange();
  });
  const imageInput = scope.querySelector("[data-editor-image-file]");
  scope.querySelector("[data-editor-image]")?.addEventListener("click", () => {
    rememberRange();
    imageInput?.click();
  });
  imageInput?.addEventListener("change", async () => {
    const files = [...(imageInput.files || [])];
    if (!files.length) return;
    try {
      restoreRange();
      for (const file of files) {
        const imageData = await resizeEditorImage(file);
        const imageUrl = await uploadEditorImage(imageData, file.name);
        insertEditorImage(editor, imageUrl);
      }
      normalizeEditorImages(editor);
      rememberRange();
      imageInput.value = "";
    } catch {
      alert("이미지 처리에 실패했습니다. 이미지 용량을 줄이거나 다른 이미지를 선택해 주세요.");
      imageInput.value = "";
    }
  });
}

async function uploadEditorImage(imageData, name = "image") {
  const token = sessionStorage.getItem("dateclubAdminToken") || localStorage.getItem("dateclubAdminToken") || "";
  const user = currentUser();
  try {
    const response = await fetch("/api/upload", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
        ...(token ? { Authorization: `Bearer ${token}` } : {}),
      },
      body: JSON.stringify({
        image: imageData,
        name,
        memberId: user?.id || "",
      }),
    });
    if (!response.ok) return imageData;
    const result = await response.json();
    return result.url || imageData;
  } catch {
    return imageData;
  }
}

async function uploadThemeImage(imageData, name = "main-image") {
  const token = sessionStorage.getItem("dateclubAdminToken") || localStorage.getItem("dateclubAdminToken") || "";
  if (!token) throw new Error("Admin login required");
  const response = await fetch("/api/upload", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
      Authorization: `Bearer ${token}`,
    },
    body: JSON.stringify({
      image: imageData,
      name,
      memberId: "",
    }),
  });
  if (!response.ok) {
    const message = await response.text().catch(() => "");
    throw new Error(message || "Image upload failed");
  }
  const result = await response.json();
  if (!result.url) throw new Error("Image URL missing");
  return result.url;
}

function prepareEditorHtml(html) {
  return sanitizeRichHtml(String(html || "").replace(/<div class="editor-image-tools"[\s\S]*?<\/div>/gi, ""));
}

function editorImageMarkup(src) {
  return `<figure class="editor-image" draggable="true"><img src="${src}" alt=""></figure><p><br></p>`;
}

function insertEditorImage(editor, src) {
  document.execCommand("insertHTML", false, editorImageMarkup(src));
}

function normalizeEditorImages(editor) {
  editor.querySelectorAll("figure").forEach((figure) => {
    if (!figure.querySelector("img")) return;
    figure.classList.add("editor-image");
    figure.setAttribute("draggable", "true");
    figure.dataset.editorImageId ||= `${Date.now()}-${Math.random().toString(16).slice(2)}`;
    figure.querySelector(".editor-image-tools")?.remove();
    figure.insertAdjacentHTML("afterbegin", `
      <div class="editor-image-tools" contenteditable="false">
        <button type="button" class="editor-image-drag" title="사진 이동">이동</button>
        <button type="button" class="editor-image-remove" title="사진 삭제">삭제</button>
      </div>
    `);
    if (figure.dataset.editorDragBound !== "1") {
      figure.dataset.editorDragBound = "1";
      figure.addEventListener("dragstart", (event) => {
        event.dataTransfer?.setData("text/plain", `editor-image:${figure.dataset.editorImageId}`);
        event.dataTransfer?.setDragImage(figure.querySelector("img") || figure, 24, 24);
      });
    }
    figure.querySelector(".editor-image-remove")?.addEventListener("click", (event) => {
      event.preventDefault();
      event.stopPropagation();
      const next = figure.nextElementSibling;
      figure.remove();
      if (next?.matches("p") && !next.textContent.trim() && !next.querySelector("img")) next.remove();
      editor.focus();
    });
  });
}

function caretRangeFromPoint(x, y) {
  if (document.caretRangeFromPoint) return document.caretRangeFromPoint(x, y);
  const position = document.caretPositionFromPoint?.(x, y);
  if (!position) return null;
  const range = document.createRange();
  range.setStart(position.offsetNode, position.offset);
  range.collapse(true);
  return range;
}

function resizeEditorImage(file, maxSize = 900, quality = 0.72) {
  return new Promise((resolve, reject) => {
    const reader = new FileReader();
    reader.addEventListener("error", reject);
    reader.addEventListener("load", () => {
      const image = new Image();
      image.addEventListener("error", reject);
      image.addEventListener("load", () => {
        const ratio = Math.min(1, maxSize / Math.max(image.width, image.height));
        const width = Math.max(1, Math.round(image.width * ratio));
        const height = Math.max(1, Math.round(image.height * ratio));
        const canvas = document.createElement("canvas");
        canvas.width = width;
        canvas.height = height;
        const context = canvas.getContext("2d");
        context.fillStyle = "#fff";
        context.fillRect(0, 0, width, height);
        context.drawImage(image, 0, 0, width, height);
        resolve(canvas.toDataURL("image/jpeg", quality));
      });
      image.src = reader.result;
    });
    reader.readAsDataURL(file);
  });
}

function wrapSelection(editor, style) {
  editor.focus();
  const selection = getSelection();
  if (!selection || !selection.rangeCount) return;
  const range = selection.getRangeAt(0);
  const span = document.createElement("span");
  Object.assign(span.style, style);
  if (range.collapsed) {
    span.textContent = "\u200b";
    range.insertNode(span);
  } else {
    span.appendChild(range.extractContents());
    range.insertNode(span);
  }
  selection.removeAllRanges();
}

function readEditorContent(scope) {
  const editor = scope.querySelector("[data-rich-editor]");
  if (!editor) return "";
  const clone = editor.cloneNode(true);
  clone.querySelectorAll(".editor-image-tools").forEach((node) => node.remove());
  clone.querySelectorAll("[data-editor-image-id], [data-editor-drag-bound], [draggable]").forEach((node) => {
    node.removeAttribute("data-editor-image-id");
    node.removeAttribute("data-editor-drag-bound");
    node.removeAttribute("draggable");
  });
  return sanitizeRichHtml(clone.innerHTML || "");
}

function bindImageUpload(scope = document, fallback = "") {
  const input = scope.querySelector("[data-image-file]");
  const hidden = scope.querySelector("[data-image-data]");
  const preview = scope.querySelector("[data-image-preview]");
  if (!input || !hidden) return;
  hidden.value = hidden.value || fallback;
  input.addEventListener("change", async () => {
    const file = input.files?.[0];
    if (!file) return;
    const previousValue = hidden.value;
    scope.dataset.imageUploading = "1";
    if (preview) preview.innerHTML = "<span>이미지를 업로드하고 있습니다.</span>";
    const reader = new FileReader();
    reader.addEventListener("load", async () => {
      if (preview) preview.innerHTML = `<img src="${reader.result}" alt="">`;
      try {
        const imageData = await resizeEditorImage(file, 1800, 0.82);
        const imageUrl = await uploadThemeImage(imageData, file.name);
        hidden.value = imageUrl;
        if (preview) preview.innerHTML = `<img src="${escapeHtml(imageUrl)}" alt="">`;
      } catch {
        hidden.value = previousValue;
        if (preview) {
          preview.innerHTML = previousValue
            ? `<img src="${escapeHtml(previousValue)}" alt="">`
            : "<span>이미지 업로드에 실패했습니다. 다시 시도해주세요.</span>";
        }
        alert("이미지 업로드에 실패했습니다. 다시 시도해주세요.");
      } finally {
        delete scope.dataset.imageUploading;
      }
    });
    reader.readAsDataURL(file);
  });
}

function findPost(board, wrId) {
  return board.posts.find((item) => String(item.id) === String(wrId)) || board.posts[Number(wrId)] || null;
}

function excerpt(html, length = 90) {
  const text = String(html || "").replace(/<[^>]*>/g, " ").replace(/\s+/g, " ").trim();
  return text.length > length ? `${text.slice(0, length)}...` : text;
}

function sanitizeRichHtml(html) {
  const template = document.createElement("template");
  template.innerHTML = String(html || "");
  template.content.querySelectorAll("script, iframe, object, embed, style").forEach((node) => node.remove());
  template.content.querySelectorAll("*").forEach((node) => {
    [...node.attributes].forEach((attr) => {
      if (/^on/i.test(attr.name) || attr.name === "srcdoc") node.removeAttribute(attr.name);
      if ((attr.name === "href" || attr.name === "src") && /^javascript:/i.test(attr.value)) node.removeAttribute(attr.name);
    });
  });
  return template.innerHTML;
}

function renderAdminLogin(message = "") {
  layout(`
    <section class="admin-login-page">
      <form id="admin-login-form" class="admin-login-card">
        <p class="admin-kicker">분당 Fox</p>
        <h1>관리자 로그인</h1>
        ${message ? `<p class="login-alert">${message}</p>` : ""}
        <input type="text" name="id" placeholder="아이디" autocomplete="username" required>
        <input type="password" name="password" placeholder="비밀번호" autocomplete="current-password" required>
        <button type="submit">로그인</button>
        <a href="/">홈페이지로 이동</a>
      </form>
    </section>
  `);
  document.querySelector("#admin-login-form").addEventListener("submit", async (event) => {
    event.preventDefault();
    const form = new FormData(event.currentTarget);
    const token = await loginAdmin(form.get("id"), form.get("password"));
    if (token) {
      sessionStorage.setItem("dateclubAdmin", "1");
      sessionStorage.setItem("dateclubAdminToken", token);
      renderAdmin("dashboard");
    } else {
      renderAdminLogin("아이디 또는 비밀번호가 올바르지 않습니다.");
    }
  });
}

async function loginAdmin(id, password) {
  try {
    const response = await fetch("/api/login", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({ id, password }),
    });
    if (!response.ok) {
      return "";
    }
    const payload = await response.json();
    return payload.token || "";
  } catch {
    return "";
  }
}

function renderAdmin(section = params.get("section") || "dashboard") {
  if (!isAdminLoggedIn()) {
    renderAdminLogin();
    return;
  }

  const active = section;
  layout(`
    <section class="admin-shell">
      <button type="button" class="admin-menu-toggle" id="admin-menu-toggle" aria-label="관리자 메뉴 열기">메뉴</button>
      <div class="admin-drawer-backdrop" id="admin-drawer-backdrop"></div>
      <aside class="admin-side">
        <div class="admin-side-head">
          <a class="admin-brand" href="/adm/">분당 Fox <span>관리자</span></a>
          <button type="button" class="admin-drawer-close" id="admin-drawer-close" aria-label="관리자 메뉴 닫기">×</button>
        </div>
        ${adminNav(active)}
      </aside>
      <main class="admin-main">
        <header class="admin-top">
          <div class="admin-title-wrap">
            <h1>${adminTitle(active)}</h1>
            <button type="button" class="help-button" id="admin-help-toggle" aria-label="${adminTitle(active)} 도움말">?</button>
          </div>
          <div>
            <a href="/">홈페이지</a>
            <button type="button" id="admin-logout">로그아웃</button>
          </div>
        </header>
        <section class="admin-help-panel" id="admin-help-panel" hidden>
          <strong>${adminTitle(active)}</strong>
          <p>${escapeHtml(adminHelp[active] || "이 메뉴의 운영 기능을 관리합니다.")}</p>
        </section>
        ${adminContent(active)}
      </main>
    </section>
  `);

  document.querySelectorAll("[data-admin-section]").forEach((link) => {
    link.addEventListener("click", (event) => {
      event.preventDefault();
      document.body.classList.remove("admin-drawer-open");
      history.pushState(null, "", `/adm/?section=${link.dataset.adminSection}`);
      renderAdmin(link.dataset.adminSection);
    });
  });
  document.querySelector("#admin-menu-toggle")?.addEventListener("click", () => {
    document.body.classList.add("admin-drawer-open");
  });
  document.querySelector("#admin-drawer-close")?.addEventListener("click", () => {
    document.body.classList.remove("admin-drawer-open");
  });
  document.querySelector("#admin-drawer-backdrop")?.addEventListener("click", () => {
    document.body.classList.remove("admin-drawer-open");
  });
  document.querySelector("#admin-logout").addEventListener("click", () => {
    sessionStorage.removeItem("dateclubAdmin");
    sessionStorage.removeItem("dateclubAdminToken");
    localStorage.removeItem("dateclubAdmin");
    localStorage.removeItem("dateclubAdminToken");
    renderAdminLogin();
  });
  document.querySelector("#admin-help-toggle")?.addEventListener("click", () => {
    const panel = document.querySelector("#admin-help-panel");
    panel.hidden = !panel.hidden;
  });
  bindAdminSection(active);
}

function adminNav(active) {
  const groups = [
    ["환경설정", [["dashboard", "관리자메인"], ["config", "기본환경설정"], ["auth", "관리권한설정"], ["theme", "테마설정"], ["menus", "메뉴설정"], ["popups", "팝업레이어관리"], ["maintenance", "파일/캐시관리"]]],
    ["회원관리", [["members", "회원관리"], ["visits", "접속자집계"], ["points", "포인트관리"]]],
    ["게시판관리", [["boards", "게시판관리"], ["posts", "게시글관리"], ["groups", "게시판그룹관리"], ["popular", "인기검색어관리"], ["write-count", "글,댓글 현황"]]],
    ["이용방법", [["manuals", "관리자 이용방법"]]],
  ];
  return groups.map(([title, items]) => `
    <div class="admin-nav-group">
      <h2>${title}</h2>
      ${items.map(([key, label]) => `<a href="/adm/?section=${key}" data-admin-section="${key}" class="${active === key ? "active" : ""}">${label}</a>`).join("")}
    </div>
  `).join("");
}

function adminTitle(section) {
  const titles = {
    dashboard: "관리자메인",
    config: "기본환경설정",
    auth: "관리권한설정",
    theme: "테마설정",
    menus: "메뉴설정",
    popups: "팝업레이어관리",
    maintenance: "파일/캐시관리",
    members: "회원관리",
    visits: "접속자집계",
    points: "포인트관리",
    boards: "게시판관리",
    posts: "게시글관리",
    groups: "게시판그룹관리",
    popular: "인기검색어관리",
    "write-count": "글,댓글 현황",
    manuals: "관리자 이용방법",
  };
  return titles[section] || "관리자메인";
}

function adminContent(section) {
  if (section === "config") return configPanel();
  if (section === "members") return membersPanel();
  if (section === "boards") return boardsPanel();
  if (section === "posts") return postsPanel();
  if (section === "menus") return menusPanel();
  if (section === "popups") return popupsPanel();
  if (section === "points") return pointsPanel();
  if (section === "visits") return visitsPanel();
  if (section === "write-count") return writeCountPanel();
  if (section === "auth") return authPanel();
  if (section === "theme") return themePanel();
  if (section === "maintenance") return maintenancePanel();
  if (section === "groups") return groupsPanel();
  if (section === "popular") return popularPanel();
  if (section === "manuals") return manualsPanel();
  return dashboardPanel();
}

function dashboardPanel() {
  const postCount = Object.values(adminState.boards).reduce((sum, board) => sum + board.posts.length, 0);
  return `
    <section class="admin-stats">
      <div><strong>${adminState.members.length.toLocaleString()}</strong><span>회원</span></div>
      <div><strong>${postCount.toLocaleString()}</strong><span>게시글</span></div>
      <div><strong>${adminState.popups.filter((popup) => popup.enabled).length}</strong><span>활성 팝업</span></div>
      <div><strong>${adminState.points.length}</strong><span>포인트 내역</span></div>
    </section>
    <section class="admin-card">
      <h2>빠른 이동</h2>
      <div class="admin-actions">
        <button data-admin-section="posts">게시글 관리</button>
        <button data-admin-section="members">회원 관리</button>
        <button data-admin-section="popups">팝업 관리</button>
        <button data-admin-section="config">사이트 설정</button>
      </div>
    </section>
    <section class="admin-card">
      <h2>최근 게시글</h2>
      ${adminTable(["게시판", "제목", "작성자", "날짜"], Object.entries(adminState.boards).flatMap(([key, board]) => board.posts.map((post) => [board.title, post.title, post.writer || "관리자", post.date])))}
    </section>
  `;
}

function configPanel() {
  const config = adminState.config;
  return `
    <form class="admin-card admin-form" id="config-form">
      <label>사이트명<input name="siteName" value="${escapeHtml(config.siteName)}"></label>
      <label>설명<textarea name="description">${escapeHtml(config.description)}</textarea></label>
      <label>주소<input name="address" value="${escapeHtml(config.address)}"></label>
      <label>영업시간<input name="hours" value="${escapeHtml(config.hours)}"></label>
      <label>테마명<input name="theme" value="${escapeHtml(config.theme)}"></label>
      <section class="seo-config-block">
        <h2>검색엔진 / 메타태그</h2>
        <p class="admin-muted">저장하면 사이트의 title, description, keywords 메타태그에 바로 반영됩니다. 공유 이미지, canonical, robots는 운영 기본값으로 자동 관리됩니다.</p>
        <label>메타 타이틀<input name="metaTitle" value="${escapeHtml(config.metaTitle || config.siteName)}"></label>
        <label>메타 설명<textarea name="metaDescription">${escapeHtml(config.metaDescription || config.description)}</textarea></label>
        <label>키워드 태그
          <textarea name="metaKeywords" data-seo-keywords placeholder="#분당Fox&#10;#분당키스방&#10;#야탑키스방&#10;#성남키스방&#10;#고액알바">${escapeHtml(seoKeywordValue(config.metaKeywords))}</textarea>
        </label>
        <div>
          <strong class="seo-preview-title">등록된 키워드</strong>
          <div data-seo-chip-preview>${renderKeywordChips(config.metaKeywords)}</div>
        </div>
        <label>GA4 Measurement ID
          <input name="gaMeasurementId" value="${escapeHtml(config.gaMeasurementId || "")}" placeholder="예: G-XXXXXXXXXX">
        </label>
        <label>네이버 애널리틱스 ID
          <input name="naverAnalyticsId" value="${escapeHtml(config.naverAnalyticsId || "")}" placeholder="네이버 애널리틱스 발급 ID">
        </label>
        <p class="admin-muted">유입 검색어는 구글 정책상 대부분 제공되지 않습니다. 검색어/노출/클릭은 Search Console에서 확인하고, 이 관리자 화면은 referrer와 UTM 기준 유입경로를 기록합니다.</p>
      </section>
      <button type="submit">저장</button>
    </form>
  `;
}

function membersPanel() {
  return `
    <section class="admin-card">
      <h2>회원관리</h2>
      ${adminTable(["아이디", "이름", "닉네임", "연락처", "포인트", "상태", "가입일", "관리"], adminState.members.map((member, index) => [
        member.id,
        member.name,
        member.nick,
        member.phone || member.contact || member.mobile || "-",
        member.point,
        member.status,
        member.joined,
        `<button data-delete-member="${index}">삭제</button>`,
      ]))}
    </section>
    <form class="admin-card admin-form compact" id="member-form">
      <h2>회원 추가</h2>
      <input name="id" placeholder="아이디" required>
      <input name="name" placeholder="이름" required>
      <input name="nick" placeholder="닉네임" required>
      <input name="phone" placeholder="연락처">
      <input name="password" placeholder="비밀번호" value="1124">
      <input name="point" type="number" placeholder="포인트" value="1000">
      <select name="status"><option>정상</option><option>차단</option><option>탈퇴</option></select>
      <button type="submit">추가</button>
    </form>
  `;
}

function boardsPanel() {
  const writableBoards = Object.entries(adminState.boards).filter(([, board]) => board.type !== "gallery");
  return `
    <form class="admin-card admin-form compact" id="board-form">
      <h2>게시판 생성</h2>
      <input name="key" placeholder="bo_table 예: free" required>
      <input name="title" placeholder="게시판명" required>
      <select name="type"><option value="list">목록형</option><option value="gallery">갤러리형</option></select>
      <select name="protected"><option value="">공개</option><option value="1">회원전용</option></select>
      <input name="group" placeholder="그룹 ID" value="community">
      <button type="submit">생성</button>
    </form>
    <section class="admin-card">
      <h2>게시판 목록</h2>
      ${adminTable(["ID", "게시판", "형식", "게시글", "권한", "그룹", "관리"], Object.entries(adminState.boards).map(([key, board]) => [
        key,
        board.title,
        board.type,
        board.posts.length,
        board.protected ? "회원전용" : "공개",
        board.group || "community",
        `<button data-toggle-board="${key}">공개/회원전용</button><button data-delete-board="${key}">삭제</button>`,
      ]))}
    </section>
    <form class="admin-card admin-form" id="post-form">
      <h2>게시글 추가</h2>
      <label>게시판
        <select name="board">${writableBoards.map(([key, board]) => `<option value="${key}">${board.title}</option>`).join("")}</select>
      </label>
      <label>제목<input name="title" required></label>
      <label>본문</label>
      ${editorToolbar()}
      <div class="rich-editor" contenteditable="true" data-rich-editor></div>
      <label class="check-row"><input type="checkbox" name="notice"> 공지글</label>
      <button type="submit">게시글 추가</button>
    </form>
    <form class="admin-card admin-form" id="manager-form">
      <h2>매니저 프로필 등록</h2>
      ${postEditorFields(adminState.boards.gallery || { type: "gallery" })}
      <button type="submit">매니저 등록</button>
    </form>
  `;
}

function postsPanel() {
  const query = new URLSearchParams(location.search);
  const selectedBoard = query.get("board") || "all";
  const currentPage = Math.max(1, Number(query.get("page") || "1"));
  const allPosts = Object.entries(adminState.boards).flatMap(([key, board]) => (board.posts || []).map((post, index) => ({
    key,
    board,
    post,
    index,
  })));
  const filtered = selectedBoard === "all" ? allPosts : allPosts.filter((item) => item.key === selectedBoard);
  const perPage = 10;
  const totalPages = Math.max(1, Math.ceil(filtered.length / perPage));
  const safePage = Math.min(currentPage, totalPages);
  const pageItems = filtered.slice((safePage - 1) * perPage, safePage * perPage);
  const pageHref = (page) => `/adm/?section=posts&board=${encodeURIComponent(selectedBoard)}&page=${page}`;
  return `
    <form class="admin-card admin-form compact post-filter-form" id="post-filter-form">
      <h2>게시글관리</h2>
      <select name="board">
        <option value="all" ${selectedBoard === "all" ? "selected" : ""}>전체 게시판</option>
        ${Object.entries(adminState.boards).map(([key, board]) => `<option value="${key}" ${selectedBoard === key ? "selected" : ""}>${board.title}</option>`).join("")}
      </select>
      <button type="submit">조회</button>
    </form>
    <section class="admin-card">
      <h2>게시글 목록</h2>
      ${adminTable(["게시판", "제목", "상태", "작성자", "조회", "댓글", "날짜", "관리"], pageItems.map(({ key, board, post, index }) => [
        board.title,
        `${isPostHidden(post) ? '<span class="admin-status-pill muted">비활성</span> ' : ""}${escapeHtml(post.title || "")}`,
        `<span class="admin-status-pill ${isPostHidden(post) ? "off" : "on"}">${isPostHidden(post) ? "비활성" : "활성"}</span>`,
        escapeHtml(post.writer || "관리자"),
        escapeHtml(post.hit || "0"),
        (post.comments || []).length,
        escapeHtml(post.date || ""),
        `<a class="admin-mini-link" href="/bbs/write.php?bo_table=${key}&wr_id=${post.id ?? index}">수정</a><button data-toggle-post-hidden="${key}:${index}">${isPostHidden(post) ? "노출" : "숨김"}</button><button data-copy-post="${key}:${index}">복사</button><button data-delete-post="${key}:${index}">삭제</button>`,
      ]))}
      <nav class="admin-pagination" aria-label="게시글 페이지">
        ${Array.from({ length: totalPages }, (_, index) => index + 1).map((page) => `<a href="${pageHref(page)}" data-post-page="${page}" class="${page === safePage ? "active" : ""}">${page}</a>`).join("")}
      </nav>
    </section>
  `;
}

function menusPanel() {
  return `
    <form class="admin-card admin-form compact" id="menu-form">
      <h2>메뉴 추가</h2>
      <input name="label" placeholder="메뉴명" required>
      <input name="url" placeholder="URL" required>
      <button type="submit">추가</button>
    </form>
    <section class="admin-card">
      <h2>메뉴 목록</h2>
      ${adminTable(["메뉴명", "URL", "노출", "관리"], adminState.menus.map((menu, index) => [
        menu.label,
        menu.url,
        menu.visible ? "노출" : "숨김",
        `<button data-toggle-menu="${index}">토글</button><button data-delete-menu="${index}">삭제</button>`,
      ]))}
    </section>
  `;
}

function popupsPanel() {
  return `
    <form class="admin-card admin-form" id="popup-form">
      <h2>팝업 추가</h2>
      <label>제목<input name="title" required></label>
      <label>내용<textarea name="content" required></textarea></label>
      <button type="submit">추가</button>
    </form>
    <section class="admin-card">
      <h2>팝업 목록</h2>
      ${adminTable(["제목", "상태", "내용", "관리"], adminState.popups.map((popup, index) => [
        popup.title,
        popup.enabled ? "사용" : "미사용",
        popup.content,
        `<button data-toggle-popup="${index}">토글</button><button data-delete-popup="${index}">삭제</button>`,
      ]))}
    </section>
  `;
}

function pointsPanel() {
  return `
    <form class="admin-card admin-form compact" id="point-form">
      <h2>포인트 지급/차감</h2>
      <input name="member" placeholder="회원아이디" required>
      <input name="reason" placeholder="포인트 내용" required>
      <input name="point" type="number" placeholder="포인트" required>
      <button type="submit">등록</button>
    </form>
    <section class="admin-card">
      <h2>포인트 내역</h2>
      ${adminTable(["회원아이디", "내용", "포인트", "일시"], adminState.points.map((point) => [point.member, point.reason, point.point, point.date]))}
    </section>
  `;
}

function visitsPanel() {
  const selectedDate = new URLSearchParams(location.search).get("date") || "";
  const logs = (adminState.visitLogs || []).filter((log) => !selectedDate || log.date === selectedDate);
  const sourceRows = trafficSourceRows(logs);
  const visitRows = (adminState.visits || []).map((visit) => {
    const dateLogs = (adminState.visitLogs || []).filter((log) => log.date === visit.date);
    const uniqueIps = new Set(dateLogs.map((log) => String(log.ip || "")).filter(Boolean));
    return {
      ...visit,
      count: uniqueIps.size || Number(visit.count || 0),
    };
  });
  return `
    <section class="admin-card">
      <h2>접속자집계</h2>
      ${adminTable(["일자", "방문수", "상세"], visitRows.map((visit) => [
        visit.date,
        visit.count,
        `<a class="admin-mini-link" href="/adm/?section=visits&date=${encodeURIComponent(visit.date)}" data-visit-date="${escapeHtml(visit.date)}">방문자 보기</a>`,
      ]))}
    </section>
    <section class="admin-card">
      <h2>${selectedDate ? `${escapeHtml(selectedDate)} 유입경로` : "전체 유입경로"}</h2>
      ${adminTable(["유입경로", "방문수", "IP수"], sourceRows.map((row) => [
        escapeHtml(row.label),
        row.count,
        row.ipCount,
      ]))}
    </section>
    <section class="admin-card">
      <h2>${selectedDate ? `${escapeHtml(selectedDate)} 방문자 상세` : "전체 방문자 상세"}</h2>
      ${adminTable(["첫 방문", "마지막 방문", "아이디", "이름", "닉네임", "연락처", "브라우저", "OS", "IP", "방문 횟수", "유입경로", "유입URL", "검색어/UTM"], logs.map((log) => {
        const member = memberForVisitLog(log);
        return [
          escapeHtml(log.firstTime || log.time || ""),
          escapeHtml(log.lastTime || log.time || ""),
          escapeHtml(log.memberId || "비회원"),
          escapeHtml(log.name || member?.name || "-"),
          escapeHtml(log.nick || member?.nick || "-"),
          escapeHtml(log.phone || member?.phone || member?.contact || member?.mobile || "-"),
          escapeHtml(browserLabel(log)),
          escapeHtml(log.os || "-"),
          escapeHtml(log.ip || "-"),
          visitCountForIp(log, adminState.visitLogs || []),
          escapeHtml(log.sourceLabel || log.source || "직접유입"),
          log.referrer ? `<a href="${escapeHtml(log.referrer)}" target="_blank" rel="noopener noreferrer">${escapeHtml(shortUrl(log.referrer))}</a>` : "-",
          escapeHtml(log.searchTerm || log.utmTerm || log.utmCampaign || "-"),
        ];
      }))}
    </section>
  `;
}

function trafficSourceRows(logs) {
  const map = new Map();
  logs.forEach((log) => {
    const label = log.sourceLabel || log.source || "직접유입";
    const row = map.get(label) || { label, count: 0, ips: new Set() };
    row.count += Math.max(1, Number(log.visitCountByIp || 0) || 1);
    if (log.ip) row.ips.add(String(log.ip));
    map.set(label, row);
  });
  return [...map.values()]
    .map((row) => ({ label: row.label, count: row.count, ipCount: row.ips.size }))
    .sort((a, b) => b.count - a.count);
}

function browserLabel(log) {
  const ua = String(log?.userAgent || "");
  if (/KAKAOTALK/i.test(ua)) return "카카오톡 인앱";
  if (/NAVER\(inapp|NAVER/i.test(ua)) return "네이버 인앱";
  if (/Instagram/i.test(ua)) return "인스타그램 인앱";
  if (/FBAN|FBAV|FB_IAB|FBIOS|FB4A/i.test(ua)) return "페이스북 인앱";
  if (/Line\//i.test(ua)) return "라인 인앱";
  if (/DaumApps|DaumDevice/i.test(ua)) return "다음 인앱";
  if (/CriOS/i.test(ua)) return "Chrome iOS";
  if (/FxiOS/i.test(ua)) return "Firefox iOS";
  if (/Edg\/|EdgiOS|EdgA/i.test(ua)) return "Edge";
  if (/Whale/i.test(ua)) return "Whale";
  if (/SamsungBrowser/i.test(ua)) return "Samsung Internet";
  if (log?.browser && log.browser !== "기타") return log.browser;
  return log?.browser || "기타";
}

function shortUrl(value) {
  try {
    const url = new URL(value);
    return `${url.hostname}${url.pathname}`.slice(0, 48);
  } catch {
    return String(value || "").slice(0, 48);
  }
}

function memberForVisitLog(log) {
  const memberId = String(log.memberId || "");
  if (!memberId || memberId === "admin") return null;
  return (adminState.members || []).find((member) => String(member.id || "") === memberId) || null;
}

function visitCountForIp(log, logs) {
  if (Number(log.visitCountByIp || 0) > 0) return Number(log.visitCountByIp);
  const ip = String(log.ip || "");
  if (!ip) return 0;
  return logs.filter((item) => item.date === log.date && String(item.ip || "") === ip).length || 1;
}

function writeCountPanel() {
  return `
    <section class="admin-card">
      <h2>글,댓글 현황</h2>
      ${adminTable(["게시판", "글수", "댓글수"], Object.values(adminState.boards).map((board) => [board.title, board.posts.length, 0]))}
    </section>
  `;
}

function authPanel() {
  const p = adminState.permissions;
  return `
    <form class="admin-card admin-form" id="auth-form">
      <h2>관리권한설정</h2>
      <p class="admin-muted">관리자는 모든 게시판 열람, 글쓰기, 수정, 삭제, 관리자 메뉴 접근이 가능합니다. 일반 회원은 게시판 열람만 가능합니다.</p>
      <label class="check-row"><input type="checkbox" name="memberViewOnly" ${p.memberViewOnly ? "checked" : ""}> 일반 회원은 열람만 허용</label>
      <label class="check-row"><input type="checkbox" name="publicBoards" ${p.publicBoards ? "checked" : ""}> 비회원 공개 게시판 열람 허용</label>
      <label class="check-row"><input type="checkbox" name="protectedBoardsForMembers" ${p.protectedBoardsForMembers ? "checked" : ""}> 회원전용 게시판은 로그인 회원에게 열람 허용</label>
      <button type="submit">저장</button>
    </form>
  `;
}

function themePanel() {
  const theme = adminState.themeSettings;
  return `
    <form class="admin-card admin-form" id="theme-form">
      <h2>테마설정</h2>
      <label>대표 색상<input name="primaryColor" type="color" value="${escapeHtml(theme.primaryColor)}"></label>
      <label>헤더 모드<select name="headerMode"><option value="dark" ${theme.headerMode === "dark" ? "selected" : ""}>dark</option><option value="light" ${theme.headerMode === "light" ? "selected" : ""}>light</option></select></label>
      <label>메인 슬라이드 보조문구<input name="mainCopy" value="${escapeHtml(theme.mainCopy || "")}"></label>
      <label>메인 간판 이미지
        <input type="file" name="imageFile" accept="image/*" data-image-file>
        <input type="hidden" name="mainImage" value="${escapeHtml(theme.mainImage || defaultMainImage)}" data-image-data>
      </label>
      <div class="image-preview theme-main-preview" data-image-preview>
        ${theme.mainImage ? `<img src="${escapeHtml(theme.mainImage)}" alt="">` : "<span>이미지를 업로드하면 메인 화면 배경으로 표시됩니다.</span>"}
      </div>
      <label class="check-row"><input type="checkbox" name="resetMainImage" value="1"> 기본 이미지로 복원</label>
      <button type="submit">저장</button>
    </form>
  `;
}

function maintenancePanel() {
  return `
    <section class="admin-card">
      <h2>파일/캐시관리</h2>
      <p class="admin-muted">Vercel 배포 환경에서는 서버 파일 캐시 삭제 대신 사이트 상태 캐시 버전을 갱신하고 브라우저 로컬 캐시를 지웁니다.</p>
      ${adminTable(["항목", "값"], [
        ["캐시 버전", adminState.maintenance.cacheVersion],
        ["마지막 캐시 삭제", adminState.maintenance.lastCacheClear || "-"],
        ["업로드 안내", adminState.maintenance.uploadsNote],
      ])}
      <div class="admin-actions"><button type="button" id="clear-cache">캐시 삭제</button></div>
    </section>
  `;
}

function mailPanel() {
  return `
    <form class="admin-card admin-form" id="mail-form">
      <h2>회원메일발송</h2>
      <label>대상<select name="target"><option value="all">전체회원</option><option value="normal">정상회원</option><option value="blocked">차단회원</option></select></label>
      <label>제목<input name="subject" required></label>
      <label>내용<textarea name="body" required></textarea></label>
      <button type="submit">발송로그 저장</button>
    </form>
    <section class="admin-card">
      <h2>메일 발송 로그</h2>
      ${adminTable(["일시", "대상", "제목", "수신자수"], adminState.mailLogs.map((log) => [log.date, log.target, log.subject, log.count]))}
    </section>
  `;
}

function pollsPanel() {
  return `
    <form class="admin-card admin-form compact" id="poll-admin-form">
      <h2>투표 추가</h2>
      <input name="title" placeholder="투표 제목" required>
      <input name="options" placeholder="선택지 쉼표 구분" required>
      <select name="enabled"><option value="1">사용</option><option value="">미사용</option></select>
      <button type="submit">추가</button>
    </form>
    <section class="admin-card">
      <h2>투표 목록</h2>
      ${adminTable(["제목", "선택지", "상태", "투표수", "관리"], adminState.polls.map((poll, index) => [
        poll.title,
        poll.options.join(", "),
        poll.enabled ? "사용" : "미사용",
        poll.votes.reduce((sum, vote) => sum + Number(vote || 0), 0),
        `<button data-toggle-poll="${index}">토글</button><button data-delete-poll="${index}">삭제</button>`,
      ]))}
    </section>
  `;
}

function groupsPanel() {
  return `
    <form class="admin-card admin-form compact" id="group-form">
      <h2>게시판그룹 추가</h2>
      <input name="id" placeholder="그룹 ID" required>
      <input name="name" placeholder="그룹명" required>
      <input name="description" placeholder="설명">
      <button type="submit">추가</button>
    </form>
    <section class="admin-card">
      <h2>게시판그룹 목록</h2>
      ${adminTable(["ID", "그룹명", "설명", "게시판수", "관리"], adminState.groups.map((group, index) => [
        group.id,
        group.name,
        group.description,
        Object.values(adminState.boards).filter((board) => (board.group || "community") === group.id).length,
        `<button data-delete-group="${index}">삭제</button>`,
      ]))}
    </section>
  `;
}

function popularPanel() {
  return `
    <form class="admin-card admin-form compact" id="popular-form">
      <h2>인기검색어 추가</h2>
      <input name="keyword" placeholder="키워드" required>
      <input name="url" placeholder="연결 URL">
      <select name="visible"><option value="1">노출</option><option value="">숨김</option></select>
      <button type="submit">추가</button>
    </form>
    <section class="admin-card">
      <h2>인기검색어 목록</h2>
      ${adminTable(["키워드", "URL", "노출", "관리"], adminState.popular.map((item, index) => [
        item.keyword,
        item.url,
        item.visible ? "노출" : "숨김",
        `<button data-toggle-popular="${index}">토글</button><button data-delete-popular="${index}">삭제</button>`,
      ]))}
    </section>
  `;
}

function manualsPanel() {
  return `
    <section class="admin-card manual-list">
      <h2>관리자 이용방법</h2>
      ${adminState.manuals.map((manual) => `
        <article>
          <strong>${escapeHtml(manual.category)}</strong>
          <h3>${escapeHtml(manual.title)}</h3>
          <p>${escapeHtml(manual.body)}</p>
        </article>
      `).join("")}
    </section>
  `;
}

function simpleListPanel(key, title, rows, fields) {
  return `
    <form class="admin-card admin-form compact" id="simple-form" data-simple-key="${key}">
      <h2>${title} 추가</h2>
      ${fields.map((field) => `<input name="${field}" placeholder="${field}" required>`).join("")}
      <button type="submit">추가</button>
    </form>
    <section class="admin-card">
      <h2>${title} 목록</h2>
      ${adminTable([...fields, "관리"], rows.map((row, index) => [...fields.map((field) => row[field]), `<button data-delete-simple="${key}:${index}">삭제</button>`]))}
    </section>
  `;
}

function adminTable(headers, rows) {
  return `
    <div class="admin-table-wrap">
      <table class="admin-table">
        <thead><tr>${headers.map((header) => `<th>${header}</th>`).join("")}</tr></thead>
        <tbody>${rows.length ? rows.map((row) => `<tr>${row.map((cell) => `<td>${cell ?? ""}</td>`).join("")}</tr>`).join("") : `<tr><td colspan="${headers.length}">데이터가 없습니다.</td></tr>`}</tbody>
      </table>
    </div>
  `;
}

function bindAdminSection(section) {
  document.querySelectorAll(".admin-actions [data-admin-section]").forEach((button) => {
    button.addEventListener("click", () => renderAdmin(button.dataset.adminSection));
  });
  document.querySelectorAll(".admin-form").forEach((form) => {
    bindEditorTools(form);
    bindImageUpload(form);
  });

  document.querySelector("#config-form")?.addEventListener("submit", async (event) => {
    event.preventDefault();
    const form = Object.fromEntries(new FormData(event.currentTarget).entries());
    form.metaTitle = cleanMetaTitle(form.metaTitle, form.siteName || "분당 Fox");
    form.metaKeywords = seoKeywordValue(form.metaKeywords);
    adminState.config = {
      ...adminState.config,
      ...form,
      ogImage: "/assets/fox-og-20260609.png",
      canonicalUrl: "https://xn--she-vg3mw53b.com",
      robots: "index,follow",
      googleVerification: form.googleVerification || "",
      naverVerification: form.naverVerification || "",
      gaMeasurementId: form.gaMeasurementId || "",
      naverAnalyticsId: form.naverAnalyticsId || "",
    };
    await saveAdminState();
    syncChrome();
    renderAdmin("config");
  });

  document.querySelector("[data-seo-keywords]")?.addEventListener("input", (event) => {
    const preview = document.querySelector("[data-seo-chip-preview]");
    if (preview) preview.innerHTML = renderKeywordChips(event.currentTarget.value);
  });

  document.querySelector("#member-form")?.addEventListener("submit", async (event) => {
    event.preventDefault();
    const form = Object.fromEntries(new FormData(event.currentTarget).entries());
    adminState.members.unshift({ ...form, role: "member", point: Number(form.point), status: form.status || "정상", joined: today() });
    await saveAdminState();
    renderAdmin("members");
  });

  document.querySelector("#post-form")?.addEventListener("submit", async (event) => {
    event.preventDefault();
    const form = Object.fromEntries(new FormData(event.currentTarget).entries());
    const content = readEditorContent(event.currentTarget);
    const image = firstContentImage(content);
    const post = {
      id: Date.now().toString(),
      title: form.title,
      writer: "관리자",
      hit: "0",
      date: today(),
      summary: excerpt(content),
      content,
      image,
      notice: Boolean(form.notice),
      comments: [],
    };
    adminState.boards[form.board].posts.unshift(post);
    await saveAdminState();
    alert("등록이 완료되었습니다.");
    renderAdmin("boards");
  });

  document.querySelector("#manager-form")?.addEventListener("submit", async (event) => {
    event.preventDefault();
    const form = Object.fromEntries(new FormData(event.currentTarget).entries());
    const content = readEditorContent(event.currentTarget);
    const image = firstContentImage(content);
    const managerStatus = form.managerStatus || "출근";
    const post = {
      id: Date.now().toString(),
      title: form.managerName || form.title,
      writer: "관리자",
      hit: "0",
      date: today(),
      summary: form.managerProfile || excerpt(content),
      content,
      image,
      notice: false,
      comments: [],
      hidden: managerStatus === "휴무",
      manager: {
        name: form.managerName || form.title,
        fee: form.managerFee || "",
        status: managerStatus,
        schedule: form.managerSchedule || "",
        profile: form.managerProfile || excerpt(content),
      },
    };
    adminState.boards.gallery.posts.unshift(post);
    await saveAdminState();
    alert("등록이 완료되었습니다.");
    renderAdmin("boards");
  });

  document.querySelector("#board-form")?.addEventListener("submit", async (event) => {
    event.preventDefault();
    const form = Object.fromEntries(new FormData(event.currentTarget).entries());
    const key = String(form.key).trim();
    if (!key || adminState.boards[key]) return;
    adminState.boards[key] = {
      title: form.title,
      banner: "board-2",
      type: form.type,
      protected: Boolean(form.protected),
      group: form.group || "community",
      posts: [],
    };
    adminState.menus.push({ label: form.title, url: `/bbs/board.php?bo_table=${key}`, visible: true });
    await saveAdminState();
    renderAdmin("boards");
  });

  document.querySelector("#menu-form")?.addEventListener("submit", async (event) => {
    event.preventDefault();
    adminState.menus.push({ ...Object.fromEntries(new FormData(event.currentTarget).entries()), visible: true });
    await saveAdminState();
    renderAdmin("menus");
  });

  document.querySelector("#popup-form")?.addEventListener("submit", async (event) => {
    event.preventDefault();
    adminState.popups.unshift({ id: Date.now().toString(), ...Object.fromEntries(new FormData(event.currentTarget).entries()), enabled: true });
    await saveAdminState();
    renderAdmin("popups");
  });

  document.querySelector("#point-form")?.addEventListener("submit", async (event) => {
    event.preventDefault();
    const form = Object.fromEntries(new FormData(event.currentTarget).entries());
    adminState.points.unshift({ ...form, point: Number(form.point), date: today() });
    const member = adminState.members.find((item) => item.id === form.member);
    if (member) member.point = Number(member.point) + Number(form.point);
    await saveAdminState();
    renderAdmin("points");
  });

  document.querySelector("#auth-form")?.addEventListener("submit", async (event) => {
    event.preventDefault();
    const form = Object.fromEntries(new FormData(event.currentTarget).entries());
    adminState.permissions = {
      memberViewOnly: Boolean(form.memberViewOnly),
      publicBoards: Boolean(form.publicBoards),
      protectedBoardsForMembers: Boolean(form.protectedBoardsForMembers),
    };
    await saveAdminState();
    renderAdmin("auth");
  });

  document.querySelector("#theme-form")?.addEventListener("submit", async (event) => {
    event.preventDefault();
    if (event.currentTarget.dataset.imageUploading === "1") {
      alert("이미지 업로드가 끝난 뒤 저장해주세요.");
      return;
    }
    const form = Object.fromEntries(new FormData(event.currentTarget).entries());
    const nextTheme = {
      ...adminState.themeSettings,
      primaryColor: form.primaryColor || "#c92346",
      headerMode: form.headerMode || "dark",
      mainCopy: form.mainCopy || "",
      mainImage: form.resetMainImage ? defaultMainImage : (form.mainImage || adminState.themeSettings.mainImage || defaultMainImage),
    };
    adminState.themeSettings = nextTheme;
    const saved = await saveAdminState();
    if (!saved) {
      alert("테마설정 저장에 실패했습니다. 관리자 로그인을 다시 확인해주세요.");
      return;
    }
    alert("테마설정이 저장되었습니다.");
    syncChrome();
    renderAdmin("theme");
  });

  document.querySelector("#mail-form")?.addEventListener("submit", async (event) => {
    event.preventDefault();
    const form = Object.fromEntries(new FormData(event.currentTarget).entries());
    const recipients = adminState.members.filter((member) => {
      if (form.target === "normal") return member.status === "정상";
      if (form.target === "blocked") return member.status === "차단";
      return true;
    });
    adminState.mailLogs.unshift({ ...form, count: recipients.length, date: new Date().toLocaleString("ko-KR") });
    await saveAdminState();
    renderAdmin("mail");
  });

  document.querySelector("#poll-admin-form")?.addEventListener("submit", async (event) => {
    event.preventDefault();
    const form = Object.fromEntries(new FormData(event.currentTarget).entries());
    const options = form.options.split(",").map((item) => item.trim()).filter(Boolean);
    if (!options.length) return;
    adminState.polls.unshift({ id: Date.now().toString(), title: form.title, options, enabled: Boolean(form.enabled), votes: options.map(() => 0) });
    await saveAdminState();
    renderAdmin("polls");
  });

  document.querySelector("#group-form")?.addEventListener("submit", async (event) => {
    event.preventDefault();
    const form = Object.fromEntries(new FormData(event.currentTarget).entries());
    if (!adminState.groups.some((group) => group.id === form.id)) adminState.groups.push(form);
    await saveAdminState();
    renderAdmin("groups");
  });

  document.querySelector("#popular-form")?.addEventListener("submit", async (event) => {
    event.preventDefault();
    const form = Object.fromEntries(new FormData(event.currentTarget).entries());
    adminState.popular.unshift({ keyword: form.keyword, url: form.url || `/bbs/board.php?bo_table=day&stx=${encodeURIComponent(form.keyword)}`, visible: Boolean(form.visible) });
    await saveAdminState();
    renderAdmin("popular");
  });

  document.querySelector("#post-filter-form")?.addEventListener("submit", (event) => {
    event.preventDefault();
    const board = new FormData(event.currentTarget).get("board") || "all";
    history.pushState(null, "", `/adm/?section=posts&board=${encodeURIComponent(board)}&page=1`);
    renderAdmin("posts");
  });

  document.querySelectorAll("[data-post-page]").forEach((link) => link.addEventListener("click", (event) => {
    event.preventDefault();
    history.pushState(null, "", link.getAttribute("href"));
    renderAdmin("posts");
  }));

  document.querySelectorAll("[data-visit-date]").forEach((link) => link.addEventListener("click", (event) => {
    event.preventDefault();
    history.pushState(null, "", link.getAttribute("href"));
    renderAdmin("visits");
  }));

  document.querySelector("#clear-cache")?.addEventListener("click", async () => {
    adminState.maintenance.cacheVersion = Date.now().toString();
    adminState.maintenance.lastCacheClear = new Date().toLocaleString("ko-KR");
    localStorage.removeItem("dateclubAdminState");
    await saveAdminState();
    renderAdmin("maintenance");
  });

  document.querySelector("#simple-form")?.addEventListener("submit", async (event) => {
    event.preventDefault();
    const key = event.currentTarget.dataset.simpleKey;
    adminState[key].unshift(Object.fromEntries(new FormData(event.currentTarget).entries()));
    await saveAdminState();
    renderAdmin(key);
  });

  document.querySelectorAll("[data-delete-member]").forEach((button) => button.addEventListener("click", async () => {
    adminState.members.splice(Number(button.dataset.deleteMember), 1);
    await saveAdminState();
    renderAdmin("members");
  }));
  document.querySelectorAll("[data-delete-post]").forEach((button) => button.addEventListener("click", async () => {
    const [key, index] = button.dataset.deletePost.split(":");
    if (!confirm("게시글을 삭제할까요?")) return;
    adminState.boards[key].posts.splice(Number(index), 1);
    await saveAdminState();
    alert("삭제가 완료되었습니다.");
    renderAdmin(section === "posts" ? "posts" : "boards");
  }));
  document.querySelectorAll("[data-toggle-post-hidden]").forEach((button) => button.addEventListener("click", async () => {
    const [key, index] = button.dataset.togglePostHidden.split(":");
    const post = adminState.boards[key]?.posts?.[Number(index)];
    if (!post) return;
    const nextHidden = !isPostHidden(post);
    post.hidden = nextHidden;
    if (post.manager) post.manager.status = nextHidden ? "휴무" : "출근";
    await saveAdminState();
    alert(nextHidden ? "숨김 처리되었습니다." : "노출 처리되었습니다.");
    renderAdmin(section === "posts" ? "posts" : "boards");
  }));
  document.querySelectorAll("[data-copy-post]").forEach((button) => button.addEventListener("click", async () => {
    const [key, index] = button.dataset.copyPost.split(":");
    const board = adminState.boards[key];
    const source = board?.posts?.[Number(index)];
    if (!board || !source) return;
    const copied = clonePost(source);
    copied.id = Date.now().toString();
    copied.title = `${source.title || "게시글"} 복사본`;
    copied.hit = "0";
    copied.date = today();
    copied.comments = [];
    if (board.type === "gallery") {
      copied.hidden = true;
      copied.manager = {
        ...(copied.manager || {}),
        status: "휴무",
      };
    }
    board.posts.unshift(copied);
    await saveAdminState();
    alert("복사본이 생성되었습니다. 내용을 수정한 뒤 출근 상태로 변경하면 노출됩니다.");
    location.href = `/bbs/write.php?bo_table=${key}&wr_id=${copied.id}`;
  }));
  document.querySelectorAll("[data-toggle-board]").forEach((button) => button.addEventListener("click", async () => {
    const board = adminState.boards[button.dataset.toggleBoard];
    board.protected = !board.protected;
    await saveAdminState();
    renderAdmin("boards");
  }));
  document.querySelectorAll("[data-delete-board]").forEach((button) => button.addEventListener("click", async () => {
    const key = button.dataset.deleteBoard;
    if (["day", "gallery", "notice", "review"].includes(key)) return;
    delete adminState.boards[key];
    adminState.menus = adminState.menus.filter((menu) => !menu.url.includes(`bo_table=${key}`));
    await saveAdminState();
    renderAdmin("boards");
  }));
  document.querySelectorAll("[data-toggle-menu]").forEach((button) => button.addEventListener("click", async () => {
    const item = adminState.menus[Number(button.dataset.toggleMenu)];
    item.visible = !item.visible;
    await saveAdminState();
    renderAdmin("menus");
  }));
  document.querySelectorAll("[data-delete-menu]").forEach((button) => button.addEventListener("click", async () => {
    adminState.menus.splice(Number(button.dataset.deleteMenu), 1);
    await saveAdminState();
    renderAdmin("menus");
  }));
  document.querySelectorAll("[data-toggle-popup]").forEach((button) => button.addEventListener("click", async () => {
    const popup = adminState.popups[Number(button.dataset.togglePopup)];
    popup.enabled = !popup.enabled;
    await saveAdminState();
    renderAdmin("popups");
  }));
  document.querySelectorAll("[data-delete-popup]").forEach((button) => button.addEventListener("click", async () => {
    adminState.popups.splice(Number(button.dataset.deletePopup), 1);
    await saveAdminState();
    renderAdmin("popups");
  }));
  document.querySelectorAll("[data-delete-simple]").forEach((button) => button.addEventListener("click", async () => {
    const [key, index] = button.dataset.deleteSimple.split(":");
    adminState[key].splice(Number(index), 1);
    await saveAdminState();
    renderAdmin(key);
  }));
  document.querySelectorAll("[data-toggle-poll]").forEach((button) => button.addEventListener("click", async () => {
    const poll = adminState.polls[Number(button.dataset.togglePoll)];
    poll.enabled = !poll.enabled;
    await saveAdminState();
    renderAdmin("polls");
  }));
  document.querySelectorAll("[data-delete-poll]").forEach((button) => button.addEventListener("click", async () => {
    adminState.polls.splice(Number(button.dataset.deletePoll), 1);
    await saveAdminState();
    renderAdmin("polls");
  }));
  document.querySelectorAll("[data-delete-group]").forEach((button) => button.addEventListener("click", async () => {
    adminState.groups.splice(Number(button.dataset.deleteGroup), 1);
    await saveAdminState();
    renderAdmin("groups");
  }));
  document.querySelectorAll("[data-toggle-popular]").forEach((button) => button.addEventListener("click", async () => {
    const item = adminState.popular[Number(button.dataset.togglePopular)];
    item.visible = !item.visible;
    await saveAdminState();
    renderAdmin("popular");
  }));
  document.querySelectorAll("[data-delete-popular]").forEach((button) => button.addEventListener("click", async () => {
    adminState.popular.splice(Number(button.dataset.deletePopular), 1);
    await saveAdminState();
    renderAdmin("popular");
  }));
}

function today() {
  return new Intl.DateTimeFormat("en-CA", {
    timeZone: "Asia/Seoul",
    year: "numeric",
    month: "2-digit",
    day: "2-digit",
  }).format(new Date());
}

function nowText() {
  return new Intl.DateTimeFormat("ko-KR", {
    timeZone: "Asia/Seoul",
    year: "numeric",
    month: "numeric",
    day: "numeric",
    hour: "numeric",
    minute: "2-digit",
    second: "2-digit",
  }).format(new Date());
}

function escapeHtml(value) {
  return String(value).replace(/[&<>"']/g, (char) => ({ "&": "&amp;", "<": "&lt;", ">": "&gt;", '"': "&quot;", "'": "&#039;" }[char]));
}

function renderRegister() {
  layout(`
    <section class="sub-banner user"><h2>회원가입</h2></section>
    <section class="mbskin">
      <form class="mbskin-box" id="register-form">
        <h1>회원가입</h1>
        <input type="text" name="id" placeholder="아이디" required>
        <input type="password" name="password" placeholder="비밀번호" required>
        <input type="text" name="name" placeholder="이름" required>
        <input type="text" name="nick" placeholder="닉네임" required>
        <input type="tel" name="phone" placeholder="연락처">
        <button type="submit">가입하기</button>
        <p class="muted">가입 정보는 관리자 회원관리와 연동됩니다.</p>
      </form>
    </section>
  `);
  document.querySelector("#register-form").addEventListener("submit", async (event) => {
    event.preventDefault();
    const form = Object.fromEntries(new FormData(event.currentTarget).entries());
    if (adminState.members.some((member) => member.id === form.id)) {
      renderRegister();
      alert("이미 사용 중인 아이디입니다.");
      return;
    }
    const member = await registerMember(form);
    adminState.members.unshift(member);
    adminState.points.unshift({ member: form.id, reason: "회원가입 축하", point: 1000, date: member.joined || today() });
    storeMemberSession({ id: member.id, nick: member.nick, role: "member" }, false);
    syncChrome();
    renderHome();
    recordVisit();
  });
}

async function registerMember(form) {
  const fallback = { ...form, role: "member", point: 1000, status: "정상", joined: today() };
  try {
    const response = await fetch("/api/register", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({ member: form }),
    });
    if (!response.ok) return fallback;
    const payload = await response.json();
    return payload.member || fallback;
  } catch {
    return fallback;
  }
}

function renderMemberPage() {
  const session = memberSession();
  if (!session) {
    renderLogin("회원 로그인이 필요합니다.");
    return;
  }
  const member = adminState.members.find((item) => item.id === session.id) || session;
  layout(`
    <section class="sub-banner user"><h2>마이페이지</h2></section>
    <section class="inner member-page">
      <h2>${escapeHtml(member.nick || member.id)}님</h2>
      ${adminTable(["아이디", "이름", "닉네임", "연락처", "포인트", "상태", "가입일"], [[member.id, member.name || "", member.nick || "", member.phone || member.contact || member.mobile || "", member.point || 0, member.status || "정상", member.joined || ""]])}
      <button class="back-link" type="button" data-logout-member>로그아웃</button>
    </section>
  `);
  document.querySelector("[data-logout-member]")?.addEventListener("click", () => {
    sessionStorage.removeItem("dateclubMember");
    syncChrome();
    renderHome();
  });
}

function renderContentPage() {
  const id = params.get("co_id") || "privacy";
  const content = adminState.contents.find((item) => item.id === id) || adminState.contents[0];
  layout(`
    <section class="sub-banner user"><h2>${escapeHtml(content?.title || "내용관리")}</h2></section>
    <article class="inner post-detail">
      <h2>${escapeHtml(content?.title || "내용관리")}</h2>
      <div class="post-body">${escapeHtml(content?.body || "")}</div>
    </article>
  `);
}

function renderFaqPage() {
  layout(`
    <section class="sub-banner user"><h2>FAQ</h2></section>
    <section class="inner faq-list">
      ${adminState.faq.map((item) => `
        <article>
          <h2>${escapeHtml(item.question)}</h2>
          <p>${escapeHtml(item.answer)}</p>
        </article>
      `).join("")}
    </section>
  `);
}

function setupSlider() {
  let current = 0;
  const slides = [...document.querySelectorAll(".hero-text")];
  const dots = [...document.querySelectorAll(".dots span")];
  const next = document.querySelector(".next");
  const prev = document.querySelector(".prev");
  if (!slides.length || !next || !prev) return;
  const show = (index) => {
    current = (index + slides.length) % slides.length;
    slides.forEach((slide, i) => slide.classList.toggle("active", i === current));
    dots.forEach((dot, i) => dot.classList.toggle("on", i === current));
  };
  next.addEventListener("click", () => show(current + 1));
  prev.addEventListener("click", () => show(current - 1));
  setInterval(() => show(current + 1), 5000);
}

document.querySelector("#mobile-open")?.addEventListener("click", () => {
  document.body.classList.add("menu-open");
});
document.querySelector(".mask")?.addEventListener("click", () => {
  document.body.classList.remove("menu-open");
});
document.querySelector("#top-btn")?.addEventListener("click", () => scrollTo({ top: 0, behavior: "smooth" }));
addEventListener("scroll", () => {
  document.querySelector("#hd").classList.toggle("scroll-bg", scrollY >= 80);
  document.querySelector("#top-btn").classList.toggle("show", scrollY > 0);
});

async function init() {
  await loadAdminState();
  syncChrome();
  if (path.includes("/adm")) renderAdmin();
  else if (path.includes("/bbs/login.php")) renderLogin();
  else if (path.includes("/bbs/register.php")) renderRegister();
  else if (path.includes("/bbs/member.php")) renderMemberPage();
  else if (path.includes("/bbs/write.php")) renderWritePage();
  else if (path.includes("/bbs/content.php")) renderContentPage();
  else if (path.includes("/bbs/faq.php")) renderFaqPage();
  else if (path.includes("/bbs/board.php")) renderBoard(params.get("bo_table"));
  else if (currentAreaPage()) renderAreaPage();
  else renderHome();
  recordVisit();
}

init();
