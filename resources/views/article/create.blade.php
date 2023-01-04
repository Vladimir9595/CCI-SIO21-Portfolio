@extends('layouts.administration')


@section('title')
Création d'un article
@endsection
@section('content')
    <header class="bloc">
        <h1>Création d'un article</h1>
        <a href="{{route("admin")}}" class="deconnexion">Page d'admin</a>
        <a href="{{route("auth.logout")}}" class="deconnexion">Se deconnecter</a>
    </header>

    {{-- @if($message)
        <p class="textaction_"> L'action a bien été réalisée</p>
    @endif --}}
    <form action="{{route("article.store")}}" method="post" class="w-50 mx-auto">
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
            <input type="text" class="form-control" name="content" id="content" placeholder="Contenu">
            <label for="content"></label>
        </div>
        <div class="conteneur-pseudo form-floating mb-3">
            <input type="text" class="form-control" name="link" id="link" placeholder="Lien">
            <label for="link"></label>
        </div>
        <button class="btn btn-primary mt-5 d-block mx-auto" type="submit">Créer</button>
    </form>
@endsection