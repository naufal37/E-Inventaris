<?php

?>

@extends('template')
@section('main')
    <div id="produk">
        <h2> Detail Ruangan</h2>

        <table class="table table-striped">
            <tr>
                <th> Nama Ruangan</th>
                <td> {{$detail->nama_ruangan}}</td>
            </tr>
            <tr>
                <th> Kode Ruangan</th>
                <td>{{$detail->kode_ruangan}}</td>
            </tr>
            <tr>
                <th> Lokasi Ruangan</th>
                <td>{{$detail->lokasi}}</td>
            </tr>
            <tr>
                <th> Petugas</th>
                <td> {{$detail->petugas_ruangan}}</td>
            </tr>
        </table>
    </div>
@stop