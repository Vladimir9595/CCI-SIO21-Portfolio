import laravel from "laravel-vite-plugin";
import { defineConfig } from "vite";

export default defineConfig({
    plugins: [
        laravel([
            "resources/js/app.js",
            "resources/scss/app.scss",
            "resources/scss/stylePort.scss",
            "resources/scss/styleArticle.scss",
            "resources/scss/styleAdmin.scss",
        ]),
    ],
});
