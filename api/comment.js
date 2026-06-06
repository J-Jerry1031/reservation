import { getSupabase, json, stateId, verifyToken } from "./_shared.js";

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
  const { table, postId, action, commentId, comment, reply, memberId } = req.body || {};
  if (!table || postId === undefined) {
    return json(res, 400, { error: "Invalid comment payload" });
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
  const post = board?.posts?.find((item) => String(item.id) === String(postId)) || board?.posts?.[Number(postId)];
  if (!post) {
    return json(res, 404, { error: "Post not found" });
  }
  if (post.notice) {
    return json(res, 403, { error: "Notice comments are disabled" });
  }

  post.comments = Array.isArray(post.comments) ? post.comments : [];

  if (action === "reply") {
    if (!isAdmin) {
      return json(res, 401, { error: "Admin only" });
    }
    const target = post.comments.find((item) => String(item.id) === String(commentId));
    if (!target || !reply?.content) {
      return json(res, 400, { error: "Invalid reply payload" });
    }
    target.replies = Array.isArray(target.replies) ? target.replies : [];
    target.replies.push({
      id: `${Date.now()}`,
      writer: "관리자",
      writerId: "admin",
      content: String(reply.content),
      date: new Date().toLocaleString("ko-KR"),
    });
  } else {
    if (!comment?.content || !comment?.writerId || !comment?.writer) {
      return json(res, 400, { error: "Invalid comment payload" });
    }
    if (!isAdmin) {
      if (table !== "review") {
        return json(res, 403, { error: "Members can comment on reviews only" });
      }
      const members = Array.isArray(state.members) ? state.members : [];
      const member = members.find((item) => String(item.id) === String(memberId || comment.writerId));
      if (!member || member.status === "차단" || String(member.id) !== String(comment.writerId)) {
        return json(res, 401, { error: "Member login required" });
      }
    }
    post.comments.push({
      id: `${Date.now()}`,
      writer: isAdmin ? "관리자" : String(comment.writer),
      writerId: isAdmin ? "admin" : String(comment.writerId),
      content: String(comment.content),
      date: new Date().toLocaleString("ko-KR"),
      private: Boolean(comment.private),
      password: comment.private ? String(comment.password || "") : "",
      replies: [],
    });
  }

  const { error: writeError } = await supabase
    .from("site_state")
    .upsert({ id: stateId, data: state, updated_at: new Date().toISOString() });

  if (writeError) {
    return json(res, 500, { error: writeError.message });
  }

  return json(res, 200, { comments: post.comments });
}
