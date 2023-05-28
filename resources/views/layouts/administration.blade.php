<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no"
        />
        @vite('resources/scss/app.scss')
        @vite('resources/scss/styleAdmin.scss')

        <link rel="apple-touch-icon" sizes="57x57" href={{ asset('/images/favicon/apple-touch-icon.png') }}>
        <link rel="apple-touch-icon" sizes="180x180" href={{ asset('/images/favicon/apple-touch-icon.png') }}>
        <link rel="icon" type="image/png" sizes="32x32" href={{ asset('/images/favicon/favicon-32x32.png') }}>
        <link rel="icon" type="image/png" sizes="16x16" href={{ asset('/images/favicon/favicon-16x16.png') }}>
        <link rel="manifest" href={{ asset('/images/favicon/site.webmanifest') }}>
        <link rel="mask-icon" href={{ asset('/images/favicon/safari-pinned-tab.svg') }} color="#5bbad5">
        <link rel="shortcut icon" href={{ asset('/images/favicon/favicon.ico') }}>
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-config" content="/images/favicon/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
        <script
        src="https://kit.fontawesome.com/e051dd5741.js"
        crossorigin="anonymous"
        ></script>
        <title>@yield('title')</title>
    </head>
    <body>
        @yield('content')

        <footer>
            <h4><strong>CONTACT ME</strong></h4>
            <div class="logos">
                <a href="https://www.facebook.com/vladimir.sacchetto/" target="_blank"
                ><i class="fab fa-facebook"></i
                ></a>
                <a href="https://www.instagram.com/vlado5991/" target="_blank"
                ><i class="fab fa-instagram"></i
                ></a>
                <a
                href="https://www.linkedin.com/in/vladimir-sacchetto-16642b116/?locale=fr_FR"
                target="_blank"
                ><i class="fab fa-linkedin"></i
                ></a>
                <a
                href="https://github.com/Vladimir9595"
                target="_blank"
                ><i class="fab fa-github"></i></a>
            </div>
            <div id="copyright">
                <span>
                    © Vladimir Sacchetto; 2022 |
                    <a href="{{route("accueil")}}">Accueil -</a>
                    <a href="{{route("mentions")}}">Mentions Légales -</a>
                    <a href="{{route("articles")}}">Veille Technologique -</a>
                    <a href="{{route("projects")}}">Projets</a>
                </span>
            </div>
        </footer>
        @vite('resources/js/app.js')
    </body>
</html>
