"use client";

import { useEffect } from "react";
import { useActionState } from "react";

type FormState = {
  ok?: boolean;
  error?: string;
};

export function ActionForm({
  action,
  children,
  className,
  successMessage
}: {
  action: (state: FormState, formData: FormData) => Promise<FormState>;
  children: React.ReactNode;
  className?: string;
  successMessage?: string;
}) {
  const [state, formAction, pending] = useActionState(action, {});

  useEffect(() => {
    if (state.ok) {
      window.alert(successMessage || "저장되었습니다.");
    }
  }, [state.ok, successMessage]);

  return (
    <form action={formAction} className={className}>
      {children}
      {state.error ? <p className="form-error">{state.error}</p> : null}
      {state.ok && successMessage ? <p className="form-success">{successMessage}</p> : null}
      <button className="button" disabled={pending} type="submit">
        {pending ? "처리 중" : "저장"}
      </button>
    </form>
  );
}
