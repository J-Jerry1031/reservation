export const sections = [
  ["main", "KissGirls", "남아 있는 원본 이미지와 메뉴 구조를 살린 홈입니다."],
  ["notice", "공지사항", "운영 공지와 안내 글이 들어가던 게시판 영역입니다."],
  ["guide", "가이드", "사이트 이용 안내와 기본 가이드가 연결되던 영역입니다."],
  ["event", "이벤트", "이벤트와 당첨자 발표가 함께 연결되던 영역입니다."],
  ["freeboard", "자유게시판", "회원 커뮤니티 게시판으로 쓰이던 영역입니다."],
  ["happy", "유머게시판", "가벼운 커뮤니티 콘텐츠가 올라오던 게시판입니다."],
  ["msuda", "미수다", "일상형 커뮤니티 글이 연결되던 게시판입니다."],
  ["epilogue", "방문후기", "후기성 게시글이 모이던 대표 게시판입니다."],
  ["kissqna", "Q&A", "질문과 답변 게시판으로 연결되던 영역입니다."],
  ["ilban", "갤러리", "이미지 중심 게시판으로 쓰이던 영역입니다."],
  ["schedule", "출근부", "일정형 콘텐츠가 연결되던 영역입니다."],
  ["hotnews", "핫뉴스", "새 소식과 알림성 게시글이 노출되던 영역입니다."],
  ["point", "포인트", "포인트 안내 페이지로 연결되던 영역입니다."],
  ["gevent", "업소 이벤트", "제휴 이벤트성 콘텐츠가 연결되던 영역입니다."],
  ["idup", "가입인사", "가입 인사 게시판으로 쓰이던 영역입니다."]
] as const;

export type SectionSlug = (typeof sections)[number][0];

export type Section = {
  slug: SectionSlug;
  title: string;
  description: string;
};

export const sectionSlugs = sections.map(([slug]) => slug);

export const navigation: Section[] = sections.slice(0, 12).map(toSection);

export const homeCards: Section[] = sections.slice(1, 7).map(toSection);

const sectionMap = new Map<SectionSlug, Section>(sections.map((item) => {
  const section = toSection(item);
  return [section.slug, section];
}));

export function getSection(slug: SectionSlug) {
  return sectionMap.get(slug);
}

function toSection(item: (typeof sections)[number]): Section {
  const [slug, title, description] = item;
  return {
    slug,
    title,
    description
  };
}
