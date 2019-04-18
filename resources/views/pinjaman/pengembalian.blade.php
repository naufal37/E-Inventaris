@extends('template')
@section('main')
    <div id="pengembalian">
        <h2>Form Pengembalian</h2>
            {!! Form::model($bind3,['method'=>'PATCH','action'=>['PinjamanController@pengembalian',$bind3->id]]) !!}
        @include('pinjaman.form',['button'=>'Kembalikan Pinjaman Sebagian'])
        {!! Form::close() !!}
    </div>
@stop
@section('footer')
    <div id="footer">
        <p>&copy; 2019 E-Inventaris</p>
    </div>
@stop