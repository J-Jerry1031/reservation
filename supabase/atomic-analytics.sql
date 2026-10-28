begin;

set local statement_timeout = '10min';

create table if not exists public.site_visit_daily (
  visit_date date primary key,
  unique_visitors bigint not null default 0,
  last_browser text not null default '',
  last_os text not null default '',
  last_device text not null default '',
  updated_at timestamptz not null default now()
);

create table if not exists public.site_visit_events (
  visit_date date not null,
  ip text not null,
  event_id text not null default '',
  first_time text not null default '',
  last_time text not null default '',
  visit_count bigint not null default 1,
  member_id text not null default '',
  browser text not null default '',
  os text not null default '',
  device text not null default '',
  source text not null default '',
  source_label text not null default '',
  last_source text not null default '',
  last_source_label text not null default '',
  referrer text not null default '',
  referrer_host text not null default '',
  last_referrer text not null default '',
  last_referrer_host text not null default '',
  landing_url text not null default '',
  last_landing_url text not null default '',
  path text not null default '',
  last_path text not null default '',
  utm_source text not null default '',
  utm_medium text not null default '',
  utm_campaign text not null default '',
  utm_term text not null default '',
  search_term text not null default '',
  user_agent text not null default '',
  updated_at timestamptz not null default now(),
  primary key (visit_date, ip)
);

create index if not exists site_visit_events_date_idx
  on public.site_visit_events (visit_date desc);

create table if not exists public.post_hit_counts (
  board text not null,
  post_id text not null,
  hit_count bigint not null default 0,
  updated_at timestamptz not null default now(),
  primary key (board, post_id)
);

create table if not exists public.post_hit_visitors (
  visit_date date not null,
  board text not null,
  post_id text not null,
  ip text not null,
  created_at timestamptz not null default now(),
  primary key (visit_date, board, post_id, ip)
);

create index if not exists post_hit_visitors_date_idx
  on public.post_hit_visitors (visit_date desc);

alter table public.site_visit_daily enable row level security;
alter table public.site_visit_events enable row level security;
alter table public.post_hit_counts enable row level security;
alter table public.post_hit_visitors enable row level security;

revoke all on public.site_visit_daily from anon, authenticated;
revoke all on public.site_visit_events from anon, authenticated;
revoke all on public.post_hit_counts from anon, authenticated;
revoke all on public.post_hit_visitors from anon, authenticated;

insert into public.site_visit_daily (
  visit_date, unique_visitors, last_browser, last_os, last_device, updated_at
)
select
  (item ->> 'date')::date,
  greatest(0, coalesce((item ->> 'count')::bigint, 0)),
  coalesce(item ->> 'browser', ''),
  coalesce(item ->> 'os', ''),
  coalesce(item ->> 'device', ''),
  now()
from public.site_state state
cross join lateral jsonb_array_elements(coalesce(state.data -> 'visits', '[]'::jsonb)) item
where state.id = 'visits'
  and coalesce(item ->> 'date', '') ~ '^\d{4}-\d{2}-\d{2}$'
on conflict (visit_date) do update set
  unique_visitors = greatest(site_visit_daily.unique_visitors, excluded.unique_visitors),
  last_browser = coalesce(nullif(excluded.last_browser, ''), site_visit_daily.last_browser),
  last_os = coalesce(nullif(excluded.last_os, ''), site_visit_daily.last_os),
  last_device = coalesce(nullif(excluded.last_device, ''), site_visit_daily.last_device),
  updated_at = now();

insert into public.site_visit_events (
  visit_date, ip, event_id, first_time, last_time, visit_count, member_id,
  browser, os, device, source, source_label, last_source, last_source_label,
  referrer, referrer_host, last_referrer, last_referrer_host,
  landing_url, last_landing_url, path, last_path,
  utm_source, utm_medium, utm_campaign, utm_term, search_term, user_agent, updated_at
)
select
  (item ->> 'date')::date,
  item ->> 'ip',
  coalesce(item ->> 'id', ''),
  coalesce(item ->> 'firstTime', item ->> 'time', ''),
  coalesce(item ->> 'lastTime', item ->> 'time', ''),
  greatest(1, coalesce((item ->> 'visitCountByIp')::bigint, 1)),
  coalesce(item ->> 'memberId', ''),
  coalesce(item ->> 'browser', ''),
  coalesce(item ->> 'os', ''),
  coalesce(item ->> 'device', ''),
  coalesce(item ->> 'source', ''),
  coalesce(item ->> 'sourceLabel', ''),
  coalesce(item ->> 'lastSource', item ->> 'source', ''),
  coalesce(item ->> 'lastSourceLabel', item ->> 'sourceLabel', ''),
  coalesce(item ->> 'referrer', ''),
  coalesce(item ->> 'referrerHost', ''),
  coalesce(item ->> 'lastReferrer', item ->> 'referrer', ''),
  coalesce(item ->> 'lastReferrerHost', item ->> 'referrerHost', ''),
  coalesce(item ->> 'landingUrl', ''),
  coalesce(item ->> 'lastLandingUrl', item ->> 'landingUrl', ''),
  coalesce(item ->> 'path', ''),
  coalesce(item ->> 'lastPath', item ->> 'path', ''),
  coalesce(item ->> 'utmSource', ''),
  coalesce(item ->> 'utmMedium', ''),
  coalesce(item ->> 'utmCampaign', ''),
  coalesce(item ->> 'utmTerm', ''),
  coalesce(item ->> 'searchTerm', ''),
  coalesce(item ->> 'userAgent', ''),
  now()
from public.site_state state
cross join lateral jsonb_array_elements(coalesce(state.data -> 'visitLogs', '[]'::jsonb)) item
where state.id = 'visits'
  and coalesce(item ->> 'date', '') ~ '^\d{4}-\d{2}-\d{2}$'
  and coalesce(item ->> 'ip', '') <> ''
on conflict (visit_date, ip) do update set
  visit_count = greatest(site_visit_events.visit_count, excluded.visit_count),
  last_time = coalesce(nullif(excluded.last_time, ''), site_visit_events.last_time),
  updated_at = now();

insert into public.post_hit_counts (board, post_id, hit_count, updated_at)
select
  board.key,
  coalesce(post.value ->> 'id', (post.ordinality - 1)::text),
  case
    when coalesce(post.value ->> 'hit', '') ~ '^\d+$' then (post.value ->> 'hit')::bigint
    else 0
  end,
  now()
from public.site_state state
cross join lateral jsonb_each(coalesce(state.data -> 'boards', '{}'::jsonb)) board
cross join lateral jsonb_array_elements(coalesce(board.value -> 'posts', '[]'::jsonb)) with ordinality as post(value, ordinality)
where state.id = 'default'
on conflict (board, post_id) do update set
  hit_count = greatest(post_hit_counts.hit_count, excluded.hit_count),
  updated_at = now();

insert into public.post_hit_counts (board, post_id, hit_count, updated_at)
select board.key, hit.key,
  case when hit.value #>> '{}' ~ '^\d+$' then (hit.value #>> '{}')::bigint else 0 end,
  now()
from public.site_state state
cross join lateral jsonb_each(coalesce(state.data -> 'counts', '{}'::jsonb)) board
cross join lateral jsonb_each(coalesce(board.value, '{}'::jsonb)) hit
where state.id = 'hits'
on conflict (board, post_id) do update set
  hit_count = greatest(post_hit_counts.hit_count, excluded.hit_count),
  updated_at = now();

insert into public.post_hit_visitors (visit_date, board, post_id, ip)
select (item ->> 'date')::date, item ->> 'table', item ->> 'postId', item ->> 'ip'
from public.site_state state
cross join lateral jsonb_array_elements(coalesce(state.data -> 'hitLogs', '[]'::jsonb)) item
where state.id in ('default', 'hits')
  and coalesce(item ->> 'date', '') ~ '^\d{4}-\d{2}-\d{2}$'
  and coalesce(item ->> 'table', '') <> ''
  and coalesce(item ->> 'postId', '') <> ''
  and coalesce(item ->> 'ip', '') <> ''
on conflict do nothing;

create or replace function public.record_site_visit(
  p_visit_date date,
  p_ip text,
  p_event_id text,
  p_time text,
  p_member_id text,
  p_browser text,
  p_os text,
  p_device text,
  p_source text,
  p_source_label text,
  p_referrer text,
  p_referrer_host text,
  p_landing_url text,
  p_path text,
  p_utm_source text,
  p_utm_medium text,
  p_utm_campaign text,
  p_utm_term text,
  p_search_term text,
  p_user_agent text
) returns table(unique_visitors bigint, visit_count bigint)
language plpgsql
security definer
set search_path = public
as $$
declare
  inserted_count integer := 0;
begin
  insert into public.site_visit_events (
    visit_date, ip, event_id, first_time, last_time, visit_count, member_id,
    browser, os, device, source, source_label, last_source, last_source_label,
    referrer, referrer_host, last_referrer, last_referrer_host,
    landing_url, last_landing_url, path, last_path,
    utm_source, utm_medium, utm_campaign, utm_term, search_term, user_agent
  ) values (
    p_visit_date, p_ip, p_event_id, p_time, p_time, 1, coalesce(p_member_id, ''),
    coalesce(p_browser, ''), coalesce(p_os, ''), coalesce(p_device, ''),
    coalesce(p_source, ''), coalesce(p_source_label, ''), coalesce(p_source, ''), coalesce(p_source_label, ''),
    coalesce(p_referrer, ''), coalesce(p_referrer_host, ''), coalesce(p_referrer, ''), coalesce(p_referrer_host, ''),
    coalesce(p_landing_url, ''), coalesce(p_landing_url, ''), coalesce(p_path, ''), coalesce(p_path, ''),
    coalesce(p_utm_source, ''), coalesce(p_utm_medium, ''), coalesce(p_utm_campaign, ''),
    coalesce(p_utm_term, ''), coalesce(p_search_term, ''), coalesce(p_user_agent, '')
  ) on conflict do nothing;
  get diagnostics inserted_count = row_count;

  if inserted_count = 0 then
    update public.site_visit_events set
      last_time = p_time,
      visit_count = site_visit_events.visit_count + 1,
      browser = coalesce(nullif(p_browser, ''), browser),
      os = coalesce(nullif(p_os, ''), os),
      device = coalesce(nullif(p_device, ''), device),
      last_source = coalesce(p_source, ''),
      last_source_label = coalesce(p_source_label, ''),
      last_referrer = coalesce(p_referrer, ''),
      last_referrer_host = coalesce(p_referrer_host, ''),
      last_landing_url = coalesce(p_landing_url, ''),
      last_path = coalesce(p_path, ''),
      user_agent = coalesce(nullif(p_user_agent, ''), user_agent),
      updated_at = now()
    where visit_date = p_visit_date and ip = p_ip;
  end if;

  insert into public.site_visit_daily (
    visit_date, unique_visitors, last_browser, last_os, last_device, updated_at
  ) values (
    p_visit_date, inserted_count, coalesce(p_browser, ''), coalesce(p_os, ''), coalesce(p_device, ''), now()
  ) on conflict (visit_date) do update set
    unique_visitors = site_visit_daily.unique_visitors + inserted_count,
    last_browser = coalesce(nullif(excluded.last_browser, ''), site_visit_daily.last_browser),
    last_os = coalesce(nullif(excluded.last_os, ''), site_visit_daily.last_os),
    last_device = coalesce(nullif(excluded.last_device, ''), site_visit_daily.last_device),
    updated_at = now();

  return query
  select d.unique_visitors, e.visit_count
  from public.site_visit_daily d
  join public.site_visit_events e on e.visit_date = d.visit_date and e.ip = p_ip
  where d.visit_date = p_visit_date;
end;
$$;

create or replace function public.increment_post_hit(
  p_visit_date date,
  p_board text,
  p_post_id text,
  p_ip text,
  p_base_hit bigint default 0
) returns table(hit_count bigint, counted boolean)
language plpgsql
security definer
set search_path = public
as $$
declare
  inserted_count integer := 0;
begin
  insert into public.post_hit_visitors (visit_date, board, post_id, ip)
  values (p_visit_date, p_board, p_post_id, p_ip)
  on conflict do nothing;
  get diagnostics inserted_count = row_count;

  insert into public.post_hit_counts (board, post_id, hit_count, updated_at)
  values (p_board, p_post_id, greatest(0, p_base_hit) + inserted_count, now())
  on conflict (board, post_id) do update set
    hit_count = post_hit_counts.hit_count + inserted_count,
    updated_at = now();

  return query
  select c.hit_count, inserted_count = 1
  from public.post_hit_counts c
  where c.board = p_board and c.post_id = p_post_id;
end;
$$;

revoke all on function public.record_site_visit(date, text, text, text, text, text, text, text, text, text, text, text, text, text, text, text, text, text, text, text) from public, anon, authenticated;
grant execute on function public.record_site_visit(date, text, text, text, text, text, text, text, text, text, text, text, text, text, text, text, text, text, text, text) to service_role;
revoke all on function public.increment_post_hit(date, text, text, text, bigint) from public, anon, authenticated;
grant execute on function public.increment_post_hit(date, text, text, text, bigint) to service_role;

commit;
