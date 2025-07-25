import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import path from "path";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.scss",
                "resources/js/custom/store.js",
                "resources/js/plugins/jquery-jvectormap-2.0.5.min.js",
                "resources/js/plugins/jquery-jvectormap-world-mill-en.js",
                "resources/js/custom/chart-active.js",
                "resources/js/main.js",
                "resources/js/app.js",
                "resources/js/helpers/select2.js",
                "resources/css/website.scss",
                'resources/js/website.js'
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            "@": path.resolve(__dirname, "resources/js"), // Define @ as resources/js
        },
    },
});
