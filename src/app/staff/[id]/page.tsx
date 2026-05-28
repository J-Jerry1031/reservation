import Link from "next/link";
import { notFound } from "next/navigation";
import { requireVerifiedUser } from "@/lib/auth";
import { getStaffProfile } from "@/lib/data";

type PageProps = {
  params: Promise<{ id: string }>;
};

export default async function StaffPage({ params }: PageProps) {
  await requireVerifiedUser();
  const { id } = await params;
  const profile = await getStaffProfile(id);

  if (!profile) {
    notFound();
  }

  const specs = [
    ["키", profile.height_cm ? `${profile.height_cm}cm` : "미입력"],
    ["몸무게", profile.weight_kg ? `${profile.weight_kg}kg` : "미입력"],
    ["나이", profile.age ? `${profile.age}세` : "미입력"],
    ["혈액형", profile.blood_type],
    ["MBTI", profile.mbti],
    ["스타일", profile.style],
    ["취미", profile.hobby],
    ["특기", profile.specialty],
    ["근무지역", profile.working_area]
  ];

  return (
    <main className="profile-page">
      <Link className="text-button" href="/xe/schedule">출근부로 돌아가기</Link>
      <section className="staff-profile-hero">
        <div className="staff-profile-copy">
          <span className="profile-kicker">Profile</span>
          <h1>{profile.nickname}</h1>
          <p className="profile-intro">{profile.intro || "아직 등록된 소개글이 없습니다."}</p>
          <div className="profile-highlight">
            <span>오늘의 출근 프로필</span>
            <strong>{profile.working_area || "지역 미입력"}</strong>
          </div>
          <section className="spec-grid">
            {specs.map(([label, value]) => (
              <div key={label}>
                <span>{label}</span>
                <strong>{value || "미입력"}</strong>
              </div>
            ))}
          </section>
        </div>
        <figure className="staff-profile-photo">
          <img src={profile.image_url || "/xe/files/faceOff/037/178/images/logo.gif"} alt={`${profile.nickname} 프로필 사진`} />
        </figure>
      </section>
    </main>
  );
}
