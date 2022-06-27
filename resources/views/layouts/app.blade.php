<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no"
    />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('css')
    {{-- <link rel="shortcut icon" type="image/png" href={{ asset('Images/Favicon.png') }} /> --}}
    <link rel="apple-touch-icon" sizes="180x180" href={{ asset('/Images/Favicon/apple-touch-icon.png') }}>
    <link rel="icon" type="image/png" sizes="32x32" href={{ asset('/Images/Favicon/favicon-32x32.png') }}>
    <link rel="icon" type="image/png" sizes="16x16" href={{ asset('/Images/Favicon/favicon-16x16.png') }}>
    <link rel="manifest" href={{ asset('/Images/Favicon/site.webmanifest') }}>
    <link rel="mask-icon" href={{ asset('/Images/Favicon/safari-pinned-tab.svg') }} color="#5bbad5">
    <link rel="shortcut icon" href={{ asset('/Images/Favicon/favicon.ico') }}>
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="/Images/Favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <script
      src="https://kit.fontawesome.com/e051dd5741.js"
      crossorigin="anonymous"
    ></script>
    <title>@yield('title')</title>
  </head>
<body>
    {{-- @include('partials.navbar') --}}
    @yield('content')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
