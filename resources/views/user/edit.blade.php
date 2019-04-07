@extends('template')
@section('main')
    <div id="pengguna">
        <h2>Update Data Pengugna</h2>
{{--        {!! Form::open(['url'=>'barang/'.$barang->id.'/update','method'=>'PATCH']) !!}--}}
            {!! Form::model($data,['method'=>'PATCH','action'=>['UserController@update',$data->id]]) !!}

        @include('user.form',['button'=>'Update Data'])
        {!! Form::close() !!}
    </div>
@stop
@section('footer')
    <div id="footer">
        <p>&copy; 2019 E-Inventaris</p>
    </div>
@stop