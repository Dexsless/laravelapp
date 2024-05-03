<!DOCTYPE html>
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
@endforeach
