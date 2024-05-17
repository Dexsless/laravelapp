@extends('layout.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}
                </div>
                <div class="card-body">
                    Selamat Datang @guest @else <strong>{{Auth::user()->name}}</strong> @endguest
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        @foreach ($buku as $item)
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('/images/buku/'.$item->cover)}}" class="card-img-top" alt="">
                <div class="card-body">
                    <p class="card-text">{{$item->judul}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">Daftar Penulis</div>
                <div class="card-body">
                    @foreach ($penulis as $item2)
                    <a href="">{{$item2->nama_penulis}}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">Daftar Genre</div>
                <div class="card-body">
                    @foreach ($genre as $item2)
                    <a href="">{{$item2->nama_genre}}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
