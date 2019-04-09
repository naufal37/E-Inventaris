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
            </tr>
            </thead>
            <tbody>
            <?php $i=1;?>
            @foreach($pag as $pinjaman)
                <tr>
                    @if($pinjaman->peminjam == Auth::User()->name)
                        <td>{{$i++}}</td>
                        <td>{{$pinjaman->barang->nama_barang}}</td>
                        <td>{{$pinjaman->jumlah}}</td>
                        <td>{{$pinjaman->peminjam}}</td>
                        <td>{{$pinjaman->status}}</td>
                    @elseif(Auth::User()->level == 'admin'|| Auth::User()->level == 'operator')
                        <td>{{$i++}}</td>
                        <td>{{$pinjaman->barang->nama_barang}}</td>
                        <td>{{$pinjaman->jumlah}}</td>
                        <td>{{$pinjaman->peminjam}}</td>
                        <td>{{$pinjaman->status}}</td>
                </tr>
                @endif

                {{--                <td>--}}
                {{--                    @if(Auth::check() && Auth::User()->level=='admin')--}}
                {{--                    <div class="box-button">--}}
                {{--                        {{link_to('ruangan/'.$pinjaman->id,'Detail',['class'=>'btn btn-success btn-sm'])}}--}}
                {{--                    </div>--}}
                {{--                        <div class="box-button">--}}
                {{--                        {{link_to('ruangan/'.$ruangan->id.'/edit','Edit',['class'=>'btn btn-warning btn-sm'])}}--}}
                {{--                    </div>--}}
                {{--                    <div class="box-button">--}}
                {{--                        {!! Form::open(['method'=>'DELETE','action'=>['RuanganController@destroy',$ruangan->id]]) !!}--}}
                {{--                        {!! Form::submit('Delete',['class'=>'btn btn-danger btn-sm']) !!}--}}
                {{--                        {!! Form::close() !!}--}}
                {{--                    </div>--}}
                {{--                    @else--}}
                {{--                        <div class="box-button">--}}
                {{--                            {{link_to('ruangan/'.$ruangan->id,'Detail',['class'=>'btn btn-success btn-sm'])}}--}}
                {{--                        </div>--}}
                {{--                    @endif--}}
                {{--                </td>--}}

                    @endforeach
            </tbody>
        </table>
    @else
        <p> Tidak Ada Barang</p>
    @endif
</div>
{{--    <div class="table-bottom">--}}
{{--        <div class="pull-left">--}}
{{--            <strong> Jumlah Ruangan : {{$jumlah_ruangan}}</strong>--}}
{{--        </div>--}}
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
@stop

@section('footer')
    @include('footer')
@stop