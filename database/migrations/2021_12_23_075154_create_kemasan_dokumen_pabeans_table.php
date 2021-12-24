<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKemasanDokumenPabeansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kemasan_dokumen_pabeans', function (Blueprint $table) {
            $table->id();

            $table->string('nomor_pengajuan_dokumen');
            $table->integer('seri');
            $table->integer('jumlah');
            $table->string('jenis');
            $table->date('merek');

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
        Schema::dropIfExists('kemasan_dokumen_pabeans');
    }
}
