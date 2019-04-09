<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pinjaman extends Model
{
    public $table = 'pinjaman';
    public $fillable = [

        'id_barang',
        'jumlah',
        'peminjam',
        'status',
    ];
    public function barang()
    {
        return $this->belongsTo('App\Barang','id_barang');
    }
}
