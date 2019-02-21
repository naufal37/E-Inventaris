<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_barang',50);
            $table->enum('kondisi_barang',['Tersedia','Rusak','Hilang']);
            $table->integer('jumlah');
            $table->string('kode_barang',10)->unique();
            $table->string('satuan',10);
            $table->string('jenis',20);
            $table->date('tanggal_masuk');
            $table->text('keterangan')->nullable(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang');
    }
}
