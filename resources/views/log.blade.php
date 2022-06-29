@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/styleAdmin.css') }}">
@endsection
@section('title')
Login
@endsection
    @section('content')
    <header class="bloc">
            <h1>Page de connexion</h1>
    </header>

    <form action="/admin" method="post" class="w-50 mx-auto">
        @csrf 
       <div class="conteneur-pseudo form-floating mb-3">
            <input type="text" class="form-control" name="pseudo" id="pseudo" placeholder="Identifiant">
            <label for="pseudo"></label>
        </div>
        <div class="conteneur-password form-floating">
            <input type="password" class="form-control" name="password" id="password" placeholder="Mot de Passe">
            <label for="password"></label>
        </div>
        <button class="btn btn-primary mt-5 d-block mx-auto" type="submit">Submit</button>
    </form>

    <footer>
      <div id="copyright">
        <span>
          © Vladimir Sacchetto; 2022 |
          <a href="/">Accueil -</a>
          <a href="/mentions-légales">Mentions Légales -</a>
          <a href="/veille-technologique">Veille Technologique</a>
        </span>
      </div>
    </footer>

    @endsection