"use client";

import { useEffect } from "react";

export function StatusAlert({ status }: { status?: string }) {
  useEffect(() => {
    if (status === "saved") {
      window.alert("저장되었습니다.");
    }
    if (status === "deleted") {
      window.alert("삭제되었습니다.");
    }
  }, [status]);

  return null;
}
