@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/styleAdmin.css') }}">
@endsection
@section('title')
Modification des articles
@endsection
@section('content')


@if($action === 'new')
    <header class="bloc">
        <h1>Création d'un article</h1>

        <form action="/admin" method="POST" >
            @csrf
            <button type="submit" class="deconnexion" name="pseudo" name="password">Page d'admin</button>
        </form>
        <a href="/login" class="deconnexion">Se deconnecter</a>
    </header>

    <form action="/admin/new" method="post" class="w-50 mx-auto">
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
    @if($message)
        <p class="textaction"> L'action a bien été réalisée</p>
    @endif

@elseif($action === 'edit')
    <header class="bloc">
        <h1>Modification d'un article</h1>
        <form action="/admin" method="POST" >
            @csrf
            <button type="submit" class="deconnexion" name="pseudo" name="password">Page d'admin</button>
        </form>
        <a href="/login" class="deconnexion">Se deconnecter</a>
    </header>

    <form action="/admin/edit/{{$article->id}}" method="post" class="w-50 mx-auto">
        @csrf
        <div class="conteneur-pseudo form-floating mb-3">
            <label for="title" class="lab">Titre</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Titre" value="{{$article->title}}" >

        </div>
        <div class="conteneur-pseudo form-floating mb-3">
            <label for="image" class="lab">URL Image</label>
            <input type="text" class="form-control" name="image" id="image" placeholder="URL Image" value="{{$article->image}}">

        </div>
        <div class="conteneur-pseudo form-floating mb-3">
            <label for="content" class="lab">Contenu</label>
            <input type="text" class="form-control" name="content" id="content" placeholder="Contenu" value="{{$article->content}}">

        </div>
        <div class="conteneur-pseudo form-floating mb-3">
            <label for="link" class="lab">Lien</label>
            <input type="text" class="form-control" name="link" id="link" placeholder="Lien" value="{{$article->link}}">

        </div>
        <button class="btn btn-primary mt-5 d-block mx-auto" type="submit">Modifier</button>
        </form>
        @if($message)
            <p class="textaction"> L'action a bien été réalisée</p>
        @endif

@elseif($action === 'delete')
    <header class="bloc">
        <h1>Suppression d'un article</h1>
        <form action="/admin" method="POST" >
            @csrf
            <button type="submit" class="deconnexion" name="pseudo" name="password">Page d'admin</button>
        </form>
        <a href="/login" class="deconnexion">Se deconnecter</a>
    </header>
    <p class="textaction">L'article a bien été supprimé</p>
@endif
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