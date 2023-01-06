@extends('layouts.administration')

@section('title')
Page d'admin
@endsection
@section('content')
    <header class="bloc">
            <h1>Page d'administrateur</h1>
            <a href="{{route("auth.logout")}}" class="btn-admin">Se deconnecter</a>
    </header>
    @if (session('message'))
        <div class="text-msg">
            {{ session('message') }}
        </div>
    @endif
    <h2>Liste des articles</h2>
    <div class="button">
        <a href="{{route("article.create")}}" class="btn btn-primary mt-6 d-block-1 x-auto">Ajouter un nouvel article</a>
    </div>

    <table class="table table-bordered table-hover">
        <thead class="thead">
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Type</th>
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
                <td>Article</td>
                <td>{{substr($article->title, 0, 11)}} ...</td>
                <td>{{substr($article->image, 0, 11)}} ...</td>
                <td>{{substr($article->content, 0, 40)}} ...</td>
                <td>{{substr($article->link, 0, 11)}} ...</td>
                <td id="butt">
                   <a href="{{route("article.edit", ['article' => $article->id])}}" class="btn btn-primary mt-6 d-block-1 x-auto">Editer</a>
                    <form action="{{route("article.destroy", ['article' => $article->id])}}" method="POST" >
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-primary mt-6 d-block-1 x-auto">Supprimer</button>
                    </form>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h2>Liste des projets</h2>
    <div class="button">
       <a href="{{route("project.create")}}" class="btn btn-primary mt-6 d-block-1 x-auto">Ajouter un nouveau projet</a>
    </div>

    <table class="table table-bordered table-hover">
        <thead class="thead">
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Type</th>
            <th scope="col">Titre</th>
            <th scope="col">URL Image</th>
            <th scope="col">Contenu</th>
            <th scope="col">Lien</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody class="tbody">
            @foreach ($projects as $project)
                <tr>
                <th>{{$project->id}}</th>
                <td>Projet</td>
                <td>{{substr($project->title, 0, 11)}} ...</td>
                <td>{{substr($project->image, 0, 11)}} ...</td>
                <td>{{substr($project->content, 0, 40)}} ...</td>
                <td>{{substr($project->link, 0, 11)}} ...</td>
                <td id="butt">
                    <a href="{{route("project.edit", ['project' => $project->id])}}" class="btn btn-primary mt-6 d-block-1 x-auto">Editer</a>
                    <form action="{{route("project.destroy", ['project' => $project->id])}}" method="POST" >
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-primary mt-6 d-block-1 x-auto">Supprimer</button>
                    </form>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection