@extends('template')
@section('main')
    <div id="jenis">
        <h2>Tambah Jenis Barang</h2>
        <form method="POST" action="{{route('jenis.store')}}">
            @csrf
            @include('jenis.form',['button'=>'Tambah Jenis Barang'])
        </form>
    </div>
@stop