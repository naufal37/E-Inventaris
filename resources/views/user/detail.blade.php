<?php

?>

@extends('template')
@section('main')
    <div id="produk">
        <h2> Detail Pengguna</h2>

        <table class="table table-striped">
            <tr>
                <th> Nama Pengguna</th>
                <td> {{$user->name}}</td>
            </tr>
            <tr>
                <th> Email Pengguna</th>
                <td>{{$user->email}}</td>
            </tr>

        </table>
    </div>
@stop