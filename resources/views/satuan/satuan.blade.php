@extends('template')
@section('main')
    <div id="satuan">
        <h2> Daftar satuan satuan </h2>
        @include('_partial.flash_message')
        @if ($jumlah_satuan!=0)
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-md">
                        <tr>
                            <th>Nomer</th>
                            <th>Satuan</th>
                            <th>Aksi</th>
                        </tr>
                        <?php $i = 1?>
                        @foreach($list_satuan as $satuan)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$satuan->satuan}}</td>
                                @if(Auth::check())
                                    @if((Auth::User()->level=='admin'))
                                        <td>
                                            <a href="{{url('satuan/'.$satuan->id.'/edit')}}"
                                               class="btn btn-warning">Edit</a>
                                            <form action="satuan/{{$satuan->id}}" method="POST">
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
                {{$list_satuan->links()}}
                <a href="{{url('satuan/create')}}" class="btn btn-success">Tambahkan Satuan</a>
            </div>
        @else
            <div class="col-12 mb-4">
                <div class="hero bg-warning text-white">
                    <div class="hero-inner">
                        <h2>Data Satun Tidak Ada</h2>
                        <p class="lead">Sistem Tidak Menemukan Satuan Apapun,Silahkan Tambahkan Satuan.</p>
                        <div class="mt-4">
                            <a href="{{url('satuan/create')}}"
                               class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="far fa-user"></i>
                                Tambah Satuan</a>
                        </div>
                    </div>
                </div>
            </div>
    @endif
@stop