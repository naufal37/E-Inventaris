<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Jenis;
use Illuminate\Support\Facades\Session;

class JenisController extends Controller

{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('admin',['except'=>['index','show']]);

    }
    public function index(){
        return view('jenis.jenis');
    }

    public function create(){
        return view('jenis.create');
    }

    public function store(Request $request){
        $input = $request->all();
        $this->validate($request,[
            'jenis_barang'=>'required|string|unique:jenis,jenis_barang, '.$request->input('id'),
        ]);
        Jenis::create($input);
        Session::flash('flash_message','Jenis Telah Berhasil Di Tambahkan!');

        return redirect('jenis');
    }

    public function show($id){
        $detail = Jenis::findOrFail($id);
        return view('jenis.detail', compact('detail'));
    }

    public function edit($id){
        $jenis = Jenis::findOrFail($id);
        return view('jenis.edit',compact('jenis'));
    }
    public function update($id,Request $request){
        $jenis = Jenis::findOrFail($id);
        $this->validate($request,[
            'jenis_barang'=>'required|string|unique:jenis,jenis_barang, '.$request->input('id'),
        ]);
        $jenis->update($request->all());

        Session::flash('flash_message','Jenis Telah Berhasil Di Edit!');
        Session::flash('edit',true);
        return redirect('jenis');
    }


    public function destroy($id){
        $jenis = Jenis::findOrFail($id);
        $jenis->delete();
        Session::flash('flash_message','Jenis Telah Berhasil Di Hapus!');
        Session::flash('hapus',true);
        return redirect('jenis');
    }


}


