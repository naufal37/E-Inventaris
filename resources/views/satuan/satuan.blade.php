@extends('template')
@section('main')
<div class="produk">
    <h2> Daftar satuan Barang </h2>
    @include('_partial.flash_message')
    @if ($jumlah_satuan!=0)
        <table class="table">
            <thead>
            <tr>
                <th>Satuan</th>
            </tr>
            </thead>
            <tbody>
            @foreach($list_satuan as $satuan)
                <tr>
                <td>{{$satuan->satuan}}</td>
                <td>
                    <div class="box-button">
                        {{link_to('satuan/'.$satuan->id,'Detail',['class'=>'btn btn-success btn-sm'])}}
                    </div>
                    <div class="box-button">
                        {{link_to('satuan/'.$satuan->id.'/edit','Edit',['class'=>'btn btn-warning btn-sm'])}}
                    </div>
                    <div class="box-button">
                        {!! Form::open(['method'=>'DELETE','action'=>['SatuanController@destroy',$satuan->id]]) !!}
                        {!! Form::submit('Delete',['class'=>'btn btn-danger btn-sm']) !!}
                        {!! Form::close() !!}
                    </div>
                </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p> Tidak Ada Satuan</p>
    @endif
    <div class="table-bottom">
        <div class="pull-left">
            <strong> Jumlah Satuan : {{$jumlah_satuan}}</strong>
        </div>
        <div class="paging">
            {{$list_satuan->links()}}
        </div>
    </div>

    <div class="bottom-nav">
        <div>
            <a href="satuan/create" class="btn btn-primary">Tambah<Produk></Produk></a>
        </div>
    </div>

</div>
@stop

@section('footer')
    @include('footer')
@stop