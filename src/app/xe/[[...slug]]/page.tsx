import Link from "next/link";
import { notFound } from "next/navigation";
import {
  getSection,
  homeCards,
  navigation,
  sectionSlugs,
  type SectionSlug
} from "@/lib/legacy-site";

type PageProps = {
  params: Promise<{
    slug?: string[];
  }>;
};

export function generateStaticParams() {
  return sectionSlugs.map((slug) => ({
    slug: [slug]
  }));
}

export async function generateMetadata({ params }: PageProps) {
  const { slug } = await params;
  const activeSlug = resolveSlug(slug);
  const section = getSection(activeSlug);

  if (!section) {
    return {};
  }

  return {
    title: section.title,
    description: section.description
  };
}

export default async function LegacySectionPage({ params }: PageProps) {
  const { slug } = await params;
  const activeSlug = resolveSlug(slug);
  const section = getSection(activeSlug);

  if (!section) {
    notFound();
  }

  const isHome = activeSlug === "main";

  return (
    <>
      <header className="site-header">
        <Link className="brand" href="/xe/main" aria-label="KissGirls 홈">
          <img src="/xe/files/faceOff/037/178/images/logo.gif" alt="KissGirls" />
        </Link>
        <nav className="main-nav" aria-label="주요 메뉴">
          {navigation.map((item) => (
            <Link
              aria-current={item.slug === activeSlug ? "page" : undefined}
              href={`/xe/${item.slug}`}
              key={item.slug}
            >
              {item.title}
            </Link>
          ))}
        </nav>
      </header>

      <main>
        <section className="hero">
          <div className="hero-content">
            <p>{isHome ? "구형 XE 사이트 정적 복원" : "XE 게시판 섹션"}</p>
            <h1>{section.title}</h1>
          </div>
        </section>

        {isHome ? <HomeContent /> : <BoardContent section={section} />}
      </main>

      <footer className="site-footer">
        <span>Next.js Vercel preview</span>
        <span>원본 XE/PHP 기능은 TypeScript 앱 화면으로 대체되어 있습니다.</span>
      </footer>
    </>
  );
}

function HomeContent() {
  return (
    <>
      <section className="notice-band">
        <img src="/pop/girlsgeneration.jpg" alt="" />
        <div>
          <h2>Vercel에서 실행되는 Next.js 앱으로 전환했습니다</h2>
          <p>
            PHP, MySQL, 본인인증 모듈은 Vercel에서 직접 실행할 수 없어
            TypeScript 기반의 App Router 화면으로 옮겼습니다. 기존 메뉴와 주요
            이미지 자산은 유지했고, 예전 XE 링크는 가능한 한 대응되는 섹션으로
            연결됩니다.
          </p>
          <Link className="button" href="/xe/notice">
            공지사항 보기
          </Link>
        </div>
      </section>

      <section className="content-grid" aria-label="주요 섹션">
        {homeCards.map((card) => (
          <Link className="legacy-card" href={`/xe/${card.slug}`} key={card.slug}>
            <strong>{card.title}</strong>
            <span>{card.description}</span>
          </Link>
        ))}
      </section>
    </>
  );
}

function BoardContent({
  section
}: {
  section: NonNullable<ReturnType<typeof getSection>>;
}) {
  return (
    <section className="board-shell">
      <div className="board-heading">
        <h2>{section.title}</h2>
        <p>{section.description}</p>
      </div>
      <div className="empty-state">
        <strong>현재 배포본은 Next.js 프리뷰입니다.</strong>
        <span>
          원본 게시글 목록은 MySQL의 XE 테이블에 저장되는 구조라 이 저장소만으로는
          복원되지 않습니다. DB 덤프가 있으면 게시글을 JSON이나 정적 HTML로
          변환해 이 영역에 붙일 수 있습니다.
        </span>
      </div>
    </section>
  );
}

function resolveSlug(slug?: string[]): SectionSlug {
  const firstSlug = slug?.[0] ?? "main";
  return firstSlug as SectionSlug;
}
