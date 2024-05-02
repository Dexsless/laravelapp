<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>sekolah</title>
    <style>
        body::before {
            background-color: #a0a0a0;
            background-position: center;
            color: #111111;
        }
        body {
            background: rgb(red, green, blue);
            background: linear-gradient(90deg, rgb(135, 188, 184) 0%, rgb(23, 26, 30) 100%);
            color: #111111;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif
        }
    </style>
</head>
<body>
    
</body>
</html>
@php
    $album = \App\Models\AlbumMusik::all();
    $album2 = \App\Models\AlbumMusik::where('tahunRilis', '2018-12-10')->get();
    $album3 = \App\Models\AlbumMusik::find(10);
    $album4 = \App\Models\AlbumMusik::first();
@endphp
<h1>Daftar Sekolah SMK Yang ada Jurusan RPL Di Bandung</h1>
@foreach($album as $data)
    <ul>
        <li>Lagu Ke : {{$data->id}}</li>
        Judul : {{$data->judul}}
        <br>
        Tahun Rilis Album : {{$data->tahunRilis}}
        <br>
        Cover Album : {{$data->coverAlbum}}
        <br>
    </ul>
@endforeach
<hr>
<h1>menggunakan eloquent where('tahun', ...), orderBy, get();</h1>
@foreach($album2 as $data)
    <ul>
        <li>Lagu Ke : {{$data->id}}</li>
        Judul : {{$data->judul}}
        <br>
        Tahun Rilis Album : {{$data->tahunRilis}}
        <br>
        Cover Album : {{$data->coverAlbum}}
        <br>
    </ul>
@endforeach
    <ul>
        <li>Lagu Ke : {{$album3->id}}</li>
        Judul : {{$album3->judul}}
        <br>
        Tahun Rilis Album : {{$album3->tahunRilis}}
        <br>
        Cover Album : {{$album3->coverAlbum}}
        <br>
    </ul>
    <ul>
        <li>Lagu Ke : {{$album4->id}}</li>
        Judul : {{$album4->judul}}
        <br>
        Tahun Rilis Album : {{$album4->tahunRilis}}
        <br>
        Cover Album : {{$album4->coverAlbum}}
        <br>
    </ul>