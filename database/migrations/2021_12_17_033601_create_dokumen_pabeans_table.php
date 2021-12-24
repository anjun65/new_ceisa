<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDokumenPabeansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokumen_pabeans', function (Blueprint $table) {
            $table->id();

            $table->integer('user_id');
            $table->string('kode_dokumen_pabean');
            $table->string('nomor_aju_pabean');
            $table->string('nomor_pendaftaran');
            $table->string('tanggal_pendaftaran');
            $table->string('jalur');
            $table->string('nama_perusahaan');
            $table->string('kantor_pabean');

            
            $table->string('entitas');
            $table->string('jenis_pemberitahuan');
            $table->string('asal_barang');
            $table->string('tujuan_barang');
            $table->string('jenis_dokumen');

            
            $table->string('status');
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
        Schema::dropIfExists('dokumen_pabeans');
    }
}
