<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableJenis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenis', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('jenis_barang',30);
            $table->timestamps();
        });

        Schema::table('barang',function (Blueprint $table)
        {
            $table->foreign('id_jenis')->references('id')->on('jenis')->onDelete('cascade')->onUpdate('cascade');

        });

        Schema::table('jenis', function (Blueprint $table)
        {
            DB::table('jenis')->
            insert(['id'=>null, 'jenis_barang'=>'Elektronik']);
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
            $table->dropForeign('barang_id_jenis_foreign');
        });
        Schema::dropIfExists('jenis');
    }
}
