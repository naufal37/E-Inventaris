@extends('template')
@section('main')
    <div id="barang">
        <h2>Update Barang</h2>
        <form method="POST" action="{{route('barang.update',$barang->id)}}">
            @method('PATCH')
            @csrf
            @include('barang.form',['button'=>'Update Barang'])
        </form>
    </div>
@stop