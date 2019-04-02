<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ruangan;
use Validator;

class RuanganController extends Controller
{
    public function index(){
        $list_ruangan = Ruangan::orderBy('nama_ruangan','desc')->Paginate(5);
        $jumlah_ruangan = $list_ruangan->count();
        return view('ruangan/ruangan',compact('list_ruangan','jumlah_ruangan'));
    }

    public function create(){
        return view('ruangan.create');
    }

    public function store(Request $request){
        $input = $request->all();
        $validator = Validator::make($input,[
            'nama_ruangan'=>'required|string',
            'kode_ruangan'=>'required|string|max:9|unique:ruangan,kode_ruangan, '.$request->input('id'),
            'petugas_ruangan'=>'required',
            'lokasi'=>'required',
        ]);
        if ($validator->fails()){
            return redirect('ruangan/tambah')->withInput()->withErrors($validator);
        }
        Ruangan::create($input);
        return redirect('ruangan');
    }

    public function detail($id){
        $detail = Ruangan::findOrFail($id);
        return view('ruangan.detail', compact('detail'));
    }

    public function edit($id){
        $ruangan = Ruangan::findOrFail($id);
        return view('ruangan.edit',compact('ruangan'));
    }
    public function update($id,Request $request)
    {
        $ruangan = Ruangan::findOrFail($id);
        $input = $request->all();
        $validator = Validator::make($input,[
            'nama_ruangan'=>'required|string|unique:ruangan,nama_ruangan,'.$request->input('id'),
            'kode_ruangan'=>'required|string|max:9|unique:ruangan,kode_ruangan, '.$request->input('id'),
            'petugas_ruangan'=>'required|string',
            'lokasi'=>'required',
        ]);
        if ($validator->fails()){
            return redirect('ruangan/'.$id.'/edit')->withInput()->withErrors($validator);
        }
        else
        $ruangan->update($request->all());
        return redirect('ruangan/'.$ruangan->id);
    }

    public function destroy($id)
    {
        $ruangan = Ruangan::findOrFail($id);
        $ruangan->delete();
        return redirect('ruangan');
    }


}
