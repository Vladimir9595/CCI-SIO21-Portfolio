import laravel from "laravel-vite-plugin";
import { defineConfig } from "vite";

export default defineConfig({
    plugins: [
        laravel([
            "resources/js/app.js",
            "resources/scss/app.scss",
            "resources/scss/errors.scss",
            "resources/scss/styleAdmin.scss",
            "resources/scss/styleJobs.scss",
            "resources/scss/stylePort.scss",
        ]),
    ],
});
