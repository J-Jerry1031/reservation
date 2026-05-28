export const sections = [
  ["main", "KissGirls", "메인"],
  ["notice", "공지사항", "공지사항"],
  ["epilogue", "방문후기", "방문후기"],
  ["kissqna", "Q&A", "Q&A"],
  ["schedule", "출근부", "출근부"]
] as const;

export type SectionSlug = (typeof sections)[number][0];

export type Section = {
  slug: SectionSlug;
  title: string;
  description: string;
};

export const sectionSlugs = sections.map(([slug]) => slug);

export const navigation: Section[] = sections.map(toSection);

export const homeCards: Section[] = sections.slice(1).map(toSection);

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
