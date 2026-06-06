const defaultBoards = {
  day: {
    title: "실시간 출근부",
    banner: "board-1",
    total: 2,
    type: "list",
    posts: [
      {
        title: "6월 3일 수요일 ⭐️ █████ [ ❄️ 분당 NO.1 ❄️] █████✅ACE매니저✅Ⓜ️N.FACⓂ️N.…",
        writer: "관리자",
        hit: "76071",
        date: "2026-02-01",
        content: "<p>6월 3일 수요일 출근 안내입니다.</p>",
        notice: true,
      },
      {
        title: "마감 출근시 개제",
        writer: "관리자",
        hit: "533",
        date: "2026-02-01",
        content: "<p>출근 일정은 마감 전 업데이트됩니다.</p>",
      },
    ],
  },
  gallery: {
    title: "매니저 프로필",
    banner: "board-3",
    total: 3,
    type: "gallery",
    posts: [
      {
        title: "하루",
        summary: "하루 / 밝고 편안한 분위기의 매니저입니다.",
        hit: "288",
        date: "2026-06-01",
        image: "",
        manager: { name: "하루", fee: "13만", status: "출근", schedule: "상담 후 안내", profile: "밝고 편안한 분위기의 매니저입니다." },
      },
      {
        title: "NF 승아",
        summary: "승아 / 차분한 대화와 세심한 응대가 강점입니다.",
        hit: "412",
        date: "2026-06-01",
        image: "http://dateclub.kr/data/file/gallery/thumb-980950297_yFLSo31D_b106f59d28d501e35ba3238ef393b407db0544c3_300x300.jpg",
        manager: { name: "승아", fee: "상담문의", status: "출근", schedule: "상담 후 안내", profile: "차분한 대화와 세심한 응대가 강점입니다." },
      },
      {
        title: "현정",
        summary: "현정 / 자연스러운 분위기의 매니저입니다.",
        hit: "197",
        date: "2026-06-01",
        image: "",
        manager: { name: "현정", fee: "상담문의", status: "대기", schedule: "상담 후 안내", profile: "자연스러운 분위기의 매니저입니다." },
      },
    ],
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
document.body.classList.toggle("admin-mode", path.includes("/adm"));

const defaultAdminState = {
  config: {
    siteName: "분당 Fox",
    description: "이성과 교감적인 데이트를 즐길 수 있는 대화 카페입니다.",
    address: "분당 야탑역 도보 3분 직진 차병원 앞",
    hours: "AM 11:00~출근부 마감전까지",
    theme: "home",
    metaTitle: "분당 Fox",
    metaDescription: "분당 Fox 공식 사이트입니다. 실시간 출근부, 매니저 프로필, 공지사항, 이용후기를 확인하세요.",
    metaKeywords: "분당 Fox\n분당폭스\n분당 데이트카페\n야탑 데이트카페\n분당 매니저 프로필\n실시간 출근부",
    ogImage: "/assets/main-slide.png",
    canonicalUrl: "https://xn--she-vg3mw53b.com/",
    robots: "index,follow",
    googleVerification: "",
    naverVerification: "",
  },
  boards: defaultBoards,
  members: [
    { id: "admin", name: "관리자", nick: "관리자", phone: "", level: 10, point: 1000, status: "정상", joined: "2026-06-01" },
    { id: "sample01", name: "샘플회원", nick: "분당러버", phone: "", level: 2, point: 1200, status: "정상", joined: "2026-06-02" },
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
  points: [
    { member: "sample01", reason: "회원가입 축하", point: 1000, date: "2026-06-02" },
  ],
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
    mainCopy: "낭만! 자연스런 교감!",
    mainImage: "/assets/main-slide.png",
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
  const title = config.metaTitle || config.siteName;
  const description = config.metaDescription || config.description;
  const keywords = seoKeywords(config.metaKeywords).join(", ");
  document.title = title;
  setMeta("name", "description", description);
  setMeta("name", "keywords", keywords);
  setMeta("name", "robots", config.robots || "index,follow");
  const socialImage = adminState.themeSettings.mainImage || config.ogImage || "/assets/main-slide.png";
  setMeta("property", "og:title", title);
  setMeta("property", "og:description", description);
  setMeta("property", "og:image", absoluteUrl(socialImage));
  setMeta("property", "og:url", pageUrl());
  setMeta("name", "twitter:card", "summary_large_image");
  setMeta("name", "twitter:title", title);
  setMeta("name", "twitter:description", description);
  setMeta("name", "twitter:image", absoluteUrl(socialImage));
  setLink("canonical", pageUrl());
  if (config.googleVerification) setMeta("name", "google-site-verification", config.googleVerification);
  if (config.naverVerification) setMeta("name", "naver-site-verification", config.naverVerification);
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
  const match = text.match(/^(.*?)(Fox|She)$/i);
  if (!match) return escapeHtml(text);
  const prefix = match[1].trim();
  return `${prefix ? `<b class="brand-kor">${escapeHtml(prefix)}</b>` : ""}<em class="brand-en">${escapeHtml(match[2])}</em>`;
}

function cssImageUrl(value) {
  return String(value || "/assets/main-slide.png").replace(/[\\')]/g, "");
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

async function loadAdminState() {
  try {
    const response = await fetch("/api/state");
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
  state = ensureFoxSeoState(state);
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
    return value.replace(/분당\s*She/g, "분당 Fox").replace(/분당She/g, "분당Fox");
  }
  if (Array.isArray(value)) {
    return value.map((item) => migrateBrandState(item));
  }
  if (value && typeof value === "object") {
    return Object.fromEntries(Object.entries(value).map(([key, item]) => [key, migrateBrandState(item)]));
  }
  return value;
}

function ensureFoxSeoState(state) {
  const config = state.config || {};
  config.siteName = config.siteName || "분당 Fox";
  config.metaTitle = cleanMetaTitle(config.metaTitle, config.siteName || "분당 Fox");
  if (!config.metaDescription || config.metaDescription.includes("매니저 안내")) {
    config.metaDescription = "분당 Fox 공식 사이트입니다. 실시간 출근부, 매니저 프로필, 공지사항, 이용후기를 확인하세요.";
  }
  const keywords = seoKeywords(config.metaKeywords);
  ["분당 Fox", "분당폭스", "분당 데이트카페", "야탑 데이트카페", "분당 매니저 프로필", "실시간 출근부"].forEach((keyword) => {
    if (!keywords.includes(keyword)) keywords.push(keyword);
  });
  config.metaKeywords = keywords.join("\n");
  config.robots = "index,follow";
  state.config = config;
  state.themeSettings = {
    ...defaultAdminState.themeSettings,
    ...(state.themeSettings || {}),
    mainImage: state.themeSettings?.mainImage || "/assets/main-slide.png",
  };
  return state;
}

async function saveAdminState() {
  localStorage.setItem("dateclubAdminState", JSON.stringify(adminState));
  boards = adminState.boards;
  const token = sessionStorage.getItem("dateclubAdminToken") || localStorage.getItem("dateclubAdminToken");
  if (!token) {
    return;
  }
  try {
    await fetch("/api/state", {
      method: "PUT",
      headers: {
        "Content-Type": "application/json",
        Authorization: `Bearer ${token}`,
      },
      body: JSON.stringify({ data: adminState }),
    });
  } catch {
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
  const key = `visitTracked-${today()}-${user?.id || "guest"}`;
  if (sessionStorage.getItem(key) === "1") return;
  sessionStorage.setItem(key, "1");
  try {
    await fetch("/api/visit", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({ memberId: user?.id || "" }),
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

function renderHome() {
  const config = adminState.config;
  const mainImage = adminState.themeSettings.mainImage || "/assets/main-slide.png";
  const aboutImages = managerThumbs(8);
  layout(`
    ${renderActivePopups()}
    <section class="visual-banner" style="--main-visual-image: url('${escapeHtml(cssImageUrl(mainImage))}')">
      <div class="inner hero-text active">
        <h2 class="brand-title">${brandNameMarkup(config.siteName)}</h2>
        <strong>${escapeHtml(config.description)}<br>${escapeHtml(config.address.replace(" 도보 3분 직진 차병원 앞", " 인근"))}</strong>
      </div>
      <div class="inner hero-text">
        <h2 class="brand-title">${brandNameMarkup(config.siteName)}</h2>
        <strong>${escapeHtml(adminState.themeSettings.mainCopy || "낭만! 자연스런 교감!")}</strong>
      </div>
      <button class="slide-nav prev" type="button" aria-label="이전">‹</button>
      <button class="slide-nav next" type="button" aria-label="다음">›</button>
      <div class="dots"><span class="on"></span><span></span></div>
    </section>

    <section class="main-section main-latest-list">
      <div class="inner latest-wrap">
        ${latestBox("출근부", boards.day)}
        ${latestBox("공지사항", boards.notice)}
      </div>
      ${renderHomeWidgets()}
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
        <div class="about-actions">
          <a href="${navHref("day")}" class="view-more">출근부</a>
          <a href="${navHref("gallery")}" class="view-more">매니저 프로필</a>
        </div>
      </div>
    </section>

    <section class="main-section contact">
      <div class="inner contact-grid">
        <div class="customer-box">
          <p class="tit">Customer Center</p>
          <p class="txt"><span>친절히 상담해 드리겠습니다.</span><br><strong>영업시간 : ${escapeHtml(config.hours)}</strong><br>${escapeHtml(config.address)}</p>
          <a href="/theme/home/sub/map.php">오시는길 →</a>
        </div>
        <div class="quick-boxes">
          <a href="${navHref("gallery")}"><span>매니저 프로필</span><em>매니저 사진과 프로필</em><b>more →</b></a>
          <a href="/bbs/board.php?bo_table=review"><span>이용후기</span><em>${escapeHtml(config.siteName)} 이용후기</em><b>more →</b></a>
        </div>
      </div>
    </section>
  `);
  setupSlider();
  bindPopupClose();
  bindPollForm();
}

function managerThumbs(count = 8) {
  const images = (adminState.boards.gallery?.posts || [])
    .map((post) => postThumbnail(post))
    .filter(Boolean);
  const fallback = adminState.themeSettings.mainImage || "/assets/main-slide.png";
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
  const items = board.posts.length
    ? board.posts.slice(0, 2).map((post, index) => `
      <li>
        <a class="list-link" href="${navHref(table)}&wr_id=${post.id || index}">
          <div class="list-tit-box">
            <div class="list-tit">${post.title}<span class="hot-icon">H</span></div>
            <span class="lt-date">${post.date}</span>
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
  const filteredPosts = filterPosts(board.posts);
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
  const filteredPosts = filterPosts(board.posts);
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
  const post = board.posts.find((item) => String(item.id) === String(wrId)) || board.posts[Number(wrId)] || board.posts[0];
  const postId = post?.id ?? board.posts.indexOf(post);
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
      nextPost.manager = {
        name: form.managerName || form.title,
        fee: form.managerFee || "",
        status: form.managerStatus || "상담",
        schedule: form.managerSchedule || "",
        profile: form.managerProfile || excerpt(content),
      };
      nextPost.title = nextPost.manager.name;
      nextPost.summary = nextPost.manager.profile;
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
            ${["출근", "대기", "휴무", "상담"].map((status) => `<option value="${status}" ${manager.status === status ? "selected" : ""}>${status}</option>`).join("")}
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
      <label class="toolbar-color">색상<input type="color" data-editor-color value="#222222" aria-label="글자 색상"></label>
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
  scope.querySelector("[data-editor-color]")?.addEventListener("input", (event) => {
    restoreRange();
    wrapSelection(editor, { color: event.currentTarget.value });
    rememberRange();
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
  input.addEventListener("change", () => {
    const file = input.files?.[0];
    if (!file) return;
    const reader = new FileReader();
    reader.addEventListener("load", () => {
      hidden.value = reader.result;
      if (preview) preview.innerHTML = `<img src="${reader.result}" alt="">`;
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
          <textarea name="metaKeywords" data-seo-keywords placeholder="#분당Fox&#10;#분당키스방&#10;#야탑데이트카페">${escapeHtml(seoKeywordValue(config.metaKeywords))}</textarea>
        </label>
        <div>
          <strong class="seo-preview-title">등록된 키워드</strong>
          <div data-seo-chip-preview>${renderKeywordChips(config.metaKeywords)}</div>
        </div>
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
      ${adminTable(["게시판", "제목", "작성자", "조회", "댓글", "날짜", "관리"], pageItems.map(({ key, board, post, index }) => [
        board.title,
        escapeHtml(post.title || ""),
        escapeHtml(post.writer || "관리자"),
        escapeHtml(post.hit || "0"),
        (post.comments || []).length,
        escapeHtml(post.date || ""),
        `<a class="admin-mini-link" href="/bbs/write.php?bo_table=${key}&wr_id=${post.id ?? index}">수정</a><button data-delete-post="${key}:${index}">삭제</button>`,
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
  return `
    <section class="admin-card">
      <h2>접속자집계</h2>
      ${adminTable(["일자", "방문수", "상세"], adminState.visits.map((visit) => [
        visit.date,
        visit.count,
        `<a class="admin-mini-link" href="/adm/?section=visits&date=${encodeURIComponent(visit.date)}" data-visit-date="${escapeHtml(visit.date)}">방문자 보기</a>`,
      ]))}
    </section>
    <section class="admin-card">
      <h2>${selectedDate ? `${escapeHtml(selectedDate)} 방문자 상세` : "전체 방문자 상세"}</h2>
      ${adminTable(["시간", "아이디", "이름", "닉네임", "연락처", "브라우저", "OS", "IP"], logs.map((log) => [
        escapeHtml(log.time || ""),
        escapeHtml(log.memberId || "비회원"),
        escapeHtml(log.name || "-"),
        escapeHtml(log.nick || "-"),
        escapeHtml(log.phone || "-"),
        escapeHtml(log.browser || "-"),
        escapeHtml(log.os || "-"),
        escapeHtml(log.ip || "-"),
      ]))}
    </section>
  `;
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
        <input type="hidden" name="mainImage" value="${escapeHtml(theme.mainImage || "/assets/main-slide.png")}" data-image-data>
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
      ogImage: "/assets/main-slide.png",
      canonicalUrl: "https://xn--she-vg3mw53b.com/",
      robots: "index,follow",
      googleVerification: "",
      naverVerification: "",
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
      manager: {
        name: form.managerName || form.title,
        fee: form.managerFee || "",
        status: form.managerStatus || "상담",
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
    const form = Object.fromEntries(new FormData(event.currentTarget).entries());
    const nextTheme = {
      ...adminState.themeSettings,
      primaryColor: form.primaryColor || "#c92346",
      headerMode: form.headerMode || "dark",
      mainCopy: form.mainCopy || "",
      mainImage: form.resetMainImage ? "/assets/main-slide.png" : (form.mainImage || adminState.themeSettings.mainImage || "/assets/main-slide.png"),
    };
    adminState.themeSettings = nextTheme;
    await saveAdminState();
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
  return new Date().toISOString().slice(0, 10);
}

function nowText() {
  return new Date().toLocaleString("ko-KR");
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
  const show = (index) => {
    current = (index + slides.length) % slides.length;
    slides.forEach((slide, i) => slide.classList.toggle("active", i === current));
    dots.forEach((dot, i) => dot.classList.toggle("on", i === current));
  };
  document.querySelector(".next").addEventListener("click", () => show(current + 1));
  document.querySelector(".prev").addEventListener("click", () => show(current - 1));
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
  else renderHome();
  recordVisit();
}

init();
