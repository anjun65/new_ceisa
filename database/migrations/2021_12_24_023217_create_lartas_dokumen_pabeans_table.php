<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLartasDokumenPabeansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lartas_dokumen_pabeans', function (Blueprint $table) {
            $table->id();

            $table->string('nomor_pengajuan_dokumen');

            $table->integer('seri');
            $table->string('jenis');
            $table->string('nomor');
            $table->date('tanggal_lartas');
            $table->string('fasilitas');
            $table->string('izin');
            $table->string('file');

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
        Schema::dropIfExists('lartas_dokumen_pabeans');
    }
}
