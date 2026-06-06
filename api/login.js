import { getPasswordHash, json, sha256, signToken } from "./_shared.js";

export default async function handler(req, res) {
  if (req.method !== "POST") {
    return json(res, 405, { error: "Method not allowed" });
  }

  const { id, password } = req.body || {};
  if (id !== "admin" || sha256(String(password || "")) !== getPasswordHash()) {
    return json(res, 401, { error: "Invalid credentials" });
  }

  const token = signToken({
    sub: "admin",
    exp: Date.now() + 1000 * 60 * 60,
  });

  return json(res, 200, { token });
}
