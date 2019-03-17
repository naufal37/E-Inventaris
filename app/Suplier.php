<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suplier extends Model
{
    public $table = 'suplier';
    public $primaryKey = 'id_barang';
    public $fillable = [
        'id_barang',
        'suplier',
        ];

    public function barang(){
        return $this->belongsTo('App\Barang','id_barang');
        
    }
    
}
