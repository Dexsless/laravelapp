@extends('layout/layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h3>Perkenalan</h3>
            </div>
            <div class="card-body">
                <p>Nama : {{$data['nama']}}</p>
                <p>Alamat : {{$data['alamat']}}</p>
                <p>Agama : {{$data['agama']}}</p>
                <p>Jenis Kelamin : {{$data['jk']}}</p>
                <ol>
                    @foreach ($data['hoby'] as $item)
                    {{ $item }}
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection
