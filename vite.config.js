import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue";


export default defineConfig({
    plugins: [
        vue(),
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
    ],
    server: {
        host: '0.0.0.0', // Listen on all interfaces
        port: 5176,
        strictPort: true,
        cors: {
            origin: ['http://194.49.105.216:8000', 'http://192.168.0.22:8000', 'http://localhost:8000'],
            credentials: true
        },
        hmr: {
            host: 'localhost',
            port: 5176
        }
    },
    resolve: {
        alias: {
            vue: "vue/dist/vue.esm-bundler.js",
        },
    },
});
