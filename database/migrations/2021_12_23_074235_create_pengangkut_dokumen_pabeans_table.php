<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengangkutDokumenPabeansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengangkut_dokumen_pabeans', function (Blueprint $table) {
            $table->id();

            $table->string('nomor_pengajuan_dokumen');
            $table->string('kode_tutup_pu');
            $table->string('nomor_tutup_pu');
            $table->date('tanggal_tutup_pu');

            $table->string('nomor_pos_1');
            $table->string('nomor_pos_2');
            $table->string('nomor_pos_3');

            $table->string('cara_pengangkutan');
            $table->string('sarana_angkut');
            $table->string('nomor_voy_flight');
            $table->string('bendera');
            $table->string('tanggal_perkiraan');

            $table->string('pelabuhan_muat');
            $table->string('pelabuhan_transit');
            $table->string('tempat_penimbunan');

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
        Schema::dropIfExists('pengangkut_dokumen_pabeans');
    }
}
