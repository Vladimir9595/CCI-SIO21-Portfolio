@extends('layouts.app')

@section('css')
@vite('resources/scss/styleAdmin.scss')
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
    @if (Illuminate\Support\Facades\Session::get('connected') === false)
    {{ Illuminate\Support\Facades\Session::remove('connected')}}
        <div class="notadmin">
            Vous n'êtes pas l'administrateur
        </div>
    @endif

    @endsection