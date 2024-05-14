<style>
    .card {
        display: flex;
        align-items: center;
    }
</style>
@extends('layout/layout')
@section('content')
<div class="container">
    <div class="row">
        @foreach ($movies as $movie)
        <div class="col mt-4">
            <div class="card">
                <img src="{{ $movie->coverUrl }}" width="150px" height="200px" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }}</h5>
                    <p class="card-text">{{ $movie->description }}</p>
                    <p>Jumlah Viewer : {{ $movie->viewer }}</p>
                    <p><a href="{{ $movie->trailerUrl }}" style="text-decoration: none; color: gray">Link</a></p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
