@extends('template')
@section('main')
    <div id="satuan">
        <h2>Tambah Satuan</h2>
        {!! Form::open(['url'=>'satuan']) !!}
            @include('satuan.form',['button'=>'Tambah Satuan'])
        {!! Form::close() !!}
    </div>
@stop
@section('footer')
    <div id="footer">
        <p>&copy; 2019 E-Inventaris</p>
    </div>
@stop