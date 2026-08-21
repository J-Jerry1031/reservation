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

function queryValue(value) {
  return Array.isArray(value) ? value[0] : value;
}

function explicitTrue(value) {
  if (value === true || value === 1) return true;
  if (typeof value === "string") return /^(true|1|yes|y)$/i.test(value.trim());
  return false;
}

function firstContentImage(html = "") {
  const match = String(html || "").match(/<img[^>]+src=(?:"([^"]+)"|'([^']+)'|([^\s>]+))/i);
  return match?.[1] || match?.[2] || match?.[3] || "";
}

function stripHtml(html = "") {
  return String(html || "").replace(/<[^>]*>/g, " ").replace(/\s+/g, " ").trim();
}

function isPostHidden(post) {
  return explicitTrue(post?.hidden) || post?.manager?.status === "휴무";
}

function publicPost(post = {}, full = false) {
  const content = String(post.content || "");
  const image = firstContentImage(content) || post.image || firstContentImage(post.summary);
  const nextPost = {
    id: post.id,
    title: post.title,
    writer: post.writer,
    writerId: post.writerId,
    hit: post.hit,
    date: post.date,
    summary: post.summary || stripHtml(content).slice(0, 180),
    image,
    notice: Boolean(post.notice),
    hidden: post.hidden,
    manager: post.manager || null,
    comments: [],
    content: "",
  };

  if (full) {
    nextPost.content = content || post.summary || "";
    nextPost.comments = Array.isArray(post.comments) ? post.comments : [];
  }

  return nextPost;
}

function publicBoards(state = {}, req) {
  const selectedTable = String(queryValue(req.query?.bo_table) || "");
  const selectedWrId = queryValue(req.query?.wr_id);
  const isDetail = selectedTable && selectedWrId !== undefined && selectedWrId !== null;
  const boards = state.boards || {};

  return Object.fromEntries(Object.entries(boards).map(([key, board]) => {
    const posts = Array.isArray(board.posts) ? board.posts : [];
    let selectedPosts = posts;

    if (!selectedTable) {
      selectedPosts = posts.slice(0, key === "gallery" ? 12 : 5);
    } else if (key !== selectedTable) {
      selectedPosts = posts.slice(0, key === "gallery" ? 8 : 5);
    }

    return [key, {
      ...board,
      posts: selectedPosts.map((post, index) => {
        const full = isDetail && key === selectedTable
          && (String(post?.id) === String(selectedWrId) || String(index) === String(selectedWrId));
        return publicPost(post, full);
      }),
    }];
  }));
}

function publicState(state = {}, req) {
  return {
    config: state.config || {},
    boards: publicBoards(state, req),
    permissions: state.permissions || {},
    themeSettings: state.themeSettings || {},
    menus: state.menus || [],
    popups: state.popups || [],
    popular: state.popular || [],
    polls: state.polls || [],
  };
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

    const mergedState = mainState ? {
        ...mainState,
        visits: mergeVisits(visitState.visits || [], mainState.visits || []),
        visitLogs: visitState.visitLogs || mainState.visitLogs || [],
      } : null;

    const token = String(req.headers.authorization || "").replace(/^Bearer\s+/i, "");
    const shouldReturnPublicState = queryValue(req.query?.public) === "1" || !verifyToken(token);

    return json(res, 200, {
      data: mergedState && shouldReturnPublicState ? publicState(mergedState, req) : mergedState,
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
