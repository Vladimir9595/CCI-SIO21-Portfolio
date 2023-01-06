@extends('layouts.administration')


@section('title')
Création d'un projet
@endsection
@section('content')
    <header class="bloc">
        <h1>Création d'un projet</h1>
        <a href="{{route("admin")}}" class="btn-admin">Page d'admin</a>
        <a href="{{route("auth.logout")}}" class="btn-admin">Se deconnecter</a>
    </header>

    {{-- @if($message)
        <p class="textaction_"> L'action a bien été réalisée</p>
    @endif --}}
    <form action="{{route("project.store")}}" method="post" class="w-50 mx-auto">
        @csrf
        <div class="conteneur-pseudo form-floating mb-3">
            <input type="text" class="form-control" name="title" id="title" placeholder="Titre">
            <label for="title"></label>
        </div>
        <div class="conteneur-pseudo form-floating mb-3">
            <input type="text" class="form-control" name="image" id="image" placeholder="URL Image">
            <label for="image"></label>
        </div>
        <div class="conteneur-pseudo form-floating mb-3">
            <textarea class="form-control-content" name="content" id="content" rows="5" cols="33" placeholder="Contenu"></textarea>
            <label for="content"></label>
        </div>
        <div class="conteneur-pseudo form-floating mb-3">
            <input type="text" class="form-control" name="link" id="link" placeholder="Lien">
            <label for="link"></label>
        </div>
        <button class="btn btn-primary mt-5 d-block mx-auto" type="submit">Créer</button>
    </form>
@endsection