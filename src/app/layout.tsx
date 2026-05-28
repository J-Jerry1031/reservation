import type { Metadata } from "next";
import "./globals.css";

export const metadata: Metadata = {
  title: {
    default: "KissGirls Archive",
    template: "%s | KissGirls Archive"
  },
  description: "Legacy XE/PHP site migrated into a Vercel-ready Next.js preview."
};

export default function RootLayout({
  children
}: Readonly<{
  children: React.ReactNode;
}>) {
  return (
    <html lang="ko">
      <body>{children}</body>
    </html>
  );
}
