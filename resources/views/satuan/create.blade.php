@extends('template')
@section('main')
    <div id="satuan">
        <h2>Tambah Satuan</h2>
        <form method="POST" action="{{route('satuan.store')}}">
            @csrf
            @include('satuan.form',['button'=>'Tambah Satuan'])
        </form>
    </div>
@stop