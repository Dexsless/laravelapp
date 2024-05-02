@php
    $film = App\Models\Film::all();
@endphp
<h1>Daftar Film</h1>
@foreach ( $film as $item )
    <h2>Film Ke : {{$item->id}}</h2>
    <ul>
        <li>Judul Film : {{ $item->Judul }}</li>
        <li>Deskripsi Film : {{ $item->Deskripsi }}</li>
    </ul>
    <h3>Detail Film</h3>
    <ul>
        <li>Code Film : {{$item->DetailFilm->codeFilm}}</li>
        <li>Code Film : {{$item->DetailFilm->urlImdb}}</li>
    </ul>
@endforeach
