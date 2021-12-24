<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDokumenLainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokumen_lains', function (Blueprint $table) {
            $table->id();

            $table->string('nomor_pengajuan_dokumen');
            $table->string('seri');
            $table->string('jenis_dokumen');
            $table->string('nomor_dokumen');
            $table->date('tanggal_dokumen');

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
        Schema::dropIfExists('dokumen_lains');
    }
}
