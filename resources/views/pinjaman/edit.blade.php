@extends('template')
@section('main')
    <div id="ruangan">
        <h2>Update Barang</h2>
{{--        {!! Form::open(['url'=>'barang/'.$barang->id.'/update','method'=>'PATCH']) !!}--}}
            {!! Form::model($ruangan,['method'=>'PATCH','action'=>['RuanganController@update',$ruangan->id]]) !!}

        @include('ruangan.form',['button'=>'Update Data'])
        {!! Form::close() !!}
    </div>
@stop
@section('footer')
    <div id="footer">
        <p>&copy; 2019 E-Inventaris</p>
    </div>
@stop