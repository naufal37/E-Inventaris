<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Request;

class LaravelAppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $halaman = '';
        if (Request::segment(1) == 'barang') {
            $halaman = 'barang';
        }
        if (Request::segment(1) == 'ruangan') {
            $halaman = 'ruangan';
        }
        if (Request::segment(1) == 'jenis') {
            $halaman = 'jenis';
        }
        if (Request::segment(1) == 'satuan') {
            $halaman = 'satuan';
        }
        if (Request::segment(1) == 'pengguna') {
            $halaman = 'pengguna';
        }
        if (Request::segment(1) == 'pinjaman') {
            $halaman = 'pinjaman';
        }
        view()->share('halaman', $halaman);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
