import { adultVerificationAction, logoutAction } from "@/app/actions";
import { ActionForm } from "@/components/action-form";
import { requireUser } from "@/lib/auth";

export default async function AdultVerificationPage() {
  const user = await requireUser();

  return (
    <main className="gate-page">
      <section className="auth-panel wide">
        <img src="/xe/files/faceOff/037/178/images/logo.gif" alt="KissGirls" />
        <h1>성인 확인</h1>
        <p className="muted-text">입력한 정보는 성인 확인 이력으로 저장됩니다. 통신사 PASS/NICE/KCB 실명 인증은 별도 유료 계약 후 연동할 수 있습니다.</p>
        <ActionForm action={adultVerificationAction}>
          <div className="inline-fields">
            <input name="name" defaultValue={user.name} placeholder="이름" />
            <input name="phone" defaultValue={user.phone} placeholder="휴대폰번호" />
          </div>
          <div className="inline-fields">
            <input name="birthFirst6" maxLength={6} placeholder="생년월일 앞 6자리" />
            <input name="birthGenderDigit" maxLength={1} placeholder="뒤 1자리" />
          </div>
          <select name="carrier" defaultValue="">
            <option value="" disabled>통신사 선택</option>
            <option value="SKT">SKT</option>
            <option value="KT">KT</option>
            <option value="LGU+">LG U+</option>
            <option value="MVNO">알뜰폰</option>
          </select>
          <label className="checkbox-row">
            <input name="consent" type="checkbox" />
            만 19세 이상이며 성인 확인 정보 저장에 동의합니다.
          </label>
        </ActionForm>
        <form action={logoutAction}>
          <button className="text-button" type="submit">다른 계정으로 로그인</button>
        </form>
      </section>
    </main>
  );
}
