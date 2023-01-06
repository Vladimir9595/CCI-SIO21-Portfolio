@extends('layouts.jobs')
{{-- @extends('layouts.port') --}}

@section('title')
Mes projets
@endsection
    @section('content')
    @section('titreH1')
    Projets
    @endsection
    @section('roue')
    <img src={{ asset('Images/roue_dentee.png') }} alt="Roue dentée" class="roue"/>
    @endsection
    <nav id="menu3">
        <ul>
            <li class="btn-link2">
                <a href="{{route("accueil")}}" class="lx"><strong>Accueil</strong></a>
            </li>
            <li class="btn-link2">
                <a href="{{route("articles")}}" class="cx"><strong>Veille Technologique</strong></a>
            </li>
            <li class="btn-link2">
                <a href="{{route("projects")}}" class="dx"><strong>Projets</strong></a>
            </li>
        </ul>
    </nav>


    <div class="contain-all-articles">

        @foreach ($projects as $project)
            <div class="contain-article" data-id="{{$project->id}}">

                <div class="title">{{$project->title}}</div>
                <div class="image"><img src="{{$project->image}}" alt="{{$project->title}}"></div>
                <div class="content">{{$project->content}}</div>
                <div class="link"><a href="{{$project->link}}" target="_blank">Voir plus...</a></div>

            </div>
        @endforeach
    </div>

@endsection