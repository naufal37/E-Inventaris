<?php

namespace App\Http\Controllers;

use App\Http\Requests\BarangRequest;
use App\Ruangan;
use App\Satuan;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use App\Barang;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Validator;
use App\Suplier;
use App\Jenis;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use PdfReport;

class BarangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin', ['except' => ['index', 'cari', 'show']]);

    }

    public function index()
    {
        $list_barang = Barang::orderBy('nama_barang', 'asc')->paginate(2);
        $jumlah_barang = Barang::all()->count();
        $list_ruangan = Ruangan::pluck('nama_ruangan', 'id');
        return view('barang/barang', compact('list_barang', 'jumlah_barang', 'list_ruangan'));
    }

    public function create()
    {
        return view('barang/create');
    }

    public function store(BarangRequest $request)
    {
        $input = $request->all();

        //==========================================================================>

//        if($request->hasFile('foto')){
//            $foto = $request->file('foto');
//            $ext = $foto->getClientOriginalExtension();
//
//            if($request->file('foto')->isValid()){
//                $foto_name = date('d-m-Y-H:i:s').".$ext";
//                $upload_path = 'fotoupload';
//                $request->file('foto')->move($upload_path,$foto_name);
//                $input['foto'] = $foto_name;
//            };
//        }
        ////////////////////////////////////////////////////////
        // Belum Selesai dikarenakan ada masalah              //
        // saat mengupdate foto                               //
        // karena selalu gagal dalam proses validasi          //
        // Dengan Output menyatakan bahwa file yang           //
        // diupload bukanlah gambar                           //
        // setelah dihilangkan proses validasi,nama           //
        // file tidak berubah menjadi timestamp               //
        ////////////////////////////////////////////////////////
        //==========================================================================>


        //menyimpan data barang selain suplier
        $barang = Barang::create($input);

//        Menyimpan Suplier injeksi manual
        $suplier = new Suplier;
        $suplier->suplier = $request->input('suplier');
        $barang->suplier()->save($suplier);
        Session::flash('flash_message', 'Barang Telah Berhasil Di Simpan!');

        return redirect('barang');

    }

    public function show($barang)
    {
        $detail = Barang::findOrFail($barang);
        $tanggal = $this->tanggal($detail->tanggal_masuk->format('d-m-Y'));
        if ($detail->jumlah < 1) {
            $detail->update(['kondisi_barang' => 'Habis']);
        }
        return view('barang.detail', compact("detail", "tanggal"));
    }

    public function tanggal($tanggal)
    {
        $pecah = explode('-', $tanggal);
        $bulan = ['01' => 'januari', '02' => 'Februari', '03' => 'Maret', '04' => 'April', '05' => 'Mei', '06' => 'Juni', '07' => 'Juli', '08' => 'Agustus', '09' => 'September', '10' => 'Oktober', '11' => 'November', '12' => 'Desember'];
        return $pecah[0] . '-' . $bulan[$pecah[1]] . '-' . $pecah[2];
    }

    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        $barang->suplier = $barang->suplier->suplier;
        return view('barang.edit', compact('barang'));
    }

    public function update($id, BarangRequest $request)
    {
        $barang = Barang::findOrFail($id);
        $input = $request->all();
//==========================================================================>
//        if($request->hasFile('foto')){
//
//            $exist = Storage::disk('foto')->exists($barang->foto);
//            if(isset($barang->foto) && $exist)
//            {
//                $delete = Storage::disk('foto')->delete($barang->foto);
//            }
//            $foto = $request->file('foto');
//            $ext = $foto->getClientOriginalExtension();
//            if($request->file('foto')->isValid()){
//                $foto_name = date('d-m-Y-H:i:s').".$ext";
//                $upload_path = 'fotoupload';
//                $request->file('foto')->move($upload_path,$foto_name);
//                $input['foto'] = $foto_name;
//            };
//        }
        ////////////////////////////////////////////////////////
        // Belum Selesai dikarenakan ada masalah              //
        // saat mengupdate foto                               //
        // karena selalu gagal dalam proses validasi          //
        // Dengan Output menyatakan bahwa file yang           //
        // diupload bukanlah gambar                           //
        // setelah dihilangkan proses validasi,nama           //
        // file tidak berubah menjadi timestamp               //
        ////////////////////////////////////////////////////////
//==========================================================================>
        $barang->update($input);
        $suplier = $barang->suplier; //ini mencari table nya kemudian di deklarasi kan
        $suplier->suplier = $request->input('suplier'); // ini mendeklarasikan kolom dari table yang sudah di deklarasikan di variabel atas kemudian menyimpannya
        $barang->suplier()->save($suplier); //menyimpan data suplier
        Session::flash('flash_message', 'Barang Telah Berhasil Di Edit!');
        Session::flash('edit', true);

        return redirect('barang');
    }

    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();
        Session::flash('flash_message', 'Barang Telah Berhasil Di Hapus!');
        Session::flash('hapus', true);
        return redirect('barang');
    }

    public function cari(Request $request)
    {
        $kata_kunci = trim($request->input('kata_kunci'));
        $id_ruangan = $request->input('id_ruangan');
        $id_jenis = $request->input('id_jenis');

        //Query Mencarinya
        $query = Barang::where('nama_barang', 'like', '%' . $kata_kunci . '%');

        //jika ada ruangan,tambahkan query ruangan,jika tidak ada,berikan null
        (!empty($id_ruangan)) ? $query->Ruangan($id_ruangan) : '';

        //jika ada jenis,tambahkan query jenis,jika tidak ada,berikan null
        (!empty($id_jenis)) ? $query->Jenis($id_jenis) : '';

        //paging hasil query
        $list_barang = $query->paginate(2);

        //Pagination URL Links
        $pagination_ruangan = (!empty($id_ruangan)) ? $list_barang->appends(['id_ruangan' => $id_ruangan]) : '';
        $pagination_jenis = (!empty($id_jenis)) ? $list_barang->appends(['id_jenis' => $id_jenis]) : '';
        $pagination = $list_barang->appends(['kata_kunci' => $kata_kunci]);

        $jumlah_barang = $list_barang->count();
        return view('barang/barang', compact('list_barang', 'pagination', 'pagination_ruangan', 'pagination_jenis', 'jumlah_barang', 'kata_kunci', 'id_jenis', 'id_ruangan'));
    }


    public function test()
    {
        return view('barang.components-table');
    }

    public function dateMutator()
    {
    }

    public function displayreport(Request $request)
    {
        $title = "Daftar Barang";
        $kata_kunci = $request->input('kata_kunci');
        if (!empty($kata_kunci)) {
            $query = Barang::where('nama_barang', 'like', '%' . $kata_kunci . '%')->orWhere('tanggal_masuk', 'like', '%' . $kata_kunci . '%')->orWhere('kode_barang', 'like', '%' . $kata_kunci . '%');
        } else {
            $query = Barang::select('*');
        }
        $meta = ['' => ''];
        $columns = [
            'Nama Barang' => "nama_barang",
            'Kondisi Barang' => "kondisi_barang",
            'Jumlah Barang' => "jumlah",
            'Kode Barang' => "kode_barang",
            'Tanggal Masuk' => "tanggal_masuk",
        ];
        return PdfReport::of($title, $meta, $query, $columns)->stream();
    }

}
















//public function report()
//{
//    $list_barang = $this->get_data();
//    return view('barang.barang_pdf',compact('list_barang'));
//}
//public function get_data()
//{
//    $data = Barang::all();
//    return $data;
//}
//public function pdf(){
//    $pdf = App::make('dompdf.wrapper');
//    $pdf->loadHTML($this->convert());
//    return $pdf->stream();
//}
//public function convert()
//{
//    $data = $this->get_data();
//    $output =
//        '<h3 align="center"> Data Barang</h3>
//            <table width="100%"style="border-collapse: collapse;border: 0px;">
//<tr>
//    <th style="border: 1px solid;padding: 12px;" width="20%">Nama Barang</th>
//    <th style="border: 1px solid;padding: 12px;" width="20%">Kondisi Barang</th>
//    <th style="border: 1px solid;padding: 12px;" width="20%">Jumlah Barang</th>
//    <th style="border: 1px solid;padding: 12px;" width="20%">Jenis Barang</th>
//    <th style="border: 1px solid;padding: 12px;" width="20%">Satuan</th>
//    <th style="border: 1px solid;padding: 12px;" width="20%">Ruangan</th>
//    <th style="border: 1px solid;padding: 12px;" width="20%">Suplier</th>
//    <th style="border: 1px solid;padding: 12px;" width="20%">Tanggal Masuk</th>
//    <th style="border: 1px solid;padding: 12px;" width="20%">Keterangan</th>
//</tr>';
//    foreach ($data as $datas) {
//        $output.='<tr>
//                        <td> $datas->nama_barang</td>
//                        <td>{{$datas->kondisi_barang}}</td>
//                        <td>{{$datas->jumlah}}</td>
//                        <td>{{$datas->jenis->jenis_barang}}</td>
//                        <td>{{$datas->kode_barang}}</td>
//                        <td>{{$datas->ruangan->nama_ruangan}}</td>
//                        <td>{{$datas->satuan->satuan}}</td>
//                        <td>
//            @if(isset($datas->suplier->suplier))
//            {{$datas->suplier->suplier}}
//                            @else
//                                -
//                                @endif
//                        </td>
//                        <td>{{$datas->tanggal_masuk}}</td>
//                        <td>{{$datas->keterangan}}</td>
//                    </tr>';
//
//    }
//}