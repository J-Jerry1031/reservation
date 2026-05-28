import Link from "next/link";

export default function GatePage() {
  return (
    <main className="gate-page">
      <section className="gate" aria-label="사이트 입장">
        <img src="/_SuperLog/img/19.jpg" alt="" />
        <div>
          <img src="/_SuperLog/img/19_tx.jpg" alt="KissGirls" />
          <p>
            원본 SuperLog/OKName 인증은 Vercel에서 실행하지 않고, Next.js
            기반 프리뷰 사이트로 연결합니다.
          </p>
          <Link className="button" href="/xe/main">
            사이트 들어가기
          </Link>
        </div>
      </section>
    </main>
  );
}
