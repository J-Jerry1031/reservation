import { getSupabase, json, stateId, verifyToken } from "./_shared.js";

function koreaDate(value = new Date()) {
  return new Intl.DateTimeFormat("en-CA", {
    timeZone: "Asia/Seoul",
    year: "numeric",
    month: "2-digit",
    day: "2-digit",
  }).format(value);
}

export default async function handler(req, res) {
  if (req.method !== "POST") {
    return json(res, 405, { error: "Method not allowed" });
  }

  const supabase = getSupabase();
  if (!supabase) {
    return json(res, 503, { error: "Supabase env vars are not configured" });
  }

  const token = String(req.headers.authorization || "").replace(/^Bearer\s+/i, "");
  const isAdmin = verifyToken(token);
  const { table, post, memberId } = req.body || {};
  if (!table || !post?.title || !post?.content) {
    return json(res, 400, { error: "Invalid post payload" });
  }

  if (!isAdmin && table !== "review") {
    return json(res, 403, { error: "Members can write reviews only" });
  }

  const { data, error: readError } = await supabase
    .from("site_state")
    .select("data")
    .eq("id", stateId)
    .maybeSingle();

  if (readError) {
    return json(res, 500, { error: readError.message });
  }

  const state = data?.data || {};
  const board = state.boards?.[table];
  if (!board) {
    return json(res, 404, { error: "Board not found" });
  }

  const members = Array.isArray(state.members) ? state.members : [];
  const member = members.find((item) => String(item.id) === String(memberId));
  if (!isAdmin && (!member || member.status === "차단")) {
    return json(res, 401, { error: "Member login required" });
  }

  board.posts = Array.isArray(board.posts) ? board.posts : [];
  const nextPost = {
    id: String(post.id || Date.now()),
    title: String(post.title),
    writer: isAdmin ? "관리자" : String(member.nick || member.id),
    writerId: isAdmin ? "admin" : String(member.id),
    hit: String(post.hit || "0"),
    date: koreaDate(),
    summary: String(post.summary || ""),
    content: String(post.content),
    image: String(post.image || ""),
    notice: isAdmin && Boolean(post.notice),
    comments: Array.isArray(post.comments) ? post.comments : [],
  };

  if (board.type === "gallery" && isAdmin) {
    nextPost.manager = post.manager || null;
  }

  board.posts.unshift(nextPost);

  const { error: writeError } = await supabase
    .from("site_state")
    .upsert({ id: stateId, data: state, updated_at: new Date().toISOString() });

  if (writeError) {
    return json(res, 500, { error: writeError.message });
  }

  return json(res, 200, { post: nextPost });
}
