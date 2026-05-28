create extension if not exists pgcrypto;

insert into storage.buckets (id, name, public)
values ('staff-photos', 'staff-photos', true)
on conflict (id) do update set public = true;

create table if not exists app_users (
  id uuid primary key default gen_random_uuid(),
  login_id text not null unique,
  password_hash text not null,
  name text not null,
  birth_first6 text not null check (char_length(birth_first6) = 6),
  birth_gender_digit text not null check (birth_gender_digit in ('1','2','3','4','5','6','7','8')),
  phone text not null unique,
  role text not null default 'member' check (role in ('member','admin')),
  is_blacklisted boolean not null default false,
  created_at timestamptz not null default now(),
  updated_at timestamptz not null default now()
);

create table if not exists adult_verifications (
  id uuid primary key default gen_random_uuid(),
  user_id uuid not null references app_users(id) on delete cascade,
  name text not null,
  phone text not null,
  birth_first6 text not null,
  birth_gender_digit text not null,
  carrier text,
  status text not null default 'self_declared' check (status in ('self_declared','carrier_pending','carrier_verified','rejected')),
  consented_at timestamptz not null default now(),
  created_at timestamptz not null default now()
);

create table if not exists app_sessions (
  id uuid primary key default gen_random_uuid(),
  user_id uuid not null references app_users(id) on delete cascade,
  token_hash text not null unique,
  expires_at timestamptz not null,
  created_at timestamptz not null default now()
);

create table if not exists blacklist_entries (
  id uuid primary key default gen_random_uuid(),
  login_id text,
  phone text,
  reason text,
  created_by uuid references app_users(id) on delete set null,
  created_at timestamptz not null default now(),
  check (login_id is not null or phone is not null)
);

create table if not exists board_posts (
  id uuid primary key default gen_random_uuid(),
  board text not null check (board in ('notice','review','qna')),
  title text not null,
  content text not null,
  author_id uuid references app_users(id) on delete set null,
  author_name text not null,
  visibility text not null default 'public' check (visibility in ('public','private')),
  password_hash text,
  view_count integer not null default 0,
  recommendation_count integer not null default 0,
  answer text,
  answered_by uuid references app_users(id) on delete set null,
  answered_at timestamptz,
  created_at timestamptz not null default now(),
  updated_at timestamptz not null default now()
);

alter table board_posts
add column if not exists view_count integer not null default 0;

create table if not exists staff_profiles (
  id uuid primary key default gen_random_uuid(),
  nickname text not null,
  image_url text,
  height_cm integer,
  weight_kg integer,
  age integer,
  blood_type text,
  mbti text,
  style text,
  hobby text,
  specialty text,
  working_area text,
  intro text,
  is_active boolean not null default true,
  created_at timestamptz not null default now(),
  updated_at timestamptz not null default now()
);

create table if not exists attendance_entries (
  id uuid primary key default gen_random_uuid(),
  staff_id uuid not null references staff_profiles(id) on delete cascade,
  work_date date not null,
  starts_at time,
  ends_at time,
  is_visible boolean not null default true,
  note text,
  created_at timestamptz not null default now(),
  updated_at timestamptz not null default now(),
  unique (staff_id, work_date)
);

alter table app_users enable row level security;
alter table adult_verifications enable row level security;
alter table app_sessions enable row level security;
alter table blacklist_entries enable row level security;
alter table board_posts enable row level security;
alter table staff_profiles enable row level security;
alter table attendance_entries enable row level security;

insert into app_users (
  login_id,
  password_hash,
  name,
  birth_first6,
  birth_gender_digit,
  phone,
  role
) values (
  'admin',
  '$2b$12$exvJkt25nQYhvjzmbA9u9.B7f8hn1P0hC7N0wDezrZxhR.cP7r80m',
  '관리자',
  '900101',
  '1',
  '01000000000',
  'admin'
) on conflict (login_id) do update set
  password_hash = excluded.password_hash,
  name = excluded.name,
  birth_first6 = excluded.birth_first6,
  birth_gender_digit = excluded.birth_gender_digit,
  phone = excluded.phone,
  role = 'admin',
  is_blacklisted = false,
  updated_at = now();

insert into adult_verifications (
  user_id,
  name,
  phone,
  birth_first6,
  birth_gender_digit,
  carrier,
  status
)
select
  id,
  name,
  phone,
  birth_first6,
  birth_gender_digit,
  'ADMIN',
  'self_declared'
from app_users
where login_id = 'admin'
  and not exists (
    select 1
    from adult_verifications
    where adult_verifications.user_id = app_users.id
      and adult_verifications.status in ('self_declared', 'carrier_verified')
  );

insert into staff_profiles (
  nickname,
  image_url,
  height_cm,
  weight_kg,
  age,
  blood_type,
  mbti,
  style,
  hobby,
  specialty,
  working_area,
  intro
) values
  ('하린', '/pop/girlsgeneration.jpg', 165, 48, 24, 'A', 'ENFP', '밝은 분위기', '필라테스', '상담 응대', '구로', '차분하고 친근한 분위기의 프로필입니다.'),
  ('서아', '/xe/files/faceOff/037/178/images/topmanagerphoto.jpg', 168, 50, 25, 'O', 'ISFJ', '단정한 이미지', '영화 감상', '예약 응대', '신도림', '깔끔한 응대와 안정적인 일정 관리가 장점입니다.')
on conflict do nothing;

with sample_staff as (
  insert into staff_profiles (
    nickname,
    image_url,
    height_cm,
    weight_kg,
    age,
    blood_type,
    mbti,
    style,
    hobby,
    specialty,
    working_area,
    intro,
    is_active
  ) values (
    '유나',
    '/pop/girlsgeneration.jpg',
    166,
    49,
    24,
    'B',
    'ENFJ',
    '밝고 차분한 이미지',
    '요가',
    '고객 응대',
    '구로',
    '테스트 노출용 샘플 프로필입니다.',
    true
  )
  on conflict do nothing
  returning id
),
target_staff as (
  select id from sample_staff
  union all
  select id from staff_profiles where nickname = '유나'
  limit 1
)
insert into attendance_entries (
  staff_id,
  work_date,
  starts_at,
  ends_at,
  is_visible,
  note
)
select
  id,
  ((now() at time zone 'Asia/Seoul')::date),
  '11:00',
  '20:00',
  true,
  '샘플 출근 프로필'
from target_staff
on conflict (staff_id, work_date) do update set
  starts_at = excluded.starts_at,
  ends_at = excluded.ends_at,
  is_visible = true,
  note = excluded.note,
  updated_at = now();

insert into board_posts (
  board,
  title,
  content,
  author_id,
  author_name,
  visibility
)
select
  board,
  '테스트 중입니다',
  '테스트 중입니다',
  (select id from app_users where login_id = 'admin'),
  '관리자',
  'public'
from (values ('notice'), ('review'), ('qna')) as boards(board)
where not exists (
  select 1
  from board_posts
  where board_posts.board = boards.board
    and board_posts.title = '테스트 중입니다'
);
