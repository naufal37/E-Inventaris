@extends('template')
@section('main')
<div class="produk">
    <h2> Daftar Ruangan </h2>
    @include('ruangan.search')
    @include('_partial.flash_message')
    @if ($jumlah_ruangan!=0)
        <table class="table">
            <thead>
            <tr>
                <th>Nomer</th>
                <th>Nama Ruangan</th>
                <th>Kode Ruangan</th>
                <th>Lokasi Ruangan</th>
                <th>Petugas</th>
            </tr>
            </thead>
            <tbody>
            <?php $i=1;?>
            @foreach($list_ruangan as $ruangan)
                <tr>
                <td>{{$i++}}</td>
                <td>{{$ruangan->nama_ruangan}}</td>
                <td>{{$ruangan->kode_ruangan}}</td>
                <td>{{$ruangan->lokasi}}</td>
                <td>{{$ruangan->petugas_ruangan}}</td>

                <td>
                    @if(Auth::check() && Auth::User()->level=='admin')
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
                    @else
                        <div class="box-button">
                            {{link_to('ruangan/'.$ruangan->id,'Detail',['class'=>'btn btn-success btn-sm'])}}
                        </div>
                    @endif
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

    @if(Auth::check() && Auth::User()->level=='admin')
        <div class="bottom-nav">
            <div>
                <a href="{{url('ruangan/create')}}" class="btn btn-primary">Tambah</a>
            </div>
        </div>
    @endif

</div>
@stop

@section('footer')
    @include('footer')
@stop