import Link from "next/link";

export default function NotFound() {
  return (
    <main className="gate-page">
      <section className="gate">
        <img src="/xe/files/faceOff/037/178/images/logo.gif" alt="KissGirls" />
        <div>
          <h1>페이지를 찾을 수 없습니다</h1>
          <p>남아 있는 레거시 링크가 아직 Next.js 라우트로 연결되지 않았습니다.</p>
          <Link className="button" href="/xe/main">
            홈으로 이동
          </Link>
        </div>
      </section>
    </main>
  );
}
