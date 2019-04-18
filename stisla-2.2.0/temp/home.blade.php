@extends('template')
@section('dasar')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Selamat Datang,{{Auth::User()->name}}</h1>
            </div>

            <div class="section-body">
                <div class="hero bg-primary text-white">
                    <div class="hero-inner">
                        <h2>Selamat Datang, {{Auth::User()->name}}</h2>
                        <p class="lead">Anda Telah Berhasil Login! Silahkan Pilih Menu Navigasi Di Samping.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop