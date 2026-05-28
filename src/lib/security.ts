import { createHash, randomBytes } from "crypto";
import bcrypt from "bcryptjs";

export function hashSessionToken(token: string) {
  return createHash("sha256").update(token).digest("hex");
}

export function createSessionToken() {
  return randomBytes(32).toString("base64url");
}

export async function hashPassword(password: string) {
  return bcrypt.hash(password, 12);
}

export async function verifyPassword(password: string, hash: string) {
  return bcrypt.compare(password, hash);
}

export function normalizePhone(phone: string) {
  return phone.replace(/[^\d]/g, "");
}

export function isAdultByKoreanBirthDigits(first6: string, genderDigit: string) {
  if (!/^\d{6}$/.test(first6) || !/^[1-8]$/.test(genderDigit)) {
    return false;
  }

  const yy = Number(first6.slice(0, 2));
  const mm = Number(first6.slice(2, 4));
  const dd = Number(first6.slice(4, 6));
  const century = ["1", "2", "5", "6"].includes(genderDigit) ? 1900 : 2000;
  const birthDate = new Date(Date.UTC(century + yy, mm - 1, dd));

  if (
    birthDate.getUTCFullYear() !== century + yy ||
    birthDate.getUTCMonth() !== mm - 1 ||
    birthDate.getUTCDate() !== dd
  ) {
    return false;
  }

  const now = new Date();
  const age = now.getUTCFullYear() - birthDate.getUTCFullYear();
  const hadBirthday =
    now.getUTCMonth() > birthDate.getUTCMonth() ||
    (now.getUTCMonth() === birthDate.getUTCMonth() && now.getUTCDate() >= birthDate.getUTCDate());

  return age > 19 || (age === 19 && hadBirthday);
}
