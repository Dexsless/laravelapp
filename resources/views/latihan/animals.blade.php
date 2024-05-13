@extends('layout/layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h3>Daftar Hewan</h3>
                </div>
                <div class="card-body">
                    <ol>
                        @foreach ($hewan as $item)
                        @if ($item == 'buaya')
                        <li>{{$item}}- rawrr</li>
                        @else
                        <li>{{ $item }}</li>
                        @endif
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
