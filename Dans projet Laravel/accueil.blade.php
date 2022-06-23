@extends('layouts.app')

@section('content')

<h1>Mon titre magique</h1>
    @foreach ($posts as $post)
        <h2>{{ $post }}</h2>

        <p>{{ $id_1 }}</p>
    @endforeach


@endsection