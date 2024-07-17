@extends('layouts.app')

@section('main-content')
    <h1 class="text-center">
        Movie list
    </h1>

    <section class="p-5 my-section-movie-list">
        <ul class="d-flex flex-wrap justify-content-center">
            @foreach ($movies as $movie)
                <li class="m-1">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <p class="card-text">Lingua originale : {{ $movie->nationality }}</p>
                            <p class="card-text">Data uscita : {{ $movie->date }}</p>
                            <p class="card-text">Voto : {{ $movie->vote }}</p>
                        </div>
                    </div>
                </li>
            @endforeach
    </section>




    </ul>
@endsection
