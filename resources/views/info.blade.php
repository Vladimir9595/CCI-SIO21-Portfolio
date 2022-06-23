@extends('layouts.app')

@section('content')

<h1>Les informations</h1>
@foreach ($infos as $info_)
<h2>{{ $info_ }}</h2>

<p>{{ $num }}</p>
@endforeach



@endsection