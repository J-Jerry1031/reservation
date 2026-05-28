create extension if not exists pgcrypto;

insert into app_users (
  login_id,
  password_hash,
  name,
  birth_first6,
  birth_gender_digit,
  phone,
  role,
  is_blacklisted
) values (
  'admin',
  '$2b$12$exvJkt25nQYhvjzmbA9u9.B7f8hn1P0hC7N0wDezrZxhR.cP7r80m',
  '관리자',
  '900101',
  '1',
  '01000000000',
  'admin',
  false
) on conflict (login_id) do update set
  password_hash = excluded.password_hash,
  name = excluded.name,
  birth_first6 = excluded.birth_first6,
  birth_gender_digit = excluded.birth_gender_digit,
  phone = excluded.phone,
  role = 'admin',
  is_blacklisted = false,
  updated_at = now();

delete from blacklist_entries
where login_id = 'admin'
   or phone = '01000000000';

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

select
  login_id,
  name,
  phone,
  role,
  is_blacklisted
from app_users
where login_id = 'admin';
