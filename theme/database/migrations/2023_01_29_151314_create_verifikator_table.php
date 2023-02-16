<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVerifikatorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verifikator', function (Blueprint $table) {
            $table->id('id_verifikator');
            $table->string('nama_lenkap',100);
            $table->string('nomor_sk',15);
            $table->bigInteger('nik');
            $table->string('alamat',100);
            $table->string('email')->unique();
            $table->bigInteger('no_hp');
            $table->string('file_sk',100);
            $table->unsignedBigInteger('id_user'); 
            $table->foreign('id_user')->references('id_user')->on('users');
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
        Schema::dropIfExists('verifikator');
    }
}
