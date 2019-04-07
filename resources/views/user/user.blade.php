@extends('template')
@section('main')
<div class="pengguna">
    <h2> Daftar Pengguna </h2>
    @include('_partial.flash_message')
    @if ($jumlah_pengguna!=0)
        <table class="table">
            <thead>
            <tr>
                <th>Nomer</th>
                <th>Nama Pengguna</th>
                <th>Email Pengguna</th>
                <th>Level</th>
            </tr>
            </thead>
            <tbody>
            <?php $i = 1;?>
            @foreach($list_pengguna as $pengguna)
                <tr>
                <td>{{$i++}}</td>
                <td>{{$pengguna->name}}</td>
                <td>{{$pengguna->email}}</td>
                <td>{{$pengguna->level}}</td>

                <td>
                    <div class="box-button">
                        {{link_to('pengguna/'.$pengguna->id,'/Detail',['class'=>'btn btn-success btn-sm'])}}
                    </div>
                    <div class="box-button">
                        {{link_to('pengguna/'.$pengguna->id.'/edit','Edit',['class'=>'btn btn-warning btn-sm'])}}
                    </div>
                    <div class="box-button">
                        {!! Form::open(['method'=>'DELETE','action'=>['UserController@destroy',$pengguna->id]]) !!}
                        {!! Form::submit('Delete',['class'=>'btn btn-danger btn-sm']) !!}
                        {!! Form::close() !!}
                    </div>
                </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p> Tidak Ada Pengguna</p>
    @endif
    <div class="table-bottom">
        <div class="pull-left">
            <strong> Jumlah Pengguna : {{$jumlah_pengguna}}</strong>
        </div>
        <div class="paging">
            {{$pagination->links()}}
        </div>
    </div>

    <div class="bottom-nav">
        <div>
            <a href="{{url('pengguna/create')}}" class="btn btn-primary">Tambah Pengguna<Produk></Produk></a>
        </div>
    </div>

</div>
@stop

@section('footer')
    @include('footer')
@stop