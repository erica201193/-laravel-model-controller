@extends('layouts.app')

@section('page_title', 'Home')

@section ('page_content')
    <div class="container">
        <h1 class="py-3 text-center fw-bold">Movies</h1>
        <div class="row row-cols-3">

            @foreach ($movies as $movie)
                <div class="col">
                    <div class="p-2 my-card my-2">
                        <div class="card-body p-3">
                            <div class="mb-4">
                                <h5 class="card-title">{{ $movie->title }}</h5>
                                <h6 class="text-muted">Titolo originale: {{ $movie->original_title }}</h6>
                            </div>
                            <p class="card-text">Nazione: {{ $movie->nationality }}</p>
                            <p class="card-text">Data produzione: {{ $movie->date }}</p>
                            <p class="card-text">Punteggio: {{ $movie->vote }} / 10</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection