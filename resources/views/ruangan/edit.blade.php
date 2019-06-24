@extends('template')
@section('main')
    <div id="ruangan">
        <form method="POST" action="{{route('ruangan.update',$ruangan->id)}}">
            @method('PATCH')
            @csrf
            @include('ruangan.form',['button'=>'Update Ruangan'])
        </form>
    </div>
@stop