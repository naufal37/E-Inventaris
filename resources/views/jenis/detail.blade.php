<?php

?>

@extends('template')
@section('main')
    <div id="produk">
        <h2> Jenis Barang </h2>

        <table class="table table-striped">
            <tr>
                <th> Jenis Barang</th>
                <td> {{$detail->jenis_barang}}</td>
            </tr>
        </table>
    </div>
@stop