<style>
    body {
        background-image: linear-gradient(to right, #00C9FF 0%, #92FE9D 100%);
    }

    .card-header {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .card-body {
    }

    .card {
        box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.8);
        padding: 10px;
        border: 1px 2px grey;
        width: 300px
    }
</style>
@extends('layout.layout')
@section('content')
<center>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <img src="{{ $artikels->foto }}" width="150px" height="200px" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{$artikels->judul}}</h5>
                        <p class="card-text">Kategori : {{$artikels->kategori}}</p>
                        <p class="card-text">{{$artikels->konten}}</p>
                        <p class="card-text">Penulis : {{$artikels->penulis}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</center>
@endsection
