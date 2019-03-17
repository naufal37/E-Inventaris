<?php

?>

@extends('template')
@section('main')
    <div id="produk">
        <h2> Detail Produk</h2>

        <table class="table table-striped">
            <tr>
                <th> Nama Barang</th>
                <td> {{$detail->nama_barang}}</td>
            </tr>
            <tr>
                <th> Kondisi Barang</th>
                <td>{{$detail->kondisi_barang}}</td>
            </tr>
            <tr>
                <th> Jumlah Barang</th>
                <td>{{$detail->jumlah}} {{$detail->satuan}}</td>
            </tr>
            <tr>
                <th> Jenis Produk</th>
                <td>{{$detail->jenis}}</td>
            </tr>
            <tr>
                <th> Kode Barang</th>
                <td>{{$detail->kode_barang}}</td>
            </tr>
            <tr>
                <th> Suplier </th>
                <td>
                    @if(isset($detail->suplier->suplier))
                        {{$detail->suplier->suplier}}
                    @else
                    -
                    @endif
                </td>
            </tr>
            <tr>
                <th> Tanggal Masuk</th>
                <td>{{$tanggal}}</td>
            </tr>
            <tr>
                <th> Keterangan</th>
                <td>{{$detail->keterangan}}</td>
            </tr>
        </table>
    </div>
@stop
