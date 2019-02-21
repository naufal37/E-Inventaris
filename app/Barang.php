<?php

namespace App;

use function foo\func;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    public $table = 'barang';
    public $fillable = [
        'nama_barang',
        'kondisi_barang',
        'jumlah',
        'kode_barang',
        'satuan',
        'jenis',
        'tanggal_masuk',
        'keterangan',
        ];
    public $dates = [
        'tanggal_masuk',
    ];

    public function getNamaBarangAttribute($nama_barang)
    {
        return ucfirst($nama_barang);
    }

};