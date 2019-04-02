<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Satuan extends Model
{
    public $table = 'satuan';
    public $fillable = [
        'id',
        'satuan',
    ];

    public function barang(){
        return $this->hasMany('App\Barang','id_satuan');
    }
}
