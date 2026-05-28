import type { NextConfig } from "next";

const nextConfig: NextConfig = {
  async redirects() {
    return [
      {
        source: "/index.php",
        destination: "/",
        permanent: false
      },
      {
        source: "/xe",
        destination: "/xe/main",
        permanent: false
      },
      {
        source: "/xe/index.php",
        destination: "/xe/main",
        permanent: false
      }
    ];
  },
  async rewrites() {
    return [
      {
        source: "/xe/:slug/:rest*",
        destination: "/xe/:slug"
      }
    ];
  }
};

export default nextConfig;
