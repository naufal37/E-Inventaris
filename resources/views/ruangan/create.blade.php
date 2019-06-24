@extends('template')
@section('main')
    <div id="ruangan">
        <h2>Tambah Ruangan</h2>
        <form method="POST" action="{{route('ruangan.store')}}">
            @csrf
            @include('ruangan.form',['button'=>'Tambah Ruangan'])
        </form>
    </div>
@stop