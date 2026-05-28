import Link from "next/link";
import { loginAction } from "@/app/actions";
import { ActionForm } from "@/components/action-form";

export default function LoginPage() {
  return (
    <main className="gate-page">
      <section className="auth-panel">
        <img src="/xe/files/faceOff/037/178/images/logo.gif" alt="KissGirls" />
        <h1>로그인</h1>
        <ActionForm action={loginAction}>
          <input name="loginId" placeholder="아이디" />
          <input name="password" placeholder="비밀번호" type="password" />
        </ActionForm>
        <p>
          계정이 없나요? <Link href="/signup">회원가입</Link>
        </p>
      </section>
    </main>
  );
}
