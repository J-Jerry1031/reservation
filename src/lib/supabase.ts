import { createClient, type SupabaseClient } from "@supabase/supabase-js";

let cachedClient: SupabaseClient<any, "public", any> | null = null;

export function getSupabaseAdmin() {
  if (cachedClient) {
    return cachedClient;
  }

  const url = normalizeSupabaseUrl(process.env.SUPABASE_URL);
  const key = process.env.SUPABASE_SERVICE_ROLE_KEY ?? process.env.SUPABASE_SECRET_KEY;

  if (!url || !key) {
    throw new Error("Missing SUPABASE_URL or SUPABASE_SERVICE_ROLE_KEY.");
  }

  cachedClient = createClient<any, "public", any>(url, key, {
    auth: {
      persistSession: false
    }
  });

  return cachedClient;
}

function normalizeSupabaseUrl(value: string | undefined) {
  if (!value) {
    return value;
  }

  const url = new URL(value);
  url.pathname = "";
  url.search = "";
  url.hash = "";
  return url.toString().replace(/\/$/, "");
}
