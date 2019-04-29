@extends('template')
@section('main')
    <div class="col-12 mb-4">
        <div class="hero bg-success text-white">
            <div class="hero-inner">
                <h2>Selamat Datang</h2>
                <p class="lead">Anda Telah Berhasil Login.</p>
                <div class="mt-4">
                    <a href="{{url('barang')}}" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="far fa-user"></i> Tambah Barang</a>
                </div>
            </div>
        </div>
    </div>
@stop