/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],
    theme: {
        extend: {
            colors: {
                black: "#202020",
                grey: {
                    darker: "#4e3239",
                    default: "#ae838f",
                },
                blue: "#2b4d75",
                pink: "#c3375d",
                white: "#fcfcfc",
            },
        },

        backgroundColor: (theme) => theme("colors"),
        textStyles: (theme) => ({
            h1: {
                fontSize: theme("fontSize.l"),
                fontWeight: theme("fontWeight.bold"),
                lineHeight: theme("lineHeight.h1"),
            },
            h2: {
                fontSize: theme("fontSize.m"),
                fontWeight: theme("fontWeight.medium"),
                lineHeight: theme("lineHeight.h2"),
            },
            h3: {
                fontSize: theme("fontSize.s"),
                fontWeight: theme("fontWeight.medium"),
                lineHeight: theme("lineHeight.h3"),
            },
            btn: {
                fontSize: theme("fontSize.s"),
                fontWeight: theme("fontWeight.regular"),
                lineHeight: theme("lineHeight.h3"),
            },
            base: {
                fontSize: theme("fontSize.base"),
                fontWeight: theme("fontWeight.regular"),
                lineHeight: theme("lineHeight.base"),
            },
            "base--small": {
                fontSize: theme("fontSize.xs"),
                fontWeight: theme("fontWeight.regular"),
                lineHeight: theme("lineHeight.base"),
            },
        }),
        fontFace: {
            bronx: [
                {
                    filename: "font/Bronx",
                },
            ],
            jet_brains: [
                {
                    filename: "font/JetBrainsMono-Regular.eot",
                },
                {
                    filename: "font/JetBrainsMono-Regular.ttf",
                },
            ],
            pt_sans: [
                {
                    filename: "font/PTS55F-webfont.eot",
                },
                {
                    filename: "font/PTS55F-webfont.ttf",
                },
                {
                    filename: "font/PTS55F-webfont.woff",
                },
            ],
            fontFamily: {
                sans: [
                    "pt_sans",
                    "system-ui",
                    "-apple-system",
                    "Trebuchet MS",
                    "sans-serif",
                ],
                bronx: [
                    "bronx",
                    "system-ui",
                    "-apple-system",
                    "Trebuche MS",
                    "sans-serif",
                ],
                jetb: [
                    "jet_brains",
                    "system-ui",
                    "-apple-system",
                    "Trebuche MS",
                    "sans-serif",
                ],
            },
            fontWeight: {
                thin: 100,
                light: 300,
                regular: 400,
                medium: 500,
                bold: 700,
                black: 900,
            },
            fontSize: {
                xxl: "2.1875rem", // 35px
                xl: "2.1875rem", // 30px
                l: "1.5625rem", // 25px
                m: "1.25rem", // 20px
                s: "1.125rem", // 18px
                xs: "0.875rem", // 14px
                base: "1rem", // 16px
            },
            lineHeight: {
                h1: "1.114285714",
                h2: "1.32",
                h3: "1.3",
                base: "1.5625",
            },
            zIndex: {
                header: 999,
            },
        },
    },
    plugins: [],
};
