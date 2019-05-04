@extends('template')
@section('main')
<div class="jenis">
    <h2> Daftar Jenis Barang </h2>
    @include('_partial.flash_message')
    @if ($jumlah_jenis!=0)
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped table-md">
                    <tr>
                        <th>Nomer</th>
                        <th>Jenis Barang</th>
                        <th>Pilihan</th>
                    </tr>
                    <?php $i = 1?>
                    @foreach($list_jenis as $jenis)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$jenis->jenis_barang}}</td>
                            @if(Auth::check())
                                @if((Auth::User()->level=='admin'))
                                    <td>
                                        <a href="{{url('jenis/'.$jenis->id.'/edit')}}"
                                           class="btn btn-warning">Edit</a>
                                        <form action="jenis/{{$jenis->id}}" method="POST">
                                            {{ csrf_field() }}
                                            {{method_field('DELETE')}}
                                            <button type="submit" class="btn btn-danger">Hapus</button>
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
            {{$list_jenis->links()}}
            <a href="{{url('jenis/create')}}" class="btn btn-success">Tambahkan Jenis Barang</a>
        </div>
    @else
        <div class="col-12 mb-4">
            <div class="hero bg-warning text-white">
                <div class="hero-inner">
                    <h2>Data Jenis Barang Tidak Ada</h2>
                    <p class="lead">Sistem Tidak Menemukan Jenis Barang Apapun,Silahkan Tambahkan Jenis Barang.</p>
                    <div class="mt-4">
                        <a href="{{url('jenis/create')}}" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="far fa-user"></i> Tambah Jenis</a>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
@stop

@section('footer')
    @include('footer')
@stop