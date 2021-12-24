<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePungutanDokumenPabeansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pungutan_dokumen_pabeans', function (Blueprint $table) {
            $table->id();

            $table->string('kode_bm');
            $table->string('persen_bm');

            $table->string('kode_ppn');
            $table->string('persen_ppn');

            $table->string('kode_pph');
            $table->string('persen_pph');

            $table->boolean('bmt_cukai');

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
        Schema::dropIfExists('pungutan_dokumen_pabeans');
    }
}
