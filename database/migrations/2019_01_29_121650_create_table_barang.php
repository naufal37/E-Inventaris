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
            $table->enum('kondisi_barang',['Tersedia','Rusak','Hilang','Habis']);
            $table->integer('jumlah');
            $table->integer('id_jenis')->unsigned();
            $table->integer('id_ruangan')->unsigned();
            $table->string('kode_barang',10)->unique();

            $table->integer('id_satuan')->unsigned();

            $table->date('tanggal_masuk')->nullable();
            $table->text('keterangan')->nullable(true);
            $table->string('foto')->nullable();

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
