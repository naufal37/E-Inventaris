<?php

namespace App\Http\Controllers;

use App\Satuan;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Session;


class SatuanController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('admin',['except'=>['index','show']]);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $list_satuan = Satuan::orderBy('satuan','ASC')->paginate(5);
//        $jumlah_satuan = $list_satuan->count();
        return view('satuan.satuan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('satuan.create');
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
        $this->validate($request,[
            'satuan'=>'required|string',
        ]);
        Satuan::create($input);
        Session::flash('flash_message','Satuan Telah Berhasil Di Tambah!');

        return redirect('satuan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = Satuan::findOrFail($id);
        return view('satuan.detail',compact('detail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $satuan = Satuan::findOrFail($id);

        return view('satuan.edit',compact('satuan'));
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
        $satuan = Satuan::findOrFail($id);
        $input = $request->all();

        $this->validate($request,[
            'satuan'=>'required|string|unique:satuan,satuan, '.$request->input('id'),
        ]);

        $satuan->update($input);
        Session::flash('flash_message','Satuan Telah Berhasil Di Edit!');
        Session::flash('edit',true);
        return redirect('satuan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $satuan = Satuan::findOrFail($id);
        $satuan->delete();
        Session::flash('flash_message','Satuan Telah Berhasil Di Hapus!');
        Session::flash('hapus',true);
        return redirect('satuan');
    }
}
