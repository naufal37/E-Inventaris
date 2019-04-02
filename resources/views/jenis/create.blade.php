@extends('template')
@section('main')
    <div id="ruangan">
        <h2>Tambah Jenis Barang</h2>
        {!! Form::open(['url'=>'jenis']) !!}
            @include('jenis.form',['button'=>'Tambah Ruangan'])
        {!! Form::close() !!}
    </div>
@stop
@section('footer')
    <div id="footer">
        <p>&copy; 2019 E-Inventaris</p>
    </div>
@stop