import { getSupabase, json, stateId, verifyToken } from "./_shared.js";

export default async function handler(req, res) {
  const supabase = getSupabase();
  if (!supabase) {
    return json(res, 503, { error: "Supabase env vars are not configured" });
  }

  if (req.method === "GET") {
    const { data, error } = await supabase
      .from("site_state")
      .select("data")
      .eq("id", stateId)
      .maybeSingle();

    if (error) {
      return json(res, 500, { error: error.message });
    }

    return json(res, 200, { data: data?.data || null });
  }

  if (req.method === "PUT") {
    const token = String(req.headers.authorization || "").replace(/^Bearer\s+/i, "");
    if (!verifyToken(token)) {
      return json(res, 401, { error: "Unauthorized" });
    }

    const { data: state } = req.body || {};
    if (!state || typeof state !== "object") {
      return json(res, 400, { error: "Invalid state payload" });
    }

    const { error } = await supabase
      .from("site_state")
      .upsert({ id: stateId, data: state, updated_at: new Date().toISOString() });

    if (error) {
      return json(res, 500, { error: error.message });
    }

    return json(res, 200, { ok: true });
  }

  return json(res, 405, { error: "Method not allowed" });
}
