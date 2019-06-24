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
                                <td>
                                    <div class="badge badge-danger">Habis</div>
                                </td>
                            @else
                                <td>
                                    <div class="badge badge-success">{{$barang->kondisi_barang}}</div>
                                </td>
                            @endif
                            @if(Auth::check())
                                @if((Auth::User()->level=='admin'))
                                    <td>
                                        <a href="{{url('pinjaman/create/'.$barang->id)}}"
                                           class="btn btn-success">Pinjam</a>

                                        <a href="{{url('barang/'.$barang->id)}}" class="btn btn-primary">Detail</a>

                                        <a href="{{url('barang/'.$barang->id.'/edit')}}"
                                           class="btn btn-warning">Edit</a>
                                        <form action="barang/{{$barang->id}}" method="POST">
                                            {{ csrf_field() }}
                                            {{method_field('DELETE')}}
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                @else
                                    <td>
                                        <a href="{{url('')}}" class="btn btn-primary">Detail</a>
                                        <a href="{{url('pinjaman/create/'.$barang->id)}}"
                                           class="btn btn-success">Pinjam</a>
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