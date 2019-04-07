@extends('template')
@section('main')
<div class="barang">
    <h2> Daftar Barang </h2>
    @include('barang.search')
    @include('_partial.flash_message')
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
                @if(Auth::check() && Auth::User()->level=='admin')
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
                        {!! Form::close() !!}
                    </div>
                    </td>
                        @else
                        <td>
                            <div class="box-button">
                                {{link_to('barang/'.$barang->id,'Detail',['class'=>'btn btn-success btn-sm'])}}
                            </div>
                        </td>
                    @endif
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p> Tidak Ada Barang</p>
    @endif
    <div class="table-bottom">
        <div class="pull-left">
            <strong> Jumlah Barang : {{$jumlah_barang}} </strong>
            <br/>
            <strong> Jumlah Ruangan : {{$jumlah_ruangan}} </strong>
        </div>
        <div class="paging">
            {{$list_barang->links()}}
        </div>
    </div>
    @if(Auth::check() && Auth::User()->level=='admin')
        <div class="bottom-nav">
            <div>
                {{link_to('barang/create','Tambah Barang',['class'=>'btn btn-success btn-sm'])}}
            </div>
        </div>
    @endif

</div>
@stop

@section('footer')
    @include('footer')
@stop