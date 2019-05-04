@extends('template')
@section('main')
    <div id="jenis">
        <h2>Update Jenis Barang</h2>
        <form method="POST" action="{{route('jenis.update',$jenis->id)}}">
            @method('PATCH')
            @csrf
            @include('jenis.form',['button'=>'Update Jenis Barang'])
        </form>
    </div>
@stop