<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRuangan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ruangan', function (Blueprint $table) {
            $table->increments('id');
//            $table->string('nama_ruangan',50);
            $table->string('nama_ruangan',50);
            $table->string('kode_ruangan',10)->unique();
            $table->string('lokasi',20);
            $table->string('petugas_ruangan',50);
            $table->timestamps();
        });

        Schema::table('barang',function (Blueprint $table){
            $table->foreign('id_ruangan')
                ->references('id')
                ->on('ruangan')
                ->onDelete('cascade')
                ->onUpdate('cascade');



        });

        Schema::table('ruangan', function (Blueprint $table)
        {
            DB::table('ruangan')->
            insert(['id'=>null, 'nama_ruangan'=>'Gudang',
                'kode_ruangan'=>'GDN-001',
                'lokasi'=>'Kampus Depan',
                'petugas_ruangan'=>'Naufal']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('barang',function (Blueprint $table){
            $table->dropForeign('barang_kode_ruangan_foreign');
        });
        Schema::dropIfExists('ruangan');
    }
}
