import { getSupabase, json, stateId } from "./_shared.js";

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

  const { member } = req.body || {};
  if (!member || !member.id || !member.password || !member.name || !member.nick) {
    return json(res, 400, { error: "Invalid member payload" });
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
  const members = Array.isArray(state.members) ? state.members : [];
  if (members.some((item) => item.id === member.id)) {
    return json(res, 409, { error: "Member already exists" });
  }

  const nextMember = {
    id: String(member.id),
    password: String(member.password),
    name: String(member.name),
    nick: String(member.nick),
    phone: String(member.phone || ""),
    role: "member",
    point: 1000,
    status: "정상",
    joined: koreaDate(),
  };
  const points = Array.isArray(state.points) ? state.points : [];
  const nextState = {
    ...state,
    members: [nextMember, ...members],
    points: [{ member: nextMember.id, reason: "회원가입 축하", point: 1000, date: nextMember.joined }, ...points],
  };

  const { error: writeError } = await supabase
    .from("site_state")
    .upsert({ id: stateId, data: nextState, updated_at: new Date().toISOString() });

  if (writeError) {
    return json(res, 500, { error: writeError.message });
  }

  return json(res, 200, { member: nextMember });
}
