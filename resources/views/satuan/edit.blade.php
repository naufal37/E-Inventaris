@extends('template')
@section('main')
    <div id="satuan">
        <h2>Update Satuan</h2>
        <form method="POST" action="{{route('satuan.update',$satuan->id)}}">
            @method('PATCH')
            @csrf
            @include('satuan.form',['button'=>'Update Satuan'])
        </form>
    </div>
@stop