@extends('template')
@section('main')
    <div class="ruangan">
        <h2> Daftar Ruangan </h2>
        @include('ruangan.search')
        @include('_partial.flash_message')
        @if ($jumlah_ruangan!=0)
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-md">
                        <tr>
                            <th>Nomer</th>
                            <th>Nama Ruangan</th>
                            <th>Kode Ruangan</th>
                            <th>Lokasi Ruangan</th>
                            <th>Petugas Ruangan</th>
                        </tr>
                        <?php $i = 1?>
                        @foreach($list_ruangan as $ruangan)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$ruangan->nama_ruangan}}</td>
                                <td>{{$ruangan->kode_ruangan}}</td>
                                <td>{{$ruangan->lokasi}}</td>
                                <td>{{$ruangan->petugas_ruangan}}</td>
                                @if(Auth::check())
                                    @if((Auth::User()->level=='admin'))
                                        <td>
                                            <a href="{{url('ruangan/'.$ruangan->id.'/edit')}}" class="btn btn-warning">Edit</a>
                                            <form action="barang/{{$ruangan->id}}" method="POST">
                                                {{ csrf_field() }}
                                                {{method_field('DELETE')}}
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    @else
                                        <td>
                                            -
                                        </td>
                                    @endif
                                @endif
                                @endforeach
                            </tr>
                    </table>
                </div>
                {{$list_ruangan->links()}}
                <a href="{{url('ruangan/create')}}" class="btn btn-success">Tambahkan Ruangan</a>
            </div>
        @else
            <div class="col-12 mb-4">
                <div class="hero bg-warning text-white">
                    <div class="hero-inner">
                        <h2>Data Ruangan Tidak Ada</h2>
                        <p class="lead">Sistem Tidak Menemukan Ruangan Apapun,Silahkan Tambahkan Rungan.</p>
                        <div class="mt-4">
                            <a href="{{url('ruangan/create')}}" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="far fa-user"></i> Tambah Ruangan </a>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@stop