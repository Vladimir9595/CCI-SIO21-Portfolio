<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no"
        />
        @vite('resources/scss/app.scss')
        @yield('css')

        <link rel="apple-touch-icon" sizes="57x57" href={{ asset('/Images/favicon/apple-touch-icon.png') }}>
        <link rel="apple-touch-icon" sizes="180x180" href={{ asset('/Images/favicon/apple-touch-icon.png') }}>
        <link rel="icon" type="image/png" sizes="32x32" href={{ asset('/Images/favicon/favicon-32x32.png') }}>
        <link rel="icon" type="image/png" sizes="16x16" href={{ asset('/Images/favicon/favicon-16x16.png') }}>
        <link rel="manifest" href={{ asset('/Images/favicon/site.webmanifest') }}>
        <link rel="mask-icon" href={{ asset('/Images/favicon/safari-pinned-tab.svg') }} color="#5bbad5">
        <link rel="shortcut icon" href={{ asset('/Images/favicon/favicon.ico') }}>
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-config" content="/Images/favicon/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">

        <script
        src="https://kit.fontawesome.com/e051dd5741.js"
        crossorigin="anonymous"
        ></script>
        <title>@yield('title')</title>
    </head>
    <body>
        <header>
            <a href="{{route("accueil")}}"><img  class="logo" src={{ asset('Images/Logos/logo-1.jpg') }} alt="logo"  /></a>
            <img class="imgID" src={{ asset('Images/photoID1.png') }} alt="Photo de Vladimir" />
            <a href="{{route("login")}}">@yield('roue')</a>
            <h1>@yield('titreH1')</h1>
            <h2 class="signature"><strong>Vladimir Sacchetto</strong></h2>
        </header>
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
                    © Vladimir Sacchetto; <?= date('Y') ?> |
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
