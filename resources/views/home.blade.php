@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Movies</h1>
        <div class="row row-cols-1 row-cols-md-3">
            @foreach ($movies as $movie)
                <div class="col">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <h6 class="card-subtitle mb-2">{{ $movie->original_title }}</h6>
                            <p class="card-text">{{ $movie->nationality }}</p>
                            <p class="card-text">{{ $movie->date }}</p>
                            <p class="card-text">{{ $movie->vote }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endsection
