@extends('template')
@section('main')
{{--    @include('barang.report')--}}
    @include('_partial.flash_message')
    @if ($jumlah_barang!=0)
        @include('barang.search')

        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped table-md">
                    <tr>
                        <th>Nomer</th>
                        <th>Nama Barang</th>
                        <th>Kondisi Barang</th>
                        <th>Status</th>
                    </tr>
                <?php $i = 1?>
                    @foreach($list_barang as $barang)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$barang->nama_barang}}</td>
                        @if($barang->jumlah<1)
                            <td><div class="badge badge-danger">Habis</div></td>
                        @else
                            <td><div class="badge badge-success">{{$barang->kondisi_barang}}</div></td>
                        @endif
                        @if(Auth::check())
                            @if((Auth::User()->level=='admin'))
                            <td>
                                <a href="{{url('pinjaman/create/'.$barang->id)}}" class="btn btn-success">Pinjam</a>

                                <a href="{{url('barang/'.$barang->id)}}" class="btn btn-primary">Detail</a>

                                <a href="{{url('barang/'.$barang->id.'/edit')}}" class="btn btn-warning">Edit</a>
                                <form action="barang/{{$barang->id}}" method="POST">
                                    {{ csrf_field() }}
                                    {{method_field('DELETE')}}
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                            @else
                                <td>
                                    <a href="{{url('')}}" class="btn btn-primary">Detail</a>
                                    <a href="{{url('pinjaman/create/'.$barang->id)}}" class="btn btn-success">Pinjam</a>
                                </td>
                            @endif
                        @endif
                        @endforeach
                    </tr>
                </table>
            </div>
            {{$list_barang->links()}}
            <a href="{{url('barang/create')}}" class="btn btn-success">Tambahkan Barang</a>
        </div>
    @else
        <div class="col-12 mb-4">
            <div class="hero bg-warning text-white">
                <div class="hero-inner">
                    <h2>Data Barang Tidak Ada</h2>
                    <p class="lead">Sistem Tidak Menemukan Barang Apapun,Silahkan Tambahkan Barang.</p>
                    <div class="mt-4">
                        <a href="{{url('barang/create')}}" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="far fa-user"></i> Tambah Barang</a>
                    </div>
                </div>
            </div>
        </div>
    @endif
@stop



{{--<div class="barang">--}}
{{--    <h2> Daftar Barang </h2>--}}
{{--    @include('barang.search')--}}
{{--    @include('barang.report')--}}
{{--    @include('_partial.flash_message')--}}
{{--    @if ($jumlah_barang!=0)--}}
{{--        <table class="table">--}}
{{--            <thead>--}}
{{--            <tr>--}}
{{--                <th>ID</th>--}}
{{--                <th>Nama Barang</th>--}}
{{--                <th>Kondisi Barang</th>--}}
{{--                <th>Pilihan</th>--}}
{{--            </tr>--}}
{{--            <?php $i=1;?>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            @foreach($list_barang as $barang)--}}
{{--                <tr>--}}
{{--                    <td>{{$i++}}</td>--}}
{{--                    <td>{{$barang->nama_barang}}</td>--}}
{{--                    @if($barang->jumlah<1)--}}
{{--                        <td>Tidak Tersedia</td>--}}
{{--                    @else--}}
{{--                        <td>{{$barang->kondisi_barang}}</td>--}}
{{--                    @endif--}}
{{--                    @if(Auth::check() && Auth::User()->level=='admin')--}}
{{--                        <td>--}}
{{--                            <div class="box-button">--}}
{{--                                {{link_to('pinjaman/create/'.$barang->id,'Pinjam',['class'=>'btn btn-success btn-sm'])}}--}}
{{--                            </div>--}}

{{--                            <div class="box-button">--}}
{{--                                {{link_to('barang/'.$barang->id,'Detail',['class'=>'btn btn-success btn-sm'])}}--}}
{{--                            </div>--}}

{{--                            <div class="box-button">--}}
{{--                                {{link_to('barang/'.$barang->id.'/edit','Edit',['class'=>'btn btn-warning btn-sm'])}}--}}
{{--                            </div>--}}
{{--                            <div class="box-button">--}}
{{--                                {!! Form::open(['method'=>'DELETE','action'=>['BarangController@destroy',$barang->id]]) !!}--}}
{{--                                {!! Form::submit('Delete',['class'=>'btn btn-danger btn-sm']) !!}--}}
{{--                                {!! Form::close() !!}--}}
{{--                            </div>--}}
{{--                        </td>--}}
{{--                    @elseif(Auth::check() && Auth::User()->level=='siswa')--}}
{{--                        <td>--}}
{{--                            <div class="box-button">--}}
{{--                                {{link_to('pinjaman/create/'.$barang->id,'Pinjam',['class'=>'btn btn-success btn-sm'])}}--}}
{{--                            </div>--}}
{{--                            <div class="box-button">--}}
{{--                                {{link_to('barang/'.$barang->id,'Detail',['class'=>'btn btn-success btn-sm'])}}--}}
{{--                            </div>--}}
{{--                        </td>--}}
{{--                    @else--}}
{{--                        <div class="box-button">--}}
{{--                            {{link_to('barang/'.$barang->id,'Detail',['class'=>'btn btn-success btn-sm'])}}--}}
{{--                        </div>--}}
{{--                    @endif--}}
{{--                </tr>--}}
{{--            @endforeach--}}
{{--            </tbody>--}}
{{--        </table>--}}
{{--    @else--}}
{{--        <p> Tidak Ada Barang</p>--}}
{{--    @endif--}}
{{--    <div class="table-bottom">--}}
{{--        <div class="pull-left">--}}
{{--            <strong> Jumlah Barang : {{$jumlah_barang}} </strong>--}}
{{--            <br/>--}}
{{--            <strong> Jumlah Ruangan : {{$jumlah_ruangan}} </strong>--}}
{{--        </div>--}}
{{--        <div class="paging">--}}
{{--            {{$list_barang->links()}}--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    @if(Auth::check() && Auth::User()->level=='admin')--}}
{{--        <div class="bottom-nav">--}}
{{--            <div>--}}
{{--                {{link_to('barang/create','Tambah Barang',['class'=>'btn btn-success btn-sm'])}}--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    @endif--}}

{{--</div>--}}
