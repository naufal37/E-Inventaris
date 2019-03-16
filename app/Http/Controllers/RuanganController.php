<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ruangan;
use Validator;

class RuanganController extends Controller
{
    public function index(){
        $list_ruangan = Ruangan::orderBy('id','asc')->Paginate(5);
        $jumlah_ruangan = $list_ruangan->count();
        return view('ruangan/ruangan',compact('list_ruangan','jumlah_ruangan'));
    }

    public function create(){
        return view('ruangan.create');
    }

    public function store(Request $request){
        $input = $request->all();
        Ruangan::create($input);
        return redirect('ruangan');
    }

    public function detail($id){
        $detail = Ruangan::findOrFail($id);
        return view('ruangan.detail', compact('detail'));
    }

    public function destroy($id){
        $ruangan = Ruangan::findOrFail($id);
        $ruangan->delete();
        return redirect('ruangan');
    }
}
