@extends('template')
@section('main')
    <div id="ruangan">
        <h2>Tambah Ruangan</h2>
        {!! Form::open(['url'=>'ruangan']) !!}
            @include('ruangan.form',['button'=>'Tambah Ruangan'])
        {!! Form::close() !!}
    </div>
@stop
@section('footer')
    <div id="footer">
        <p>&copy; 2019 E-Inventaris</p>
    </div>
@stop