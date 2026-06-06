import { createClient } from "@supabase/supabase-js";
import crypto from "node:crypto";

export const stateId = "default";
export const defaultAdminHash = "736e537f0f664a3d8208e88c114f2c5a16fff5800e5c146b0b83b1c43213d003";

export function getSupabase() {
  const url = process.env.SUPABASE_URL;
  const key = process.env.SUPABASE_SERVICE_ROLE_KEY;
  if (!url || !key) {
    return null;
  }
  return createClient(url, key, {
    auth: {
      persistSession: false,
      autoRefreshToken: false,
    },
  });
}

export function json(res, status, body) {
  res.status(status).setHeader("Content-Type", "application/json");
  res.end(JSON.stringify(body));
}

export function getPasswordHash() {
  return process.env.ADMIN_PASSWORD_HASH || defaultAdminHash;
}

export function getSessionSecret() {
  return process.env.ADMIN_SESSION_SECRET || process.env.SUPABASE_SERVICE_ROLE_KEY || "dev-session-secret";
}

export function sha256(value) {
  return crypto.createHash("sha256").update(value).digest("hex");
}

export function signToken(payload) {
  const body = Buffer.from(JSON.stringify(payload)).toString("base64url");
  const signature = crypto.createHmac("sha256", getSessionSecret()).update(body).digest("base64url");
  return `${body}.${signature}`;
}

export function verifyToken(token) {
  if (!token || !token.includes(".")) {
    return false;
  }
  const [body, signature] = token.split(".");
  const expected = crypto.createHmac("sha256", getSessionSecret()).update(body).digest("base64url");
  const signatureBuffer = Buffer.from(signature || "");
  const expectedBuffer = Buffer.from(expected);
  if (signatureBuffer.length !== expectedBuffer.length || !crypto.timingSafeEqual(signatureBuffer, expectedBuffer)) {
    return false;
  }
  try {
    const payload = JSON.parse(Buffer.from(body, "base64url").toString("utf8"));
    return payload.exp && payload.exp > Date.now();
  } catch {
    return false;
  }
}
