import Link from "next/link";
import { signUpAction } from "@/app/actions";
import { ActionForm } from "@/components/action-form";

export default function SignupPage() {
  return (
    <main className="gate-page">
      <section className="auth-panel wide">
        <img src="/xe/files/faceOff/037/178/images/logo.gif" alt="KissGirls" />
        <h1>회원가입</h1>
        <ActionForm action={signUpAction}>
          <div className="inline-fields">
            <input name="name" placeholder="이름" />
            <input name="phone" placeholder="휴대폰번호" />
          </div>
          <div className="inline-fields">
            <input name="birthFirst6" maxLength={6} placeholder="생년월일 앞 6자리" />
            <input name="birthGenderDigit" maxLength={1} placeholder="뒤 1자리" />
          </div>
          <input name="loginId" placeholder="로그인 아이디" />
          <input name="password" placeholder="비밀번호 8자 이상" type="password" />
        </ActionForm>
        <p>
          이미 계정이 있나요? <Link href="/login">로그인</Link>
        </p>
      </section>
    </main>
  );
}
