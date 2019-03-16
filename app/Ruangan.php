<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    public $table = 'ruangan';
    public $fillable = [

        'nama_ruangan',
        'kode_ruangan',
        'petugas_ruangan',
    ];
}
