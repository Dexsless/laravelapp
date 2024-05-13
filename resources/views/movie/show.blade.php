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
        <div class="col mt-4">
            <div class="card" style="width: 18 rem;">
                <img src="{{ $movie->coverUrl }}" width="150px" height="200px" alt="...">
                <div class="card-body" style="width: 18 rem;">
                    <h5 class="card-title">{{ $movie->title }}</h5>
                    <p class="card-text">{{ $movie->description }}</p>
                    <p>Jumlah Viewer : {{ $movie->viewer }}</p>
                    <p><a href="{{ $movie->trailerUrl }}" style="text-decoration: none; color: gray">Link</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
