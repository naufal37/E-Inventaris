<?php

?>

@extends('template')
@section('main')
    <div id="produk">
        <h2> Satuan  </h2>

        <table class="table table-striped">
            <tr>
                <th> Satuan</th>
                <td> {{$detail->satuan}}</td>
            </tr>
        </table>
    </div>
@stop