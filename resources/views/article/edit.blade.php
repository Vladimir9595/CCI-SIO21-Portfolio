@extends('layouts.administration')

@section('title')
Modification de l'article #{{$article->id}}
@endsection

@section('content')
    <header class="bloc">
        <h1>Modification d'un article</h1>
        <a href="{{route("admin")}}" class="deconnexion">Page d'admin</a>
        <a href="{{route("auth.logout")}}" class="deconnexion">Se deconnecter</a>
    </header>
    <form action="{{route("article.update", ['article' => $article->id])}}" method="post" class="w-50 mx-auto">
        @csrf
        @method('PUT')
        <div class="conteneur-pseudo form-floating mb-3">
            <label for="title" class="lab">Titre</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Titre" value="{{$article->title}}">
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
@endsection
