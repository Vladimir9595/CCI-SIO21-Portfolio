@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/stylePort.css') }}">
<link rel="stylesheet" href="{{ asset('css/styleLegal.css') }}">
<link rel="stylesheet" href="{{ asset('css/styleArticle.css') }}">
@endsection
@section('title')
Veille technologique
@endsection
    @section('content')
    <header>
      <a href="/"
        ><img src={{ asset('Images/logo-1.jpg') }} alt="logo" class="logo"
      /></a>
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

    <footer>
      <h4><strong>CONTACT ME</strong></h4>
      <div class="logos">
        <a href="https://www.facebook.com/vladimir.sacchetto/" target="_blank"
          ><i class="fab fa-facebook"></i
        ></a>
        <a href="https://www.instagram.com/vlado5991/" target="_blank"
          ><i class="fab fa-instagram"></i
        ></a>
        <a
          href="https://www.linkedin.com/in/vladimir-sacchetto-16642b116/?locale=fr_FR"
          target="_blank"
          ><i class="fab fa-linkedin"></i
        ></a>
        <i class="fab fa-facebook-messenger"></i>
      </div>
      <div id="copyright">
        <span>
          © Vladimir Sacchetto; 2022 |
          <a href="/">Accueil -</a>
          <a href="/mentions-légales">Mentions Légales</a>
        </span>
      </div>
    </footer>

    @endsection
