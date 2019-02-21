<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 10/28/18
 * Time: 5:37 AM
 */
?>
@extends('template')
@section('main')
    <div id="produk">
        <h2> Edit Produk</h2>
        {!! Form::model($produk,['method'=>'PATCH','action'=>['produkcontroller@update',$produk->id]]) !!}
        @include ('produk/form',['submitButtonText'=>'Edit Produk'])
        {!! Form::close() !!}
    </div>
@stop

@section('footer')
    @include('footer')
@stop