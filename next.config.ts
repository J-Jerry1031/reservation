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
      },
      {
        source: "/xemain",
        destination: "/xe/main",
        permanent: false
      }
    ];
  },
};

export default nextConfig;
