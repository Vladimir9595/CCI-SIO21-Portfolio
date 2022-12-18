@extends('layouts.jobs')
{{-- @extends('layouts.port') --}}

@section('title')
Veille technologique
@endsection
    @section('content')
    <header>
      <a href="/"
        ><img src={{ asset('Images/logo-1.jpg') }} alt="logo" class="logo"
      /></a>
      <a href="/login"><img src={{ asset('Images/roue_dentee.png') }} alt="Roue dentée" class="roue"/></a>
      <h1>Articles</h1>
    </header>

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
