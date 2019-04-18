@extends('template')
@section('main')
    <div id="pinjaman">
        <h2>Update Pinjaman</h2>
            {!! Form::model($bind,['method'=>'PATCH','action'=>['PinjamanController@update',$bind->id]]) !!}
        @include('pinjaman.form',['button'=>'Update Pinjaman'])
        {!! Form::close() !!}
    </div>
@stop
@section('footer')
    <div id="footer">
        <p>&copy; 2019 E-Inventaris</p>
    </div>
@stop