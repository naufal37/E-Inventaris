<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Jenis;

class JenisController extends Controller

{
    public function index(){
        $list_jenis = Jenis::orderBy('jenis_barang','desc')->Paginate(5);
        $jumlah_jenis = $list_jenis->count();
        return view('jenis.jenis',compact('list_jenis','jumlah_jenis'));
    }

    public function create(){
        return view('jenis.create');
    }

    public function store(Request $request){
        $input = $request->all();
        $validator = Validator::make($input,[
            'jenis_barang'=>'required|string|unique:jenis,jenis_barang, '.$request->input('id'),
        ]);
        if ($validator->fails()){
            return redirect('jenis/tambah')->withInput()->withErrors($validator);
        }
        Jenis::create($input);
        return redirect('jenis');
    }

    public function detail($id){
        $detail = Jenis::findOrFail($id);
        return view('jenis.detail', compact('detail'));
    }

    public function edit($id){
        $jenis = Jenis::findOrFail($id);
        return view('jenis.edit',compact('jenis'));
    }
    public function update($id,Request $request){
        $jenis = Jenis::findOrFail($id);
        $input = $request->all();
        $validator = Validator::make($input,[
            'jenis_barang'=>'required|string|unique:jenis,jenis_barang, '.$request->input('id'),
        ]);
        if ($validator->fails()){
            return redirect('jenis/'.$id.'/edit')->withInput()->withErrors($validator);
        }
        else
            $jenis->update($request->all());
        return redirect('jenis/'.$jenis->id);
    }


    public function destroy($id){
        $jenis = Jenis::findOrFail($id);
        $jenis->delete();
        return redirect('jenis');
    }


}


