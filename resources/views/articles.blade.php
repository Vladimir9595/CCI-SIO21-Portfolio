@extends('layouts.jobs')

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
        <div>
            <!-- start feedwind code --> <script  type="text/javascript" src="https://feed.mikle.com/js/fw-loader.js" preloader-text="Loading" data-fw-param="159989/"></script> <!-- end feedwind code -->
        </div>
        <div>
            <!-- start feedwind code --> <script  type="text/javascript" src="https://feed.mikle.com/js/fw-loader.js" preloader-text="Loading" data-fw-param="159988/"></script> <!-- end feedwind code -->
        </div>
        <div>
            <!-- start feedwind code --> <script type="text/javascript" src="https://feed.mikle.com/js/fw-loader.js" preloader-text="Loading" data-fw-param="159992/"></script> <!-- end feedwind code -->
        </div>
        <div>
            <!-- start feedwind code --> <script type="text/javascript" src="https://feed.mikle.com/js/fw-loader.js" preloader-text="Loading" data-fw-param="159993/"></script> <!-- end feedwind code -->
        </div>
        {{-- @foreach ($articles as $article) --}}
            {{-- <div class="contain-article" data-id="{{$article->id}}"> --}}
            {{--
            <div class="title">{{$article->title}}</div>
            <div class="image"><img src="{{$article->image}}" alt="{{$article->title}}"></div>
            <div class="content">{{$article->content}}</div>
            <div class="link"><a href="{{$article->link}}" target="_blank">Consulter l'article</a></div> --}}
        {{-- @endforeach --}}
    </div>
@endsection
