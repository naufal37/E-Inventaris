@extends('template')
@section('main')
    <div id="barang">
        <h2>Tambah Barang</h2>
        {!! Form::open(['url'=>'barang','files'=>'true']) !!}
            @include('barang.form',['button'=>'Tambah Barang'])
        {!! Form::close() !!}
    </div>
@stop
@section('footer')
    <div id="footer">
        <p>&copy; 2019 E-Inventaris</p>
    </div>
@stop