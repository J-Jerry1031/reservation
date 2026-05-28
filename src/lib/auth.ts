import { cookies } from "next/headers";
import { redirect } from "next/navigation";
import { getSupabaseAdmin } from "@/lib/supabase";
import { hashSessionToken } from "@/lib/security";

export type CurrentUser = {
  id: string;
  login_id: string;
  name: string;
  phone: string;
  role: "member" | "admin";
  is_blacklisted: boolean;
  adult_verified: boolean;
};

const cookieName = "kg_session";

export async function setSessionCookie(token: string) {
  const cookieStore = await cookies();
  cookieStore.set(cookieName, token, {
    httpOnly: true,
    sameSite: "lax",
    secure: process.env.NODE_ENV === "production",
    path: "/",
    maxAge: 60 * 60 * 24 * 14
  });
}

export async function clearSessionCookie() {
  const cookieStore = await cookies();
  cookieStore.delete(cookieName);
}

export async function getCurrentUser(): Promise<CurrentUser | null> {
  const cookieStore = await cookies();
  const token = cookieStore.get(cookieName)?.value;

  if (!token) {
    return null;
  }

  const supabase = getSupabaseAdmin();
  const { data: session } = await supabase
    .from("app_sessions")
    .select("user_id, expires_at")
    .eq("token_hash", hashSessionToken(token))
    .maybeSingle();

  if (!session || new Date(session.expires_at).getTime() < Date.now()) {
    return null;
  }

  const { data: user } = await supabase
    .from("app_users")
    .select("id, login_id, name, phone, role, is_blacklisted")
    .eq("id", session.user_id)
    .maybeSingle();

  if (!user || user.is_blacklisted) {
    return null;
  }

  const { data: adultVerification } = await supabase
    .from("adult_verifications")
    .select("id")
    .eq("user_id", user.id)
    .in("status", ["self_declared", "carrier_verified"])
    .limit(1)
    .maybeSingle();

  return {
    ...user,
    adult_verified: Boolean(adultVerification)
  } as CurrentUser;
}

export async function requireUser() {
  const user = await getCurrentUser();
  if (!user) {
    redirect("/login");
  }
  return user;
}

export async function requireVerifiedUser() {
  const user = await requireUser();
  if (!user.adult_verified) {
    redirect("/adult-verification");
  }
  return user;
}

export async function requireAdmin() {
  const user = await requireVerifiedUser();
  if (user.role !== "admin") {
    redirect("/xe/main");
  }
  return user;
}
