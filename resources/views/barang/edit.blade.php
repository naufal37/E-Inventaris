@extends('template')
@section('main')
    <div id="barang">
        <h2>Update Barang</h2>
{{--        {!! Form::open(['url'=>'barang/'.$barang->id.'/update','method'=>'PATCH']) !!}--}}
            {!! Form::model($barang,['method'=>'PATCH','action'=>['BarangController@update',$barang->id]]) !!}
            @include('barang.form',['button'=>'Update Barang'])
        {!! Form::close() !!}
    </div>
@stop
@section('footer')
    <div id="footer">
        <p>&copy; 2019 E-Inventaris</p>
    </div>
@stop