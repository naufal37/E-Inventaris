<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Jenis extends Model
{
    public $table = 'jenis';
    public $fillable = [
      'jenis_barang'
    ];

    public function barang(){
        return $this->hasMany('App\Barang','id_jenis');
    }
}
