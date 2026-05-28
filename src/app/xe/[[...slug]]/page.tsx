import Link from "next/link";
import { redirect } from "next/navigation";
import { createPostAction, logoutAction } from "@/app/actions";
import { ActionForm } from "@/components/action-form";
import { requireVerifiedUser } from "@/lib/auth";
import { getPosts, getSeoulTodayLabel, getTodayAttendance, type Board, type SortKey } from "@/lib/data";
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
  searchParams: Promise<{
    q?: string;
    sort?: SortKey;
  }>;
};

export const dynamic = "force-dynamic";

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

export default async function LegacySectionPage({ params, searchParams }: PageProps) {
  const user = await requireVerifiedUser();
  const { slug } = await params;
  const query = await searchParams;
  const activeSlug = resolveSlug(slug);
  const section = getSection(activeSlug);

  if (!section) {
    redirect("/xe/main");
  }

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
          {user.role === "admin" ? <Link href="/admin">관리자</Link> : null}
          <form action={logoutAction}>
            <button className="nav-button" type="submit">로그아웃</button>
          </form>
        </nav>
      </header>

      <main>
        <section className="hero">
          <div className="hero-content">
            <h1>{section.title}</h1>
          </div>
        </section>

        {activeSlug === "main" ? <HomeContent /> : null}
        {activeSlug === "notice" ? <BoardContent board="notice" query={query.q} sort={query.sort} writable={false} /> : null}
        {activeSlug === "epilogue" ? <BoardContent board="review" query={query.q} sort={query.sort} writable /> : null}
        {activeSlug === "kissqna" ? <BoardContent board="qna" query={query.q} sort={query.sort} writable /> : null}
        {activeSlug === "schedule" ? <ScheduleContent /> : null}
      </main>
    </>
  );
}

function HomeContent() {
  return (
    <>
      <section className="notice-band">
        <img src="/pop/girlsgeneration.jpg" alt="" />
        <div>
          <h2>KissGirls</h2>
          <p>공지사항, 방문후기, Q&A, 출근부를 확인할 수 있습니다.</p>
          <Link className="button" href="/xe/schedule">
            오늘 출근부 보기
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

async function BoardContent({
  board,
  query = "",
  sort = "latest",
  writable
}: {
  board: Board;
  query?: string;
  sort?: SortKey;
  writable: boolean;
}) {
  const posts = await getPosts({ board, query, sort });
  const title = board === "notice" ? "공지사항" : board === "review" ? "방문후기" : "Q&A";

  return (
    <section className="board-shell">
      <div className="board-heading">
        <h2>{title}</h2>
        <form className="filter-row">
          <input name="q" placeholder="키워드 검색" defaultValue={query} />
          <select name="sort" defaultValue={sort}>
            <option value="latest">최신순</option>
            <option value="oldest">오래된순</option>
            <option value="recommended">추천순</option>
          </select>
          <button className="button compact" type="submit">검색</button>
        </form>
      </div>

      <div className="post-list">
        {posts.length ? posts.map((post) => (
          <article className="post-card" key={post.id}>
            <div className="post-meta">
              <Link href={`/post/${post.id}`}><strong>{post.title}</strong></Link>
              <span>{post.author_name} · {new Date(post.created_at).toLocaleString("ko-KR", { timeZone: "Asia/Seoul" })}</span>
            </div>
            {post.visibility === "private" ? (
              <p className="locked-text">비공개 Q&A입니다. 작성자 또는 관리자만 본문을 확인할 수 있습니다.</p>
            ) : (
              <p>{post.content}</p>
            )}
            {post.answer ? <div className="answer-box"><strong>관리자 답변</strong><p>{post.answer}</p></div> : null}
            <span className="chip">추천 {post.recommendation_count}</span>
          </article>
        )) : <div className="empty-state"><strong>게시글이 없습니다.</strong></div>}
      </div>

      {writable ? (
        <ActionForm action={createPostAction} className="write-form" successMessage="게시글이 등록되었습니다.">
          <input type="hidden" name="board" value={board} />
          <h3>{title} 작성</h3>
          <input name="title" placeholder="제목" />
          <textarea name="content" placeholder="내용" rows={5} />
          {board === "qna" ? (
            <div className="inline-fields">
              <label>
                공개 설정
                <select name="visibility" defaultValue="public">
                  <option value="public">공개</option>
                  <option value="private">비공개</option>
                </select>
              </label>
              <label>
                비공개 비밀번호
                <input name="postPassword" type="password" placeholder="비공개 선택 시 입력" />
              </label>
            </div>
          ) : null}
        </ActionForm>
      ) : null}
    </section>
  );
}

async function ScheduleContent() {
  const entries = await getTodayAttendance();

  return (
    <section className="board-shell">
      <div className="board-heading">
        <h2>{getSeoulTodayLabel()}</h2>
        <p>서울 기준 24시간제로 매일 날짜가 자동 변경됩니다.</p>
      </div>
      <div className="staff-grid">
        {entries.length ? entries.map((entry) => {
          const profile = Array.isArray(entry.staff_profiles) ? entry.staff_profiles[0] : entry.staff_profiles;
          if (!profile) return null;
          return (
            <Link className="staff-card" href={`/staff/${profile.id}`} key={entry.id}>
              <img src={profile.image_url || "/xe/files/faceOff/037/178/images/logo.gif"} alt="" />
              <strong>{profile.nickname}</strong>
              <span>{entry.starts_at?.slice(0, 5) ?? "시간 미정"} - {entry.ends_at?.slice(0, 5) ?? "마감 미정"}</span>
              {entry.note ? <small>{entry.note}</small> : null}
            </Link>
          );
        }) : <div className="empty-state"><strong>오늘 노출된 출근 직원이 없습니다.</strong></div>}
      </div>
    </section>
  );
}

function resolveSlug(slug?: string[]): SectionSlug {
  const firstSlug = slug?.[0] ?? "main";
  return firstSlug as SectionSlug;
}
