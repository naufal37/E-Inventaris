@extends('template')
@section('main')
    <div id="pinjaman">
        <h2>Buat Pinjaman</h2>
        @include('_partial.flash_message')
        {!! Form::open(['url'=>'pinjaman']) !!}
            @include('pinjaman.form',['button'=>'Buat Pinjaman'])
        {!! Form::close() !!}
    </div>
@stop
@section('footer')
    <div id="footer">
        <p>&copy; 2019 E-Inventaris</p>
    </div>
@stop