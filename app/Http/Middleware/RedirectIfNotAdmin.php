<?php

namespace App\Http\Middleware;
use Session;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfNotAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!(Auth::user()->level=='admin')){
            Session::flash('flash_message','Anda Tidak Memiliki Hak Akses');
            Session::flash('hapus',true);
            return redirect('barang');
        };
        return $next($request);
    }
}
