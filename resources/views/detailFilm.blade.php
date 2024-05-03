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
        a {
            text-decoration: none;
            color: gray;
        }
    </style>
</head>
<body>

</body>
</html>
<h1>Judul Film : {{$film->Judul}} </h1>
<p>Deskripsi : {{$film->Deskripsi}} </p>
{{-- Start One To One --}}
<span>
    Detail Film
    <h3>Kode Film : {{$film->DetailFilm->codeFilm}} </h3>
    <h3>URL Imdb : <a href="{{$film->DetailFilm->urlImdb}}">Klik Disini</a> </h3>
</span>
{{-- end  one to one --}}
{{-- start one to many --}}
<h4>Media Film</h4>
@foreach ($film->MediaFilm as $value )
<span>
    <p>Judul Media : {{$value->title}} </p>
    @if($value->tipeMedia)
        <p>URL Media : <a href="{{$value->urlMedia}}">{{$value->urlMedia}}</a> </p>
    @else
    <img src="{{$value->urlMedia}}" width="200px" height="200px">
    @endif
</span>
@endforeach
{{-- end one to many --}}
