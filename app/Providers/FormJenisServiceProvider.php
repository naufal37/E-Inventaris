<?php

namespace App\Providers;

use function foo\func;
use Illuminate\Support\ServiceProvider;
use App\Jenis;
class FormJenisServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('jenis/jenis',function($view) {
            $view->with('i',1);
            $view->with('list_jenis',Jenis::orderBy('jenis_barang', 'desc')->Paginate(5));
            $view->with('jumlah_jenis',Jenis::all()->count());
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
