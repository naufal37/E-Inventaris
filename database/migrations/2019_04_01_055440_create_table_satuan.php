<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSatuan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('satuan', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('satuan',10);
            $table->timestamps();
        });

        Schema::table('barang',function (Blueprint $table){
            $table->foreign('id_satuan')
                ->references('id')
                ->on('satuan')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::table('satuan', function (Blueprint $table)
        {
            DB::table('satuan')->
            insert(['id'=>null, 'satuan'=>'Buah']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_satuan');
        Schema::table('barang',function (Blueprint $table){
            $table->dropForeign('barang_id_satuan_foreign');
        });
    }
}
