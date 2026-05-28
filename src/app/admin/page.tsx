import { adminAnswerQnaAction, adminBlacklistAction, adminCreatePostAction, adminDeletePostAction, adminToggleAttendanceAction, adminUpsertStaffAction, logoutAction } from "@/app/actions";
import { ActionForm } from "@/components/action-form";
import { requireAdmin } from "@/lib/auth";
import { getAllStaffWithAttendance, getPosts, getSeoulTodayLabel } from "@/lib/data";

export const dynamic = "force-dynamic";

export default async function AdminPage() {
  const admin = await requireAdmin();
  const [notices, reviews, qnas, staffRows] = await Promise.all([
    getPosts({ board: "notice" }),
    getPosts({ board: "review" }),
    getPosts({ board: "qna" }),
    getAllStaffWithAttendance()
  ]);

  return (
    <main className="admin-page">
      <header className="admin-header">
        <div>
          <h1>관리자 페이지</h1>
          <p>{admin.name} 계정으로 접속 중</p>
        </div>
        <form action={logoutAction}>
          <button className="button compact" type="submit">로그아웃</button>
        </form>
      </header>

      <section className="admin-grid">
        <ActionForm action={adminCreatePostAction} className="admin-panel" successMessage="게시글이 등록되었습니다.">
          <h2>공지/게시글 작성</h2>
          <select name="board" defaultValue="notice">
            <option value="notice">공지사항</option>
            <option value="review">방문후기</option>
            <option value="qna">Q&A</option>
          </select>
          <input name="title" placeholder="제목" />
          <textarea name="content" placeholder="내용" rows={5} />
        </ActionForm>

        <ActionForm action={adminBlacklistAction} className="admin-panel" successMessage="블랙리스트에 등록되었습니다.">
          <h2>블랙리스트</h2>
          <input name="loginId" placeholder="차단 아이디" />
          <input name="phone" placeholder="차단 휴대폰번호" />
          <input name="reason" placeholder="사유" />
        </ActionForm>
      </section>

      <section className="admin-panel">
        <h2>{getSeoulTodayLabel()} 노출 관리</h2>
        <div className="admin-list">
          {staffRows.map(({ profile, attendance }) => (
            <form action={adminToggleAttendanceAction} className="attendance-row" key={profile.id}>
              <input type="hidden" name="staffId" value={profile.id} />
              <strong>{profile.nickname}</strong>
              <label>
                노출
                <input name="isVisible" type="checkbox" defaultChecked={attendance?.is_visible ?? false} />
              </label>
              <input name="startsAt" type="time" defaultValue={attendance?.starts_at?.slice(0, 5) ?? ""} />
              <input name="endsAt" type="time" defaultValue={attendance?.ends_at?.slice(0, 5) ?? ""} />
              <input name="note" placeholder="메모" defaultValue={attendance?.note ?? ""} />
              <button className="button compact" type="submit">저장</button>
            </form>
          ))}
        </div>
      </section>

      <ActionForm action={adminUpsertStaffAction} className="admin-panel" successMessage="프로필이 저장되었습니다.">
        <h2>직원 프로필 추가</h2>
        <div className="inline-fields">
          <input name="nickname" placeholder="닉네임" />
          <input name="imageUrl" placeholder="사진 URL" />
        </div>
        <div className="inline-fields">
          <input name="heightCm" placeholder="키" />
          <input name="weightKg" placeholder="몸무게" />
          <input name="age" placeholder="나이" />
        </div>
        <div className="inline-fields">
          <input name="bloodType" placeholder="혈액형" />
          <input name="mbti" placeholder="MBTI" />
          <input name="workingArea" placeholder="근무지역" />
        </div>
        <input name="style" placeholder="스타일" />
        <input name="hobby" placeholder="취미" />
        <input name="specialty" placeholder="특기" />
        <textarea name="intro" placeholder="소개" rows={3} />
        <label className="checkbox-row">
          <input name="isActive" type="checkbox" defaultChecked />
          프로필 활성화
        </label>
      </ActionForm>

      <AdminPostList title="공지사항" posts={notices} />
      <AdminPostList title="방문후기" posts={reviews} />
      <AdminQnaList posts={qnas} />
    </main>
  );
}

function AdminPostList({ title, posts }: { title: string; posts: Awaited<ReturnType<typeof getPosts>> }) {
  return (
    <section className="admin-panel">
      <h2>{title} 관리</h2>
      <div className="admin-list">
        {posts.map((post) => (
          <div className="admin-item" key={post.id}>
            <strong>{post.title}</strong>
            <span>{post.author_name}</span>
            <form action={adminDeletePostAction}>
              <input type="hidden" name="postId" value={post.id} />
              <button className="text-button danger" type="submit">삭제</button>
            </form>
          </div>
        ))}
      </div>
    </section>
  );
}

function AdminQnaList({ posts }: { posts: Awaited<ReturnType<typeof getPosts>> }) {
  return (
    <section className="admin-panel">
      <h2>Q&A 답변 관리</h2>
      <div className="admin-list">
        {posts.map((post) => (
          <div className="admin-item vertical" key={post.id}>
            <strong>{post.title}</strong>
            <span>{post.author_name} · {post.visibility}</span>
            <p>{post.content}</p>
            <form action={adminAnswerQnaAction} className="answer-form">
              <input type="hidden" name="postId" value={post.id} />
              <textarea name="answer" defaultValue={post.answer ?? ""} rows={3} placeholder="답변" />
              <button className="button compact" type="submit">답변 저장</button>
            </form>
            <form action={adminDeletePostAction}>
              <input type="hidden" name="postId" value={post.id} />
              <button className="text-button danger" type="submit">삭제</button>
            </form>
          </div>
        ))}
      </div>
    </section>
  );
}
