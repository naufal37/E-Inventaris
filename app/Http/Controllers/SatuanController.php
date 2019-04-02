<?php

namespace App\Http\Controllers;

use App\Satuan;
use Illuminate\Http\Request;
use Validator;

class SatuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_satuan = Satuan::orderBy('satuan','ASC')->paginate(5);
        $jumlah_satuan = $list_satuan->count();
        return view('satuan.satuan',compact('list_satuan','jumlah_satuan'));
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
        $validator = Validator::make($input,[
            'satuan'=>'required|string',
        ]);
        if($validator->fails()){
            return redirect('satuan/tambah')->withErrors($validator)->withInput();
        }
        $satuan = Satuan::create($input);
        return redirect('satuan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
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

        $validator = Validator::make($input,[
            'satuan'=>'required|string|unique:satuan,satuan, '.$request->input('id'),
        ]);
        if($validator->fails()){
            return redirect('satuan/'.$id.'/edit')->withErrors($validator)->withInput();
        }
        $satuan->update($input);
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
        return redirect('satuan');
    }
}
