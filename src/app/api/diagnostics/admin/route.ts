import { NextResponse } from "next/server";
import { getSupabaseAdmin } from "@/lib/supabase";

export async function GET() {
  const supabaseUrl = process.env.SUPABASE_URL ?? "";
  const supabaseHost = supabaseUrl ? new URL(supabaseUrl).host : null;

  try {
    const supabase = getSupabaseAdmin();
    const { data, error } = await supabase
      .from("app_users")
      .select("login_id, role, is_blacklisted")
      .eq("login_id", "admin")
      .maybeSingle();

    return NextResponse.json({
      supabaseHost,
      adminFound: Boolean(data),
      admin: data
        ? {
            loginId: data.login_id,
            role: data.role,
            isBlacklisted: data.is_blacklisted
          }
        : null,
      error: error?.message ?? null
    });
  } catch (error) {
    return NextResponse.json(
      {
        supabaseHost,
        adminFound: false,
        error: error instanceof Error ? error.message : "Unknown diagnostics error"
      },
      { status: 500 }
    );
  }
}
