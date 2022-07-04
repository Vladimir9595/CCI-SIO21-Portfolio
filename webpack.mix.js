const mix = require("laravel-mix");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js("resources/js/app.js", "public/js")
    .sass("resources/scss/app.scss", "public/css/app.css")
    .sass("resources/scss/stylePort.scss", "public/css/")
    .sass("resources/scss/styleLegal.scss", "public/css/")
    .sass("resources/scss/styleArticle.scss", "public/css/")
    .sass("resources/scss/styleAdmin.scss", "public/css/");
