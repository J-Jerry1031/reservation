"use client";

import { useActionState } from "react";
import { unlockPrivateQnaAction } from "@/app/actions";

type State = {
  ok?: boolean;
  error?: string;
  content?: string;
  answer?: string | null;
};

export function PrivateQnaUnlock({ postId }: { postId: string }) {
  const [state, action, pending] = useActionState<State, FormData>(unlockPrivateQnaAction, {});

  if (state.ok) {
    return (
      <div className="post-card">
        <p>{state.content}</p>
        {state.answer ? <div className="answer-box"><strong>관리자 답변</strong><p>{state.answer}</p></div> : null}
      </div>
    );
  }

  return (
    <form action={action} className="write-form">
      <input type="hidden" name="postId" value={postId} />
      <input name="password" type="password" placeholder="비공개 글 비밀번호" />
      {state.error ? <p className="form-error">{state.error}</p> : null}
      <button className="button" disabled={pending} type="submit">
        {pending ? "확인 중" : "비공개 글 열람"}
      </button>
    </form>
  );
}
