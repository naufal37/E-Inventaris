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
        <h2> Tambah Produk</h2>
        {!! Form::open(['url'=>'barang']) !!}
            @include ('produk/form',['submitButtonText'=>'Tambah Produk'])
        {!! Form::close() !!}
    </div>
@stop

@section('footer')
    @include('footer')
@stop