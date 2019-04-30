@extends('template')
@section('main')
    <div id="barang">
        <h2>Tambah Barang</h2>
        <form method="POST" action="{{route('barang.store')}}">
            @csrf
            @include('barang.form',['button'=>'Tambah Barang'])
        </form>
    </div>
@stop