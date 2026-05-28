with updated_staff as (
  update staff_profiles
  set
    image_url = '/staff/serin-sample.png',
    height_cm = 166,
    weight_kg = 49,
    age = 24,
    blood_type = 'B',
    mbti = 'ENFJ',
    style = '차분하고 여성스러운 분위기',
    hobby = '필라테스',
    specialty = '섬세한 응대',
    working_area = '구로',
    intro = '부드러운 인상과 안정적인 응대가 돋보이는 샘플 프로필입니다.',
    is_active = true,
    updated_at = now()
  where nickname = '서린'
  returning id
),
sample_staff as (
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
  )
  select
    '서린',
    '/staff/serin-sample.png',
    166,
    49,
    24,
    'B',
    'ENFJ',
    '차분하고 여성스러운 분위기',
    '필라테스',
    '섬세한 응대',
    '구로',
    '부드러운 인상과 안정적인 응대가 돋보이는 샘플 프로필입니다.',
    true
  where not exists (select 1 from updated_staff)
  returning id
),
target_staff as (
  select id from updated_staff
  union all
  select id from sample_staff
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
