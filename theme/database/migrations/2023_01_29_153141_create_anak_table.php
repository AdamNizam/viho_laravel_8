<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnakTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anak', function (Blueprint $table) {
            $table->id('id_anak');            
            $table->unsignedBigInteger('id_survior'); 
            $table->foreign('id_survior')->references('id_survior')->on('survior');
            $table->unsignedBigInteger('id_pekerjaan_wali'); 
            $table->foreign('id_pekerjaan_wali')->references('id_pekerjaan')->on('pekerjaan');
            $table->unsignedBigInteger('id_kecamatan'); 
            $table->foreign('id_kecamatan')->references('id_kecamatan')->on('kecamatan');
            $table->unsignedBigInteger('id_desa'); 
            $table->foreign('id_desa')->references('id_desa')->on('desa');
            $table->unsignedBigInteger('id_dusun'); 
            $table->foreign('id_dusun')->references('id_dusun')->on('dusun');
            $table->unsignedBigInteger('id_prestasi_formal'); 
            $table->foreign('id_prestasi_formal')->references('id_prestasi_formal')->on('prestasi_formal');
            $table->unsignedBigInteger('id_prestasi_non_formal'); 
            $table->foreign('id_prestasi_non_formal')->references('id_prestasi_non_formal')->on('prestasi_non_formal');
            $table->unsignedBigInteger('id_pendidikan'); 
            $table->foreign('id_pendidikan')->references('id_pendidikan')->on('kelas_pendidikan');
            // $table->bigInteger('no_kk');
            // $table->bigInteger('no_nik');
            $table->string('alamat',100);
            $table->string('jenis_kelamin',100);
            $table->string('tempat_lahir',100);
            // $table->date('tgl_lahir');
            // $table->integer('usia',2);
            $table->string('nama_wali',100);
            $table->string('alamat_sekolah',100);
            // $table->enum('status_anak',['Yatim','Piatu','Yatim Piatu']);
            $table->string('foto_anak',100);
            // $table->enum('status_verifikasi',[0,1]);
            $table->string('latitude');
            $table->string('longitude');
            $table->string('tahun');
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
        Schema::dropIfExists('anak');
    }
}
