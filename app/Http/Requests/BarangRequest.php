<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use App\Http\Requests\Request;

class BarangRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        //mengecek method patch atau post
        if($this->method() == 'PATCH'){
            $nama_barang_rules = 'required|string|max:50|unique:barang,nama_barang, '.$this->get('id');
            $kode_barang_rules ='required|string|unique:barang,kode_barang, '.$this->get('id');
        }
        else{
            $nama_barang_rules = 'required|string|max:50|unique:barang,nama_barang';
            $kode_barang_rules ='required|string|unique:barang,kode_barang';
        }

        return [
            'nama_barang' => $nama_barang_rules,
            'kondisi_barang' => 'required|string',
            'jumlah'=>'required|numeric',
            'kode_barang'=>$kode_barang_rules,
            'id_satuan'=>'required|numeric',
            'id_jenis'=>'required|integer',
            'id_ruangan'=>'required|integer',
            'suplier'=>'required|string',
            'tanggal_masuk'=>'nullable|date',
        ];
    }
}
