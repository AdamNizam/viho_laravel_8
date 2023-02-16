<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurviorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survior', function (Blueprint $table) {
            $table->id('id_survior');
            $table->unsignedBigInteger('id_user'); 
            $table->foreign('id_user')->references('id_user')->on('users');
            $table->unsignedBigInteger('id_kecamatan'); 
            $table->foreign('id_kecamatan')->references('id_kecamatan')->on('kecamatan');
            $table->unsignedBigInteger('id_desa'); 
            $table->foreign('id_desa')->references('id_desa')->on('desa');
            $table->string('nama_lengkap',100);
            $table->string('nomor_sk',15);
            $table->bigInteger('nik');
            $table->string('alamat',100);
            $table->string('email')->unique();
            $table->bigInteger('no_hp');
            $table->string('file_sk',100);
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
        Schema::dropIfExists('survior');
    }
}
