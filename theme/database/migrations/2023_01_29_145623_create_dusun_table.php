<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDusunTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dusun', function (Blueprint $table) {
            $table->id('id_dusun');
            $table->unsignedBigInteger('id_kecamatan'); 
            $table->foreign('id_kecamatan')->references('id_kecamatan')->on('kecamatan');
            $table->unsignedBigInteger('id_desa'); 
            $table->foreign('id_desa')->references('id_desa')->on('desa');
            $table->string('nama_dusun');
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
        Schema::dropIfExists('dusun');
    }
}
