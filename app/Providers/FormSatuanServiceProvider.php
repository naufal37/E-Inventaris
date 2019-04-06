<?php

namespace App\Providers;

use function foo\func;
use Illuminate\Support\ServiceProvider;
use App\Satuan;

class FormSatuanServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('satuan/satuan',function($view){
            $view->with('list_satuan',Satuan::orderBy('satuan','ASC')->paginate(5));
            $view->with('jumlah_satuan', Satuan::all()->count());
//            $list_satuan = Satuan::orderBy('satuan','ASC')->paginate(5);

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
