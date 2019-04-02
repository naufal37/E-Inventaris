@extends('template')
@section('main')
    <div id="Satuan">
        <h2>Update Satuan</h2>
{{--        {!! Form::open(['url'=>'barang/'.$barang->id.'/update','method'=>'PATCH']) !!}--}}
            {!! Form::model($satuan,['method'=>'PATCH','action'=>['SatuanController@update',$satuan->id]]) !!}
        @include('satuan.form',['button'=>'Update Data'])
        {!! Form::close() !!}
    </div>
@stop
@section('footer')
    <div id="footer">
        <p>&copy; 2019 E-Inventaris</p>
    </div>
@stop