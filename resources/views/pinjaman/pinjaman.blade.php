@extends('template')
@section('main')
<div class="produk">
    <h2> Daftar Ruangan </h2>
    {{--    @include('ruangan.search')--}}
    @include('_partial.flash_message')
    @if ($jumlah_pinjaman!=0)
        <table class="table">
            <thead>
            <tr>
                <th>Nomer</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Peminjam</th>
                <th>Status</th>
                @if(!(Auth::user()->level=='siswa'))
                <th>Aksi</th>
                @endif
            </tr>
            </thead>
            <tbody>
            <?php $i=1;?>
            @foreach($index as $pinjaman)
                <tr>
                        <td>{{$i++}}</td>
                        <td>{{$pinjaman->barang->nama_barang}}</td>
                        <td>{{$pinjaman->jumlah}}</td>
                        <td>{{$pinjaman->peminjam}}</td>
                        <td>{{$pinjaman->status}}</td>
                    <td>
                        @if(!(Auth::user()->level=='siswa'))
                            @if(!($pinjaman->status=='kembali'))
                            <div class="box-button">
                                {{link_to('pinjaman/'.$pinjaman->id.'/edit','Edit',['class'=>'btn btn-warning btn-sm'])}}
                            </div>

                            <div class="box-button">
                                {{link_to('pengembalian/'.$pinjaman->id,'Pengembalian',['class'=>'btn btn-warning btn-sm'])}}
                            </div>
                            <div class="box-button">
                                {{link_to('pinjaman/'.$pinjaman->id.'/edit','Tolak',['class'=>'btn btn-secondary btn-sm'])}}
                            </div>
                            <div class="box-button">
                                {!! Form::open(['method'=>'DELETE','action'=>['PinjamanController@destroy',$pinjaman->id]]) !!}
                                {!! Form::submit('Delete',['class'=>'btn btn-danger btn-sm']) !!}
                                {!! Form::close() !!}
                            </div>
                                @else
                                -
                            @endif
                            @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p> Tidak Ada Barang</p>
    @endif
</div>

{{--        <div class="paging">--}}
{{--            {{$list_ruangan->links()}}--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    @if(Auth::check() && Auth::User()->level=='admin')--}}
{{--        <div class="bottom-nav">--}}
{{--            <div>--}}
{{--                <a href="{{url('ruangan/create')}}" class="btn btn-primary">Tambah</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    @endif--}}

{{--</div>--}}
<div class="table-bottom">
    <div class="pull-left">
        <strong> Jumlah Pinjaman : {{$jumlah_pinjaman}}</strong>
    </div>
</div>
@stop

@section('footer')
    @include('footer')
@stop