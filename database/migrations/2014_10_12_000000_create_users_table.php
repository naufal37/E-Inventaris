<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->enum('level',['siswa','operator','admin']);
            $table->timestamps();
            //DB::table('users')->insert(['id'=>null,'name'=>'admin','email'=>'admin@gmail.com','email_verified_at'=>null,'password'=>ENCRYPT('admin'),'remember_token'=>null,'created_at'=>null,'updated_at'=>null]);
//            DB::raw("INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `level`, `created_at`, `updated_at`) VALUES (NULL, 'admin', 'admin@gmail.com', NULL, ENCRYPT('admin'), NULL, 'admin', NULL, NULL)");
//            DB::table('users')->insert

        });
        Schema::table('users', function (Blueprint $table) {
            DB::table('users')->insert(['id'=>null,'name'=>'admin','email'=>'admin','email_verified_at'=>null,'password'=>bcrypt('admin'),'remember_token'=>null,'level'=>'admin','created_at'=>null,'updated_at'=>null]);

        });






    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
