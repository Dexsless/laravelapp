{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Film</title>
    <style>
        body {
            color: rgb(255, 255, 255);
            background: linear-gradient(rgb(82, 88, 87),rgb(47, 47, 61),rgb(41, 34, 34));
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
    </style>
</head>
<body>

</body>
</html>
@php
    $film = App\Models\Film::all();
    $singleFilm = App\Models\Film::find(3);
    $detailfilm = App\Models\DetailFilm::all();
@endphp
<h1>Daftar Film</h1>
@foreach ( $film as $item )
    <h2>Film Ke : {{$item->id}}</h2>
    <ul>
        <li>Judul Film : {{ $item->Judul }}</li>
        <li>Deskripsi Film : {{ $item->Deskripsi }}</li>
    </ul>
    <a href="{{url('film/'. $item->id)}}">Detail Film</a>
@endforeach


<h1>Find Film</h1>
<p>
    <h2>Film Ke : {{$singleFilm->id}}</h2>
    <ul>
        <li>Judul Film : {{ $singleFilm->Judul }}</li>
        <li>Deskripsi Film : {{ $singleFilm->Deskripsi }}</li>
    </ul>
    <h3>Detail Film</h3>
    <ul>
        <li>Code Film : {{$singleFilm->DetailFilm->codeFilm}}</li>
        <li>Code Film : {{$singleFilm->DetailFilm->urlImdb}}</li>
    </ul>
</p>


<h1>Daftar Detail Film</h1>
@foreach ( $detailfilm as $anak )
    <h2>Film Ke : {{$anak->id}}</h2>
    <ul>
        <li>Judul Film : {{ $anak->Film->Judul }}</li>
        <li>Deskripsi Film : {{ $anak->Film->Deskripsi }}</li>
    </ul>
    <h3>Detail Film</h3>
    <ul>
        <li>Code Film : {{$anak->codeFilm}}</li>
        <li>Code Film : {{$anak->urlImdb}}</li>
    </ul>
@endforeach --}}
@extends('layout/layout')
@section('content')
@php
    $film = App\Models\Film::all();
@endphp
            <div class="album py-5 bg-light">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach ($film as $item)
                    <div class="col">
                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                                    dy=".3em">{{$item->Judul}}</text>
                            </svg>

                            <div class="card-body">
                                <p class="card-text">{{$item->Deskripsi}}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{url('film/' .$item->id)}}" class="btn btn-sm btn-outline-secondary">View</a>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
@endsection
