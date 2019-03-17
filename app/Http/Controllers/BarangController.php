<?php

namespace App\Http\Controllers;

use App\Ruangan;
use Illuminate\Http\Request;
use App\Barang;
use Validator;
use App\Suplier;

class BarangController extends Controller
{
    public function index(){

        $list_barang = Barang::orderBy('id','asc')->paginate(5);
        $list_ruangan = Ruangan::all();
        $jumlah_barang = $list_barang->count();
        $jumlah_ruangan = $list_ruangan->count();
        return view('barang/barang',compact('list_barang','jumlah_barang','jumlah_ruangan'));
    }

    public function create(){
//        $list_ruangan = Ruangan::lists('nama_ruangan','id');
        return view('barang/create',compact('list_ruangan'));
    }

    public function store(Request $request){
        $input = $request->all();
        $validator = Validator::make($input,[
            'nama_barang' => 'required|string|max:50|unique:barang,nama_barang',
            'kondisi_barang' => 'required|string',
            'jumlah'=>'required|string',
            'kode_barang'=>'required|string|unique:barang,kode_barang',
            'satuan'=>'required|string',
            'jenis'=>'required|string',
            'suplier'=>'sometimes',
            'tanggal_masuk'=>'required|date',
        ]);

        if ($validator->fails()){
            return redirect('barang/tambah')->withInput()->withErrors($validator);
        }
        $barang = Barang::create($input);

        $suplier = new Suplier;

        $suplier->suplier = $request->input('suplier');

        $barang->suplier()->save($suplier);

        return redirect('barang');

    }
    public function detail($id){
        $detail = Barang::findOrFail($id);
        $tanggal = $this->tanggal($detail->tanggal_masuk->format('d-m-Y'));
        return view('barang.detail',compact('detail','tanggal'));
    }

    public function tanggal($tanggal){
        $pecah = explode('-',$tanggal);
        $bulan = ['01'=>'januari','02'=>'Februari','03'=>'Maret','04'=>'April','05'=>'Mei','06'=>'Juni','07'=>'Juli','08'=>'Agustus','09'=>'September','10'=>'Oktober','11'=>'November','12'=>'Desember'];
        return $pecah[0].'-'.$bulan[$pecah[1]].'-'.$pecah[2];
    }

    public function edit($id){
        $barang = Barang::findOrFail($id);
        $barang->suplier = $barang->suplier->suplier;
        return view('barang.edit',compact('barang'));
    }

    public function update($id,Request $request){
        $barang = Barang::findOrFail($id);
        $input = $request->all();

        $validator = Validator::make($input,[
            'nama_barang' => 'required|string|max:50|unique:barang,nama_barang, '.$request->input('id'),
            'kondisi_barang' => 'required|string',
            'jumlah'=>'required|string',
            'kode_barang'=>'required|string|unique:barang,kode_barang, '.$request->input('id'),
            'satuan'=>'required|string',
            'suplier'=>'sometimes',
            'jenis'=>'required|string',
            'tanggal_masuk'=>'required|date',
        ]);

        if ($validator->fails()){
            return redirect('barang/'.$id.'/edit')->withInput()->withErrors($validator);
        }
        $barang->update($request->all());

        $suplier = $barang->suplier; //ini mencari table nya kemudian di deklarasi kan
        $suplier->suplier = $request->input('suplier'); // ini mendeklarasikan kolom dari table yang sudah di deklarasikan di variabel atas kemudian menyimpannya
        $barang->suplier()->save($suplier);

        return redirect('barang/'.$barang->id);
    }

    public function destroy($id){
        $barang = Barang::findOrFail($id);
        $barang->delete();
        return redirect('barang');
    }

    public function tesCollection(){
        $barang = Barang::all()->take(2)->pluck('nama_barang');
        return $barang;

    }

    public function dateMutator(){
        $barang = Barang::findOrFail(10);
        dd($barang->created_at->age);
    }

}
