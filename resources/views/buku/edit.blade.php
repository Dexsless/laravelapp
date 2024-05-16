@extends('layout.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Genre
                    <a href="{{route('genre.index')}}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="{{route('genre.update',$genre->id)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="mb-2">
                            <label for="">Judul</label>
                            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul">
                            @error('judul')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Jumlah Halaman</label>
                            <input type="text" class="form-control @error('jumlah_halaman') is-invalid @enderror"
                                name="jumlah_halaman">
                            @error('jumlah_halaman')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Cover</label>
                            <input type="text" class="form-control @error('cover') is-invalid @enderror" name="cover">
                            @error('cover')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Isbn</label>
                            <input type="text" class="form-control @error('isbn') is-invalid @enderror" name="isbn">
                            @error('isbn')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Deksripsi</label>
                            <input type="text" class="form-control @error('deksripsi') is-invalid @enderror"
                                name="deksripsi">
                            @error('deksripsi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Tanggal Terbit</label>
                            <input type="text" class="form-control @error('tanggal_terbit') is-invalid @enderror"
                                name="tanggal_terbit">
                            @error('tanggal_terbit')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Id Penulis</label>
                            <input type="text" class="form-control @error('penulis_id') is-invalid @enderror"
                                name="penulis_id">
                            @error('penulis_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <button class="btn btn-sm btn-success" type="submit">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
