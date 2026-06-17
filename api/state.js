import { getSupabase, json, stateId, verifyToken, visitStateId } from "./_shared.js";

function splitVisitState(state) {
  const { visits = [], visitLogs = [], ...mainState } = state || {};
  return {
    mainState,
    visitState: { visits, visitLogs },
  };
}

function mergeVisits(primary = [], secondary = []) {
  const map = new Map();
  [...secondary, ...primary].forEach((visit) => {
    if (visit?.date) map.set(visit.date, visit);
  });
  return [...map.values()].sort((a, b) => String(b.date || "").localeCompare(String(a.date || "")));
}

export default async function handler(req, res) {
  const supabase = getSupabase();
  if (!supabase) {
    return json(res, 503, { error: "Supabase env vars are not configured" });
  }

  if (req.method === "GET") {
    const { data, error } = await supabase
      .from("site_state")
      .select("id,data")
      .in("id", [stateId, visitStateId]);

    if (error) {
      return json(res, 500, { error: error.message });
    }

    const rows = Array.isArray(data) ? data : [];
    const mainState = rows.find((row) => row.id === stateId)?.data || null;
    const visitState = rows.find((row) => row.id === visitStateId)?.data || {};

    return json(res, 200, {
      data: mainState ? {
        ...mainState,
        visits: mergeVisits(visitState.visits || [], mainState.visits || []),
        visitLogs: visitState.visitLogs || mainState.visitLogs || [],
      } : null,
    });
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

    const { mainState, visitState } = splitVisitState(state);
    const now = new Date().toISOString();
    const { error } = await supabase
      .from("site_state")
      .upsert([
        { id: stateId, data: mainState, updated_at: now },
        { id: visitStateId, data: visitState, updated_at: now },
      ]);

    if (error) {
      return json(res, 500, { error: error.message });
    }

    return json(res, 200, { ok: true });
  }

  return json(res, 405, { error: "Method not allowed" });
}
