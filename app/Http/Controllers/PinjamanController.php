<?php

namespace App\Http\Controllers;

use App\Barang;
use App\Pinjaman;
use App\Ruangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use function MongoDB\BSON\fromJSON;
use Illuminate\Support\Facades\Session;



class PinjamanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!(Auth::User()->level == 'siswa')){
            $index = Pinjaman::all();

        }
        else{
            $index = Pinjaman::where('peminjam','=',Auth::User()->name)->get();
        }

        $jumlah_pinjaman = $index->count();
        return view('pinjaman.pinjaman',compact('index','jumlah_pinjaman'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $bind2 = Barang::findOrFail($id);

        return view('pinjaman.create',compact('bind2'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $input = $request->all();
        if ($input['jumlah']>$request->input('stok'))
        {
            Session::flash('flash_message','Jumlah Pesanan Tidak Boleh Melebihi Jumlah Stok');
            Session::flash('hapus',true);
            return redirect('pinjaman/create/'.$request->input('id'));
        }
        $barang = Barang::findorFail($request->input('id_barang'));

        if($request->input('status')=='acc')
        {
        $barang->update(['jumlah'=>$barang->jumlah - $request->input('jumlah')]);}
        elseif ($request->input('status')=='kembali')
        {
            $barang->update(['jumlah'=>$barang->jumlah + $request->input('jumlah')]);
        }
        $pinjaman = array_except($input,['stok']);
        Pinjaman::create($pinjaman);
        return redirect('pinjaman');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bind = Pinjaman::findOrFail($id);
        return view('pinjaman.edit',compact('bind'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = Pinjaman::findOrFail($id);
        $barang = Barang::findorFail($request->input('id_barang'));

            $pinjaman = $request->all();
    if($request->input('status')=='acc')
    {
            if ($request->input('jumlah')>$barang->jumlah)
            {
                Session::flash('flash_message','Jumlah Pesanan Tidak Boleh Melebihi Jumlah Stok');
                Session::flash('hapus',true);
                return redirect('pinjaman/'.$id.'/edit');
            }
    }

    if($request->input('status')=='acc')
    {
        $barang->update(['jumlah'=>$barang->jumlah - $request->input('jumlah')]);
        $input->update($pinjaman);
    }


    elseif ($request->input('status')=='kembali')
    {
        $barang->update(['jumlah'=>$barang->jumlah + $request->input('jumlah')]);
        $input->update($pinjaman);
    }

    return redirect('pinjaman');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pinjaman = Pinjaman::findOrFail($id);
        $pinjaman->delete();
        return redirect('pinjaman');
    }

    public function pengembalian(Request $request,$id)
    {
        $bind3 = Pinjaman::findOrFail($id);
        return view('pinjaman.pengembalian',compact('bind3'));
    }

    public function simpanpengembalian(Request $request,$id)
    {
        $input = Pinjaman::findOrFail($id);
        $barang = Barang::findOrFail($request->input('id_barang'));

        $input->update(['jumlah'=>$input->jumlah - $request->input('jumlah')]);
        $barang->update(['jumlah'=>$barang->jumlah + $request->input('jumlah')]);
        return redirect('pinjaman');
    }

}
