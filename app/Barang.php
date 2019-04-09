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
        'id_satuan',
        'id_jenis',
        'id_ruangan',
        'tanggal_masuk',
        'keterangan',
        'foto',
        ];
    public $dates = [
        'tanggal_masuk',
    ];

    public function getNamaBarangAttribute($nama_barang)
    {
        return ucfirst($nama_barang);
    }

    public function scopeRuangan($query, $id_ruangan)
    {
        return $query->where('id_ruangan',$id_ruangan);
    }

    public function scopeJenis($query, $id_jenis)
    {
        return $query->where('id_jenis',$id_jenis);
    }

    public function suplier()
    {
        return $this->hasOne('App\Suplier','id_barang');
    }

    public function jenis()
    {
        return $this->belongsTo('App\Jenis','id_jenis');
    }

    public function ruangan()
    {
        return $this->belongsTo('App\Ruangan','id_ruangan');
    }

    public function satuan()
    {
        return $this->belongsTo('App\Satuan','id_satuan');
    }

    public function pinjaman(){
        return $this->hasMany('App\Pinjaman','id_barang');
    }
};