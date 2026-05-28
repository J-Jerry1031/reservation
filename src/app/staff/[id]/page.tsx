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
    ["닉네임", profile.nickname],
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
      <section className="profile-hero">
        <img src={profile.image_url || "/xe/files/faceOff/037/178/images/logo.gif"} alt="" />
        <div>
          <h1>{profile.nickname}</h1>
          <p>{profile.intro}</p>
        </div>
      </section>
      <section className="spec-grid">
        {specs.map(([label, value]) => (
          <div key={label}>
            <span>{label}</span>
            <strong>{value || "미입력"}</strong>
          </div>
        ))}
      </section>
    </main>
  );
}
