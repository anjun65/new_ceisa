<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntitasDokumenPabeansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entitas_dokumen_pabeans', function (Blueprint $table) {
            $table->id();

            $table->string('nomor_pengajuan_dokumen');
            $table->string('npwp_importir');
            $table->string('nama_importir');
            $table->string('alamat_importir');
            $table->string('API');
            $table->string('NIB');
            $table->string('status');

            $table->string('npwp_pemilik');
            $table->string('nama_pemilik');
            $table->string('alamat_pemilik');

            $table->string('npwp_terpusat');
            $table->string('nama_terpusat');
            $table->string('alamat_terpusat');

            $table->string('nama_pengirim');
            $table->string('alamat_pengirim');
            $table->string('negara_pengirim');

            $table->string('nama_penjual');
            $table->string('alamat_penjual');
            $table->string('negara_penjual');

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
        Schema::dropIfExists('entitas_dokumen_pabeans');
    }
}
