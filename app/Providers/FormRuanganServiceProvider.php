<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Ruangan;
use Illuminate\Http\Request;
class FormRuanganServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('ruangan/search',function ($view){
            $view->with('nama_lokasi',Ruangan::all());
        });
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
