"use server";

import { revalidatePath } from "next/cache";
import { redirect } from "next/navigation";
import { clearSessionCookie, requireAdmin, requireUser, setSessionCookie } from "@/lib/auth";
import { getSeoulDateKey } from "@/lib/data";
import { createSessionToken, hashPassword, hashSessionToken, isAdultByKoreanBirthDigits, normalizePhone, verifyPassword } from "@/lib/security";
import { getSupabaseAdmin } from "@/lib/supabase";

type ActionState = {
  ok?: boolean;
  error?: string;
};

function text(formData: FormData, key: string) {
  return String(formData.get(key) ?? "").trim();
}

function nullableText(formData: FormData, key: string) {
  const value = text(formData, key);
  return value || null;
}

async function uploadStaffImage(formData: FormData, fallbackUrl: string | null) {
  const file = formData.get("imageFile");
  if (!(file instanceof File) || file.size === 0) {
    return fallbackUrl;
  }

  if (!file.type.startsWith("image/")) {
    throw new Error("이미지 파일만 업로드할 수 있습니다.");
  }

  const extension = file.name.split(".").pop()?.toLowerCase() || "jpg";
  const fileName = `staff/${Date.now()}-${crypto.randomUUID()}.${extension}`;
  const supabase = getSupabaseAdmin();
  const { error } = await supabase.storage
    .from("staff-photos")
    .upload(fileName, file, {
      contentType: file.type,
      upsert: false
    });

  if (error) {
    throw error;
  }

  const { data } = supabase.storage.from("staff-photos").getPublicUrl(fileName);
  return data.publicUrl;
}

async function createSession(userId: string) {
  const token = createSessionToken();
  const expiresAt = new Date(Date.now() + 1000 * 60 * 60 * 24 * 14).toISOString();
  const supabase = getSupabaseAdmin();

  const { error } = await supabase.from("app_sessions").insert({
    user_id: userId,
    token_hash: hashSessionToken(token),
    expires_at: expiresAt
  });

  if (error) {
    throw error;
  }

  await setSessionCookie(token);
}

export async function signUpAction(_state: ActionState, formData: FormData): Promise<ActionState> {
  const loginId = text(formData, "loginId");
  const password = text(formData, "password");
  const name = text(formData, "name");
  const birthFirst6 = text(formData, "birthFirst6");
  const birthGenderDigit = text(formData, "birthGenderDigit");
  const phone = normalizePhone(text(formData, "phone"));

  if (!loginId || !password || !name || !birthFirst6 || !birthGenderDigit || !phone) {
    return { error: "필수 정보를 모두 입력해주세요." };
  }

  if (password.length < 8) {
    return { error: "비밀번호는 8자 이상으로 설정해주세요." };
  }

  const supabase = getSupabaseAdmin();
  const { data: blocked } = await supabase
    .from("blacklist_entries")
    .select("id")
    .or(`login_id.eq.${loginId},phone.eq.${phone}`)
    .limit(1)
    .maybeSingle();

  if (blocked) {
    return { error: "가입 또는 로그인이 제한된 정보입니다." };
  }

  const { error } = await supabase.from("app_users").insert({
    login_id: loginId,
    password_hash: await hashPassword(password),
    name,
    birth_first6: birthFirst6,
    birth_gender_digit: birthGenderDigit,
    phone
  });

  if (error) {
    return { error: "이미 사용 중인 아이디 또는 휴대폰번호입니다." };
  }

  redirect("/login");
}

export async function loginAction(_state: ActionState, formData: FormData): Promise<ActionState> {
  const loginId = text(formData, "loginId");
  const password = text(formData, "password");
  const supabase = getSupabaseAdmin();

  const { data: user } = await supabase
    .from("app_users")
    .select("*")
    .eq("login_id", loginId)
    .maybeSingle();

  if (!user) {
    return { error: "해당 아이디의 계정이 없습니다. Supabase에 admin seed SQL이 실행됐는지 확인해주세요." };
  }

  if (user.is_blacklisted) {
    return { error: "블랙리스트 처리된 계정입니다." };
  }

  const { data: blocked } = await supabase
    .from("blacklist_entries")
    .select("id")
    .or(`login_id.eq.${loginId},phone.eq.${user.phone}`)
    .limit(1)
    .maybeSingle();

  if (blocked || !(await verifyPassword(password, user.password_hash))) {
    return { error: "아이디 또는 비밀번호를 확인해주세요." };
  }

  await createSession(user.id);
  redirect("/xe/main");
}

export async function logoutAction() {
  await clearSessionCookie();
  redirect("/login");
}

export async function adultVerificationAction(_state: ActionState, formData: FormData): Promise<ActionState> {
  const user = await requireUser();
  const name = text(formData, "name");
  const birthFirst6 = text(formData, "birthFirst6");
  const birthGenderDigit = text(formData, "birthGenderDigit");
  const phone = normalizePhone(text(formData, "phone"));
  const carrier = text(formData, "carrier");
  const consent = formData.get("consent") === "on";

  if (!name || !birthFirst6 || !birthGenderDigit || !phone || !carrier || !consent) {
    return { error: "성인인증 정보를 모두 입력하고 동의해주세요." };
  }

  if (!isAdultByKoreanBirthDigits(birthFirst6, birthGenderDigit)) {
    return { error: "성인 확인 대상이 아닙니다." };
  }

  const supabase = getSupabaseAdmin();
  const { error } = await supabase.from("adult_verifications").insert({
    user_id: user.id,
    name,
    phone,
    birth_first6: birthFirst6,
    birth_gender_digit: birthGenderDigit,
    carrier,
    status: "self_declared"
  });

  if (error) {
    return { error: "성인인증 정보를 저장하지 못했습니다." };
  }

  redirect("/xe/main");
}

export async function createPostAction(_state: ActionState, formData: FormData): Promise<ActionState> {
  const user = await requireUser();
  const board = text(formData, "board");
  const title = text(formData, "title");
  const content = text(formData, "content");
  const visibility = text(formData, "visibility") === "private" ? "private" : "public";
  const postPassword = text(formData, "postPassword");

  if (!["review", "qna"].includes(board)) {
    return { error: "작성할 수 없는 게시판입니다." };
  }

  if (!title || !content) {
    return { error: "제목과 내용을 입력해주세요." };
  }

  if (board === "qna" && visibility === "private" && postPassword.length < 4) {
    return { error: "비공개 Q&A 비밀번호는 4자 이상으로 입력해주세요." };
  }

  const supabase = getSupabaseAdmin();
  const { error } = await supabase.from("board_posts").insert({
    board,
    title,
    content,
    author_id: user.id,
    author_name: user.name,
    visibility,
    password_hash: postPassword ? await hashPassword(postPassword) : null
  });

  if (error) {
    return { error: "게시글을 저장하지 못했습니다." };
  }

  revalidatePath(`/xe/${board === "review" ? "epilogue" : "kissqna"}`);
  return { ok: true };
}

export async function adminCreatePostAction(_state: ActionState, formData: FormData): Promise<ActionState> {
  const admin = await requireAdmin();
  const board = text(formData, "board");
  const title = text(formData, "title");
  const content = text(formData, "content");

  if (!["notice", "review", "qna"].includes(board) || !title || !content) {
    return { error: "게시판, 제목, 내용을 확인해주세요." };
  }

  const supabase = getSupabaseAdmin();
  const { error } = await supabase.from("board_posts").insert({
    board,
    title,
    content,
    author_id: admin.id,
    author_name: admin.name,
    visibility: "public"
  });

  if (error) {
    return { error: "게시글을 저장하지 못했습니다." };
  }

  revalidatePath("/admin");
  revalidatePath("/xe/notice");
  return { ok: true };
}

export async function adminAnswerQnaAction(formData: FormData) {
  const admin = await requireAdmin();
  const postId = text(formData, "postId");
  const answer = text(formData, "answer");
  const supabase = getSupabaseAdmin();

  await supabase
    .from("board_posts")
    .update({
      answer,
      answered_by: admin.id,
      answered_at: new Date().toISOString(),
      updated_at: new Date().toISOString()
    })
    .eq("id", postId)
    .eq("board", "qna");

  revalidatePath("/admin");
  revalidatePath("/xe/kissqna");
  redirect("/admin?status=saved");
}

export async function adminDeletePostAction(formData: FormData) {
  await requireAdmin();
  const postId = text(formData, "postId");
  const supabase = getSupabaseAdmin();
  await supabase.from("board_posts").delete().eq("id", postId);
  revalidatePath("/admin");
  revalidatePath("/xe/notice");
  revalidatePath("/xe/epilogue");
  revalidatePath("/xe/kissqna");
  redirect("/admin?status=deleted");
}

export async function adminUpdatePostAction(_state: ActionState, formData: FormData): Promise<ActionState> {
  await requireAdmin();
  const postId = text(formData, "postId");
  const title = text(formData, "title");
  const content = text(formData, "content");

  if (!postId || !title || !content) {
    return { error: "제목과 내용을 입력해주세요." };
  }

  const supabase = getSupabaseAdmin();
  const { error } = await supabase
    .from("board_posts")
    .update({
      title,
      content,
      updated_at: new Date().toISOString()
    })
    .eq("id", postId);

  if (error) {
    return { error: "게시글을 수정하지 못했습니다." };
  }

  revalidatePath("/admin");
  revalidatePath("/xe/notice");
  revalidatePath("/xe/epilogue");
  revalidatePath("/xe/kissqna");
  return { ok: true };
}

export async function adminUpsertStaffAction(_state: ActionState, formData: FormData): Promise<ActionState> {
  await requireAdmin();
  const id = text(formData, "id");
  let imageUrl: string | null = nullableText(formData, "existingImageUrl");

  try {
    imageUrl = await uploadStaffImage(formData, imageUrl);
  } catch {
    return { error: "이미지 업로드에 실패했습니다. Storage 버킷 staff-photos를 확인해주세요." };
  }

  const payload = {
    nickname: text(formData, "nickname"),
    image_url: imageUrl,
    height_cm: Number(text(formData, "heightCm")) || null,
    weight_kg: Number(text(formData, "weightKg")) || null,
    age: Number(text(formData, "age")) || null,
    blood_type: text(formData, "bloodType") || null,
    mbti: text(formData, "mbti") || null,
    style: text(formData, "style") || null,
    hobby: text(formData, "hobby") || null,
    specialty: text(formData, "specialty") || null,
    working_area: text(formData, "workingArea") || null,
    intro: text(formData, "intro") || null,
    is_active: formData.get("isActive") === "on"
  };

  if (!payload.nickname) {
    return { error: "닉네임은 필수입니다." };
  }

  const supabase = getSupabaseAdmin();
  const { error } = id
    ? await supabase.from("staff_profiles").update(payload).eq("id", id)
    : await supabase.from("staff_profiles").insert(payload);

  if (error) {
    return { error: "프로필을 저장하지 못했습니다." };
  }

  revalidatePath("/admin");
  revalidatePath("/xe/schedule");
  return { ok: true };
}

export async function adminToggleAttendanceAction(formData: FormData) {
  await requireAdmin();
  const staffId = text(formData, "staffId");
  const isVisible = formData.get("isVisible") === "on";
  const startsAt = text(formData, "startsAt") || null;
  const endsAt = text(formData, "endsAt") || null;
  const note = text(formData, "note") || null;
  const supabase = getSupabaseAdmin();

  await supabase.from("attendance_entries").upsert({
    staff_id: staffId,
    work_date: getSeoulDateKey(),
    starts_at: startsAt,
    ends_at: endsAt,
    is_visible: isVisible,
    note
  }, {
    onConflict: "staff_id,work_date"
  });

  revalidatePath("/admin");
  revalidatePath("/xe/schedule");
  redirect("/admin?status=saved");
}

export async function adminBlacklistAction(_state: ActionState, formData: FormData): Promise<ActionState> {
  const admin = await requireAdmin();
  const loginId = text(formData, "loginId") || null;
  const phone = normalizePhone(text(formData, "phone")) || null;
  const reason = text(formData, "reason") || null;

  if (!loginId && !phone) {
    return { error: "아이디 또는 휴대폰번호를 입력해주세요." };
  }

  const supabase = getSupabaseAdmin();
  await supabase.from("blacklist_entries").insert({
    login_id: loginId,
    phone,
    reason,
    created_by: admin.id
  });

  if (loginId || phone) {
    let update = supabase.from("app_users").update({ is_blacklisted: true });
    if (loginId && phone) {
      update = update.or(`login_id.eq.${loginId},phone.eq.${phone}`);
    } else if (loginId) {
      update = update.eq("login_id", loginId);
    } else if (phone) {
      update = update.eq("phone", phone);
    }
    await update;
  }

  revalidatePath("/admin");
  return { ok: true };
}

export async function unlockPrivateQnaAction(_state: ActionState & { content?: string; answer?: string | null }, formData: FormData) {
  const user = await requireUser();
  const postId = text(formData, "postId");
  const password = text(formData, "password");
  const supabase = getSupabaseAdmin();
  const { data: post } = await supabase
    .from("board_posts")
    .select("content, answer, password_hash, author_id, visibility")
    .eq("id", postId)
    .eq("board", "qna")
    .maybeSingle();

  if (!post) {
    return { error: "게시글을 찾을 수 없습니다." };
  }

  if (post.author_id === user.id || user.role === "admin") {
    return { ok: true, content: post.content, answer: post.answer };
  }

  if (post.visibility !== "private") {
    return { ok: true, content: post.content, answer: post.answer };
  }

  if (!post.password_hash || !(await verifyPassword(password, post.password_hash))) {
    return { error: "비밀번호를 확인해주세요." };
  }

  return { ok: true, content: post.content, answer: post.answer };
}
