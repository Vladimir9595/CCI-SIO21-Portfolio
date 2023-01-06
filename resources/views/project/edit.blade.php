@extends('layouts.administration')

@section('title')
Modification du projet #{{$project->id}}
@endsection

@section('content')
    <header class="bloc">
        <h1>Modification d'un projet</h1>
        <a href="{{route("admin")}}" class="btn-admin">Page d'admin</a>
        <a href="{{route("auth.logout")}}" class="btn-admin">Se deconnecter</a>
    </header>
    <form action="{{route("project.update", ['project' => $project->id])}}" method="post" class="w-50 mx-auto">
        @csrf
        @method('PUT')
        <div class="conteneur-pseudo form-floating mb-3">
            <label for="title" class="lab">Titre</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Titre" value="{{$project->title}}">
        </div>
        <div class="conteneur-pseudo form-floating mb-3">
            <label for="image" class="lab">URL Image</label>
            <input type="text" class="form-control" name="image" id="image" placeholder="URL Image" value="{{$project->image}}">
        </div>
        <div class="conteneur-pseudo form-floating mb-3">
            <label for="content" class="lab">Contenu</label>
            <textarea class="form-control-content" name="content" id="content" rows="5" cols="33" placeholder="Contenu">{{$project->content}}</textarea>
        </div>
        <div class="conteneur-pseudo form-floating mb-3">
            <label for="link" class="lab">Lien</label>
            <input type="text" class="form-control" name="link" id="link" placeholder="Lien" value="{{$project->link}}">
        </div>
        <button class="btn btn-primary mt-5 d-block mx-auto" type="submit">Modifier</button>
    </form>
@endsection