@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/styleAdmin.css') }}">
@endsection
@section('title')
Page d'admin
@endsection
@section('content')
    <header class="bloc">
            <h1>Page d'administrateur</h1>
            <a href="/login" class="deconnexion">Se deconnecter</a>
    </header>

    <h2>Liste des articles</h2>
    <div class="button">
       <form action="/admin/new/" method="POST" >
            @csrf
            <button type="submit" class="btn btn-primary mt-6 d-block-1 x-auto">Ajouter un nouvel article</button>
        </form>
    </div>

    <table class="table table-bordered table-hover">
        <thead class="thead">
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Titre</th>
            <th scope="col">URL Image</th>
            <th scope="col">Contenu</th>
            <th scope="col">Lien</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody class="tbody">
            @foreach ($articles as $article)
                <tr>
                <th>{{$article->id}}</th>
                <td>{{substr($article->title, 0, 11)}} ...</td>
                <td>{{substr($article->image, 0, 11)}} ...</td>
                <td>{{substr($article->content, 0, 40)}} ...</td>
                <td>{{substr($article->link, 0, 11)}} ...</td>
                <td id="butt">
                    <form action="/admin/edit/{{$article->id}}" method="POST" >
                        @csrf
                        <button type="submit" class="btn btn-primary mt-6 d-block-1 x-auto">Editer</button>
                    </form>
                    <form action="/admin/delete/{{$article->id}}" method="POST" >
                        @csrf
                        <button type="submit" class="btn btn-primary mt-6 d-block-1 x-auto">Supprimer</button>
                    </form>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>

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