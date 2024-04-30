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
            background-size: 100%;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif
        }
    </style>
</head>
<body>
    
</body>
</html>
@php
    // tanpa foreeach
    $siswa = \App\Models\Siswa::find(10);
    // dengan foreeach
    $siswa2 = \App\Models\Siswa::where('id', '!=', '3');
    // ->orderBy('id', 'desc')
    // ->take(3)
    // ->groupBy('nama')
    // ->get();
    $siswa3 = \App\Models\Siswa::where('kelas', 'XI RPL 2')->orderBy('id', 'desc')->first();
    $siswa4 = \App\Models\Siswa::where('kelas', 'XI RPL 2')->orderBy('id', 'desc')->firstOrFail();
@endphp
<h1>Daftar Siswa SMK Assalaam Bandung</h1>
    <ul>
        <li>Siswa Ke : {{$siswa4->id ?? 'kosong'}}</li>
        Nama : {{$siswa4->nama ?? 'kosong'}}
        <br>
        Kelas : {{$siswa4->kelas ?? 'kosong'}}
        <br>
        Jenis Kelamin : {{$siswa4->jenisKelamin ?? 'kosong'}}
    </ul>
{{-- @foreach($siswa as $data)
    <ul>
        <li>Siswa Ke : {{$data->id}}</li>
        Nama : {{$data->nama ?? 'kosong'}}
        <br>
        Kelas : {{$data->kelas ?? 'kosong'}}
        <br>
        Jenis Kelamin : {{$data->jenisKelamin ?? 'kosong'}}
    </ul>
@endforeach --}}