create table if not exists public.site_state (
  id text primary key,
  data jsonb not null,
  updated_at timestamptz not null default now()
);

alter table public.site_state enable row level security;

drop policy if exists "no direct public access" on public.site_state;

-- No anon/client policies are created on purpose.
-- Reads and writes go through Vercel API routes using SUPABASE_SERVICE_ROLE_KEY.
