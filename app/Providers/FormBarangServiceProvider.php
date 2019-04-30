<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Jenis;
use App\Ruangan;
use App\Satuan;
use App\Barang;
use Request;

class FormBarangServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('barang/form',function ($view)
        {
            $view->with('list_jenis',Jenis::all());
            $view->with('list_ruangan',Ruangan::all());
            $view->with('list_satuan',Satuan::all());
        });
        view()->composer('barang/barang',function ($view)
        {
            $view->with('list_ruangan',Ruangan::all());
            $view->with('jumlah_ruangan',Ruangan::all()->count());
        });


        view()->composer('barang/search',function ($view)
        {
//            $view->with('list_ruangan',Ruangan::pluck('nama_ruangan','id'));
            $view->with('list_ruangan',Ruangan::all());

            $view->with('list_jenis',Jenis::all());

        });

//
//

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
