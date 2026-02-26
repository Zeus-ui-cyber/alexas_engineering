import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import tailwindcss from "@tailwindcss/vite";

export default defineConfig(({ command }) => {
  const ngrokHost = process.env.NGROK_HOST; // e.g. "proprofit-catrice-interruptible.ngrok-free.app"

  return {
    plugins: [
      laravel({
        input: ["resources/css/app.css", "resources/js/app.js"],
        refresh: [
          "resources/views/**",
          "routes/**",
          "app/**",
        ],
      }),
      tailwindcss(),
    ],

    server: {
      host: true,
      port: 5173,
      strictPort: true,

      watch: {
        ignored: ["**/storage/framework/views/**", "**/storage/**"],
      },

      // ✅ Only enable ngrok HMR when you provide NGROK_HOST
      hmr: ngrokHost
        ? {
            host: ngrokHost,
            protocol: "wss",
            clientPort: 443,
          }
        : true,
    },
  };
});