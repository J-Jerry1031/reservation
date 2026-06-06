import { getSupabase, json, stateId, verifyToken } from "./_shared.js";

const bucketName = "site-images";

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
  const { image, name, memberId } = req.body || {};
  if (!image || typeof image !== "string" || !image.startsWith("data:image/")) {
    return json(res, 400, { error: "Invalid image payload" });
  }

  if (!isAdmin) {
    const { data, error } = await supabase
      .from("site_state")
      .select("data")
      .eq("id", stateId)
      .maybeSingle();
    if (error) return json(res, 500, { error: error.message });
    const members = Array.isArray(data?.data?.members) ? data.data.members : [];
    const member = members.find((item) => String(item.id) === String(memberId));
    if (!member || member.status === "차단") {
      return json(res, 401, { error: "Member login required" });
    }
  }

  const match = image.match(/^data:(image\/(?:png|jpe?g|webp));base64,(.+)$/i);
  if (!match) {
    return json(res, 400, { error: "Unsupported image type" });
  }

  const contentType = match[1].toLowerCase().replace("image/jpg", "image/jpeg");
  const extension = contentType === "image/png" ? "png" : contentType === "image/webp" ? "webp" : "jpg";
  const buffer = Buffer.from(match[2], "base64");
  if (!buffer.length) {
    return json(res, 400, { error: "Empty image" });
  }

  await ensurePublicBucket(supabase);
  const safeName = String(name || "image").replace(/[^a-z0-9._-]+/gi, "-").slice(0, 80) || "image";
  const filePath = `${new Date().toISOString().slice(0, 10)}/${Date.now()}-${Math.random().toString(16).slice(2)}-${safeName}.${extension}`;
  const { error: uploadError } = await supabase.storage
    .from(bucketName)
    .upload(filePath, buffer, {
      contentType,
      upsert: false,
    });

  if (uploadError) {
    return json(res, 500, { error: uploadError.message });
  }

  const { data: publicUrl } = supabase.storage.from(bucketName).getPublicUrl(filePath);
  return json(res, 200, { url: publicUrl.publicUrl });
}

async function ensurePublicBucket(supabase) {
  const { data } = await supabase.storage.getBucket(bucketName);
  if (data) {
    if (!data.public) {
      await supabase.storage.updateBucket(bucketName, {
        public: true,
        fileSizeLimit: 5 * 1024 * 1024,
        allowedMimeTypes: ["image/png", "image/jpeg", "image/webp"],
      });
    }
    return;
  }
  await supabase.storage.createBucket(bucketName, {
    public: true,
    fileSizeLimit: 5 * 1024 * 1024,
    allowedMimeTypes: ["image/png", "image/jpeg", "image/webp"],
  });
}
