<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ruangan;
use Validator;
use Illuminate\Support\Facades\Session;


class RuanganController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('admin',['except'=>['index','cari','show']]);
    }

    public function index(){
        $list_ruangan = Ruangan::orderBy('nama_ruangan','desc')->Paginate(5);
        $jumlah_ruangan= Ruangan::all()->count();
        return view('ruangan/ruangan',compact('list_ruangan','jumlah_ruangan'));
    }

    public function create(){
        return view('ruangan.create');
    }

    public function store(Request $request){
        $input = $request->all();
        $this->validate($request,[
            'nama_ruangan'=>'required|string',
            'kode_ruangan'=>'required|string|max:9|unique:ruangan,kode_ruangan, '.$request->input('id'),
            'petugas_ruangan'=>'required',
            'lokasi'=>'required',
        ]);
        Ruangan::create($input);
        Session::flash('flash_message','Ruangan Telah Berhasil Di Tambahkan!');

        return redirect('ruangan');
    }

    public function show($id){
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
        $this->validate($request,[
            'nama_ruangan'=>'required|string|unique:ruangan,nama_ruangan,'.$request->input('id'),
            'kode_ruangan'=>'required|string|max:9|unique:ruangan,kode_ruangan, '.$request->input('id'),
            'petugas_ruangan'=>'required|string',
            'lokasi'=>'required',
        ]);

        $ruangan->update($request->all());
        Session::flash('flash_message','Ruangan Telah Berhasil Di Edit!');
        Session::flash('edit',true);
        return redirect('ruangan');
    }

    public function destroy($id)
    {
        $ruangan = Ruangan::findOrFail($id);
        $ruangan->delete();
        Session::flash('flash_message','Ruangan Telah Berhasil Di Hapus!');
        Session::flash('hapus',true);
        return redirect('ruangan');
    }

    public function cari(Request $request)
    {
        $kata_kunci = trim($request->input('kata_kunci'));
        $lokasi = trim($request->input('lokasi'));

        //Query Mencarinya
        $query = Ruangan::where('nama_ruangan', 'like', '%' . $kata_kunci . '%')
            ->orWhere('petugas_ruangan', 'like', '%' . $kata_kunci . '%');


        //jika ada lokasi,tambahkan query $lokasi,jika tidak ada,berikan null
        (!empty($lokasi)) ? $query->Lokasi($lokasi) : '';



        //paging hasil query
        $list_ruangan = $query->paginate(2);


        //Pagination URL Links
        $pagination_lokasi = (!empty($lokasi)) ? $list_ruangan->appends(['lokasi' => $lokasi]) : '';
        $pagination = $list_ruangan->appends(['kata_kunci' => $kata_kunci]);
        $jumlah_ruangan = $list_ruangan->count();
        return view('ruangan.ruangan', compact('list_ruangan', 'pagination', 'pagination_lokasi', 'jumlah_ruangan', 'kata_kunci', 'lokasi'));


    }

}
