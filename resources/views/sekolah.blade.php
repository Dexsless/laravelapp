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
    $sekolah = \App\Models\Sekolah::all();
@endphp
<h1>Daftar Sekolah SMK Yang ada Jurusan RPL Di Bandung</h1>
@foreach($sekolah as $data)
    <ul>
        <li>Sekolah Ke : {{$data->id}}</li>
        Nama Sekolah : {{$data->namaSekolah}}
        <br>
        Alamat : {{$data->alamat}}
        <br>
        Email : {{$data->email}}
        <br>
        Nomor Telepon : {{$data->telepon}}
        <br>
        Status : {{$data->status}}
    </ul>
@endforeach