import { getSupabaseAdmin } from "@/lib/supabase";

export type Board = "notice" | "review" | "qna";
export type SortKey = "latest" | "oldest" | "recommended";

export async function getPosts({
  board,
  sort = "latest",
  query = ""
}: {
  board: Board;
  sort?: SortKey;
  query?: string;
}) {
  const supabase = getSupabaseAdmin();
  let request = supabase
    .from("board_posts")
    .select("id, board, title, content, author_name, visibility, view_count, recommendation_count, answer, created_at, updated_at")
    .eq("board", board);

  if (query) {
    request = request.or(`title.ilike.%${query}%,content.ilike.%${query}%`);
  }

  if (sort === "oldest") {
    request = request.order("created_at", { ascending: true });
  } else if (sort === "recommended") {
    request = request.order("recommendation_count", { ascending: false }).order("created_at", { ascending: false });
  } else {
    request = request.order("created_at", { ascending: false });
  }

  const { data, error } = await request.limit(100);
  if (error) throw error;
  return data ?? [];
}

export async function getPost(id: string) {
  const supabase = getSupabaseAdmin();
  const { data, error } = await supabase
    .from("board_posts")
    .select("*")
    .eq("id", id)
    .maybeSingle();

  if (error) throw error;
  return data;
}

export async function incrementPostView(id: string) {
  const supabase = getSupabaseAdmin();
  const { data: post } = await supabase
    .from("board_posts")
    .select("view_count")
    .eq("id", id)
    .maybeSingle();

  if (!post) {
    return;
  }

  await supabase
    .from("board_posts")
    .update({ view_count: (post.view_count ?? 0) + 1 })
    .eq("id", id);
}

export function getSeoulTodayLabel() {
  const formatter = new Intl.DateTimeFormat("ko-KR", {
    timeZone: "Asia/Seoul",
    month: "long",
    day: "numeric"
  });

  return `${formatter.format(new Date())} 출근부`;
}

export function getSeoulDateKey() {
  const parts = new Intl.DateTimeFormat("en-CA", {
    timeZone: "Asia/Seoul",
    year: "numeric",
    month: "2-digit",
    day: "2-digit"
  }).formatToParts(new Date());

  const value = Object.fromEntries(parts.map((part) => [part.type, part.value]));
  return `${value.year}-${value.month}-${value.day}`;
}

export async function getTodayAttendance() {
  const supabase = getSupabaseAdmin();
  const today = getSeoulDateKey();
  const { data, error } = await supabase
    .from("attendance_entries")
    .select("id, work_date, starts_at, ends_at, note, staff_profiles(*)")
    .eq("work_date", today)
    .eq("is_visible", true)
    .order("starts_at", { ascending: true });

  if (error) throw error;
  return data ?? [];
}

export async function getStaffProfile(id: string) {
  const supabase = getSupabaseAdmin();
  const { data, error } = await supabase
    .from("staff_profiles")
    .select("*")
    .eq("id", id)
    .maybeSingle();

  if (error) throw error;
  return data;
}

export async function getAllStaffWithAttendance() {
  const supabase = getSupabaseAdmin();
  const today = getSeoulDateKey();
  const { data: staff, error: staffError } = await supabase
    .from("staff_profiles")
    .select("*")
    .order("created_at", { ascending: false });

  if (staffError) throw staffError;

  const { data: entries, error: entryError } = await supabase
    .from("attendance_entries")
    .select("*")
    .eq("work_date", today);

  if (entryError) throw entryError;

  const entryMap = new Map((entries ?? []).map((entry) => [entry.staff_id, entry]));

  return (staff ?? []).map((profile) => ({
    profile,
    attendance: entryMap.get(profile.id) ?? null
  }));
}
