<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    public $table = 'ruangan';
    public $fillable =[
        'id','nama_ruangan','kode_ruangan','lokasi','petugas_ruangan'
    ];

    public function scopeLokasi($query,$lokasi)
    {
        return $query->where('lokasi',$lokasi);
    }

    public function barang(){
        return $this->hasMany('App\Barang','id_ruangan');
    }
}
