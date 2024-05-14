<style>
    body {
        background-image: linear-gradient(to right, #00C9FF 0%, #92FE9D 100%);
    }

    #card-header {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    #card-body {
        height: 450px;
    }

    #card {
        box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.8);
        padding: 10px;
        border: 1px 2px grey;
        width: 300px;
    }

    #card2 {
        box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.8);
        padding: 10px;
        border: 1px 2px grey;
        width: 50%
    }
</style>
@extends('layout.layout')
@section('content')
<center>
<div class="container">
    <div class="row">
        @foreach ($artikels as $item)
        <div class="col mb-5">
            <div class="card mt-5" id="card">
                <div class="card-header" id="card-header">
                    <img src="{{ $item->foto }}" width="150px" height="200px" alt="...">
                </div>
                <div class="card-body" id="card-body">
                    <h5 class="card-title">{{$item->judul}}</h5>
                    <p class="card-text">Kategori : {{$item->kategori}}</p>
                    <p class="card-text">{{$item->konten}}</p>
                    <p class="card-text">Penulis : {{$item->penulis}}</p>
                    <a href="../id/{{$item->id}}" class="btn btn-primary">Go to Detail</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
</center>
@endsection
