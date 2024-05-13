@extends('layout/layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h3>Daftar Hewan</h3>
            </div>
            <div class="card-body">
                <ol>
                    @foreach ($animal as $item)
                    <li>{{ $item }}</li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection
