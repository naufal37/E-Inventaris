@extends('template')
@section('main')
<div class="produk">
    <h2> Daftar Barang </h2>

    @if ($jumlah_barang!=0)
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Kondisi Barang</th>
                <th>Pilihan</th>
            </tr>
            </thead>
            <tbody>
            @foreach($list_barang as $barang)
                <tr>
                <td>{{$barang->id}}</td>
                <td>{{$barang->nama_barang}}</td>
                <td>{{$barang->kondisi_barang}}</td>
                    {{--->format('d-m-Y')--}}

                {{--<td>@if (!empty($produk->bonus->bonus)) {{$produk->bonus->bonus}} @else - @endif</td>--}}
                {{--<td>{{$barang->bonus->bonus}}</td>--}}
                <td>
                    <div class="box-button">
                        {{link_to('barang/'.$barang->id,'Detail',['class'=>'btn btn-success btn-sm'])}}
                    </div>
                    <div class="box-button">
                        {{link_to('barang/'.$barang->id.'/edit','Edit',['class'=>'btn btn-warning btn-sm'])}}
                    </div>
                    <div class="box-button">
                        {!! Form::open(['method'=>'DELETE','action'=>['BarangController@destroy',$barang->id]]) !!}
                        {!! Form::submit('Delete',['class'=>'btn btn-danger btn-sm']) !!}
                    </div>
                </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p> Tidak Ada Barang</p>
    @endif
    <div class="table-bottom">
        <div class="pull-left">
            <strong> Jumlah Barang : {{$jumlah_barang}}</strong>
        </div>
        <div class="paging">
            {{$list_barang->links()}}
        </div>
    </div>

    <div class="bottom-nav">
        <div>
            <a href="barang/tambah" class="btn btn-primary">Tambah<Produk></Produk></a>
        </div>
    </div>

</div>
@stop

@section('footer')
    @include('footer')
@stop