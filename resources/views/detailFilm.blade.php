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
{{-- <span>
    Detail Film
    <h3>Kode Film : {{$film->DetailFilm->codeFilm}} </h3>
    <h3>URL Imdb : <a href="{{$film->DetailFilm->urlImdb}}">Klik Disini</a> </h3>
</span> --}}
{{-- end  one to one --}}
{{-- start one to many --}}
{{-- <h4>Media Film</h4>
@foreach ($film->MediaFilm as $value )
<span>
    <p>Judul Media : {{$value->title}} </p>
    @if($value->tipeMedia)
        <p>URL Media : <a href="{{$value->urlMedia}}">{{$value->urlMedia}}</a> </p>
    @else
    <img src="{{$value->urlMedia}}" width="200px" height="200px">
    @endif
</span>
@endforeach --}}
{{-- end one to many --}}
@extends('layout/layout')
@section('content')
            <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">{{$film->Judul}}</h1>
                    <p class="lead text-muted">{{ $film->Deskripsi }}<</p>
                    <p>
                        <a href="{{$film->DetailFilm->urlImdb}}" class="btn btn-primary my-2">URL Imdb</a>
                        <a href="{{ url('/film') }}" class="btn btn-primary my-2">Kemabali ke Home</a>
                    </p>
                </div>
            </div>
        </section>

          <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach ($film->MediaFilm as $item)
            <div class="col">
                <div class="card shadow-sm">
                  @if ($item->tipeMedia)
                    <iframe width="350" height="200"src="{{$item->urlMedia}}"></iframe>
                    @else
                        <img src="{{ $item->urlMedia }}" alt="" height="200">
                    @endif
                </div>
              </div>
        @endforeach
      </div>
    </div>
  </div>

@endsection
