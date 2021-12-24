<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetiKemasDokumenPabeansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peti_kemas_dokumen_pabeans', function (Blueprint $table) {
            $table->id();

            $table->string('nomor_pengajuan_dokumen');
            $table->integer('seri');
            $table->integer('nomor');
            $table->string('ukuran');
            $table->string('jenis');
            $table->date('tipe');

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
        Schema::dropIfExists('peti_kemas_dokumen_pabeans');
    }
}
