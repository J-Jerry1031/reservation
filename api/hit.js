import { getSupabase, json, stateId } from "./_shared.js";

function clientIp(req) {
  const forwarded = req.headers["x-forwarded-for"];
  if (forwarded) return String(forwarded).split(",")[0].trim();
  return String(req.headers["x-real-ip"] || req.socket?.remoteAddress || "");
}

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

  const { table, postId } = req.body || {};
  if (!table || postId === undefined) {
    return json(res, 400, { error: "Invalid hit payload" });
  }
  const ip = clientIp(req);
  const date = koreaDate();

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

  const hitLogs = Array.isArray(state.hitLogs) ? state.hitLogs : [];
  const stablePostId = String(post.id ?? postId);
  const alreadyCounted = hitLogs.some((log) => (
    log.date === date
    && log.table === table
    && String(log.postId) === stablePostId
    && String(log.ip || "") === ip
  ));

  if (!alreadyCounted) {
    const nextHit = Number(post.hit || 0) + 1;
    post.hit = String(nextHit);
    hitLogs.unshift({
      id: `${Date.now()}`,
      date,
      table,
      postId: stablePostId,
      ip,
    });
  }

  state.hitLogs = hitLogs.slice(0, 5000);

  const { error: writeError } = await supabase
    .from("site_state")
    .upsert({ id: stateId, data: state, updated_at: new Date().toISOString() });

  if (writeError) {
    return json(res, 500, { error: writeError.message });
  }

  return json(res, 200, { hit: post.hit, counted: !alreadyCounted });
}
