import Link from "next/link";
import { notFound } from "next/navigation";
import { PrivateQnaUnlock } from "@/components/private-qna-unlock";
import { requireVerifiedUser } from "@/lib/auth";
import { getPost, incrementPostView } from "@/lib/data";

type PageProps = {
  params: Promise<{ id: string }>;
};

export default async function PostDetailPage({ params }: PageProps) {
  const user = await requireVerifiedUser();
  const { id } = await params;
  const post = await getPost(id);

  if (!post) {
    notFound();
  }

  await incrementPostView(id);

  const backHref = post.board === "review" ? "/xe/epilogue" : post.board === "qna" ? "/xe/kissqna" : "/xe/notice";
  const canReadPrivate = post.author_id === user.id || user.role === "admin";
  const isLocked = post.board === "qna" && post.visibility === "private" && !canReadPrivate;

  return (
    <main className="profile-page">
      <Link className="text-button" href={backHref}>목록으로 돌아가기</Link>
      <section className="board-shell">
        <div className="board-heading">
          <h1>{post.title}</h1>
          <p>{maskAuthor(post.author_name)} · {new Date(post.created_at).toLocaleString("ko-KR", { timeZone: "Asia/Seoul" })} · 조회 {post.view_count ?? 0}</p>
        </div>
        {isLocked ? (
          <PrivateQnaUnlock postId={post.id} />
        ) : (
          <article className="post-card">
            <p>{post.content}</p>
            {post.answer ? <div className="answer-box"><strong>관리자 답변</strong><p>{post.answer}</p></div> : null}
          </article>
        )}
      </section>
    </main>
  );
}

function maskAuthor(name: string) {
  if (!name) return "-";
  if (name.length <= 2) return `${name[0] ?? ""}*`;
  return `${name.slice(0, 2)}${"*".repeat(Math.min(3, name.length - 2))}`;
}
