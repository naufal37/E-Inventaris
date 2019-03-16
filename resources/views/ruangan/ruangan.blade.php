@extends('template')
@section('main')
<div class="produk">
    <h2> Daftar Ruangan </h2>

    @if ($jumlah_ruangan!=0)
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nama Ruangan</th>
                <th>Kode Ruangan</th>
                <th>Petugas</th>
            </tr>
            </thead>
            <tbody>
            @foreach($list_ruangan as $ruangan)
                <tr>
                <td>{{$ruangan->id}}</td>
                <td>{{$ruangan->nama_ruangan}}</td>
                <td>{{$ruangan->kode_ruangan}}</td>
                <td>{{$ruangan->petugas_ruangan}}</td>
                    {{--->format('d-m-Y')--}}

                {{--<td>@if (!empty($produk->bonus->bonus)) {{$produk->bonus->bonus}} @else - @endif</td>--}}
                {{--<td>{{$barang->bonus->bonus}}</td>--}}
                <td>
                    <div class="box-button">
                        {{link_to('ruangan/'.$ruangan->id,'Detail',['class'=>'btn btn-success btn-sm'])}}
                    </div>
                    <div class="box-button">
                        {{link_to('ruangan/'.$ruangan->id.'/edit','Edit',['class'=>'btn btn-warning btn-sm'])}}
                    </div>
                    <div class="box-button">
                        {!! Form::open(['method'=>'DELETE','action'=>['RuanganController@destroy',$ruangan->id]]) !!}
                        {!! Form::submit('Delete',['class'=>'btn btn-danger btn-sm']) !!}
                        {!! Form::close() !!}
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
            <strong> Jumlah Ruangan : {{$jumlah_ruangan}}</strong>
        </div>
        <div class="paging">
            {{$list_ruangan->links()}}
        </div>
    </div>

    <div class="bottom-nav">
        <div>
            <a href="ruangan/tambah" class="btn btn-primary">Tambah<Produk></Produk></a>
        </div>
    </div>

</div>
@stop

@section('footer')
    @include('footer')
@stop