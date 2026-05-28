import Link from "next/link";
import { notFound } from "next/navigation";
import { createPostAction } from "@/app/actions";
import { ActionForm } from "@/components/action-form";
import { requireVerifiedUser } from "@/lib/auth";

type PageProps = {
  params: Promise<{ board: string }>;
};

export default async function WritePage({ params }: PageProps) {
  await requireVerifiedUser();
  const { board } = await params;

  if (!["review", "qna"].includes(board)) {
    notFound();
  }

  const title = board === "review" ? "방문후기 글쓰기" : "Q&A 글쓰기";
  const backHref = board === "review" ? "/xe/epilogue" : "/xe/kissqna";

  return (
    <main className="profile-page">
      <Link className="text-button" href={backHref}>목록으로 돌아가기</Link>
      <section className="board-shell write-page-shell">
        <div className="board-heading">
          <h1>{title}</h1>
        </div>
        <ActionForm action={createPostAction} className="write-form standalone" successMessage="게시글이 등록되었습니다.">
          <input type="hidden" name="board" value={board} />
          <input name="title" placeholder="제목" />
          <textarea name="content" placeholder="내용" rows={10} />
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
        </ActionForm>
      </section>
    </main>
  );
}
