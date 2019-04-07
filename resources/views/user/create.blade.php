@extends('template')
@section('main')
    <div id="pengguna">
        <h2>Tambah Pengguna</h2>
        {!! Form::open(['url'=>'pengguna']) !!}
            @include('user.form',['button'=>'Tambah Pengguna'])
        {!! Form::close() !!}
    </div>
@stop
@section('footer')
    <div id="footer">
        <p>&copy; 2019 E-Inventaris</p>
    </div>
@stop