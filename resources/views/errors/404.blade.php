@extends('layouts.app')
@section('css')
@vite('resources/scss/stylePort.scss')
@vite('resources/scss/errors.scss')
@endsection


@section('title')
Page Not Found
@endsection



<body class="antialiased">
@section('content')
@section('titreH1')
      <h1 id="menth1">Page Not Found</h1>
@endsection
    <nav id="menu3">
        <ul>
            <li id="veilletech2">
                <a href="/" class="lx"><strong>Accueil</strong></a>
            </li>
            <li id="veilletech2">
                <a href="/veille-technologique"><strong>Veille Technologique</strong></a>
            </li>
            <li id="veilletech2">
                <a href="/projets" class="dx"><strong>Projets</strong></a>
            </li>
        </ul>
    </nav>

        <div class="relative flex items-top justify-center min-h-screen dark:bg-gray-900 sm:items-center sm:pt-0">
            <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
                <div class="items-center pt-8 sm:justify-start sm:pt-0">
                    <div class="number">
                        404                    </div>

                    <div class="ml-4 text-lg text-gray-500 uppercase tracking-wider">
                        We are sorry but this page does Not exists                    </div>
                </div>
            </div>
        </div>
@endsection
</body>