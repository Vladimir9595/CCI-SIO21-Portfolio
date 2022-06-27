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
    <link rel="shortcut icon" type="image/png" href={{ asset('Images/Favicon.png') }} />

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
