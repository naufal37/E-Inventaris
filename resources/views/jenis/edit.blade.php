@extends('template')
@section('main')
    <div id="ruangan">
        <h2>Update Jenis Barang</h2>
{{--        {!! Form::open(['url'=>'barang/'.$barang->id.'/update','method'=>'PATCH']) !!}--}}
            {!! Form::model($jenis,['method'=>'PATCH','action'=>['JenisController@update',$jenis->id]]) !!}
        @include('jenis.form',['button'=>'Update Data'])
        {!! Form::close() !!}
    </div>
@stop
@section('footer')
    <div id="footer">
        <p>&copy; 2019 E-Inventaris</p>
    </div>
@stop