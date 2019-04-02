@extends('template')
@section('main')
<div class="produk">
    <h2> Daftar Jenis Barang </h2>

    @if ($jumlah_jenis!=0)
        <table class="table">
            <thead>
            <tr>
                <th>Jenis Barang</th>
            </tr>
            </thead>
            <tbody>
            @foreach($list_jenis as $jenis)
                <tr>
                <td>{{$jenis->jenis_barang}}</td>
                <td>
                    <div class="box-button">
                        {{link_to('jenis/'.$jenis->id,'Detail',['class'=>'btn btn-success btn-sm'])}}
                    </div>
                    <div class="box-button">
                        {{link_to('jenis/'.$jenis->id.'/edit','Edit',['class'=>'btn btn-warning btn-sm'])}}
                    </div>
                    <div class="box-button">
                        {!! Form::open(['method'=>'DELETE','action'=>['JenisController@destroy',$jenis->id]]) !!}
                        {!! Form::submit('Delete',['class'=>'btn btn-danger btn-sm']) !!}
                        {!! Form::close() !!}
                    </div>
                </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p> Tidak Ada Jenis</p>
    @endif
    <div class="table-bottom">
        <div class="pull-left">
            <strong> Jumlah Jenis : {{$jumlah_jenis}}</strong>
        </div>
        <div class="paging">
            {{$list_jenis->links()}}
        </div>
    </div>

    <div class="bottom-nav">
        <div>
            <a href="jenis/tambah" class="btn btn-primary">Tambah<Produk></Produk></a>
        </div>
    </div>

</div>
@stop

@section('footer')
    @include('footer')
@stop