@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Movies:</h1>

    <div class="card">
        @foreach ($movies as $movie)
        <div class="movie">
        <h2>{{ $movie -> title }} </h2>
        <p>Titolo originale: <br>{{ $movie -> original_title }}</p>
        <p>Nazionalità: <br>{{ $movie -> nationality }}</p>
        <p>Data d'uscita: <br>{{ $movie -> date }}</p>
        <p>Voto: <br>{{ $movie -> vote }}</p>
        </div>
        @endforeach
        </div>
@endsection
