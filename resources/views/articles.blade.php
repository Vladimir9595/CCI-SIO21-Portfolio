@extends('layouts.jobs')
{{-- @extends('layouts.port') --}}

@section('title')
Veille technologique
@endsection
    @section('content')
    @section('titreH1')
    Articles
    @endsection
    @section('roue')
    <img src={{ asset('Images/roue_dentee.png') }} alt="Roue dentée" class="roue"/>
    @endsection
    <nav id="menu3">
        <ul>
            <li id="veilletech2">
                <a href="/"><strong>Accueil</strong></a>
                <a href="/veille-technologique"><strong>Veille Technologique</strong></a>
                <a href="/projets"><strong>Projets</strong></a>
            </li>
        </ul>
    </nav>


    <div class="contain-all-articles">

        @foreach ($articles as $article)
            <div class="contain-article" data-id="{{$article->id}}">

                <div class="title">{{$article->title}}</div>
                <div class="image"><img src="{{$article->image}}" alt="{{$article->title}}"></div>
                <div class="content">{{$article->content}}</div>
                <div class="link"><a href="{{$article->link}}" target="_blank">Consulter l'article</a></div>
            </div>
                {{-- {{substr($article->content, 0, 62)}} ... --}}
        @endforeach
    </div>

    @endsection
