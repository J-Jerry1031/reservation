import { redirect } from "next/navigation";
import { getCurrentUser } from "@/lib/auth";

export default async function GatePage() {
  const user = await getCurrentUser();

  if (!user) {
    redirect("/login");
  }

  if (!user.adult_verified) {
    redirect("/adult-verification");
  }

  redirect("/xe/main");
}
