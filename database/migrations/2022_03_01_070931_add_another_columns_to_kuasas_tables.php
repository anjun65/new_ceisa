<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAnotherColumnsToKuasasTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kuasas', function (Blueprint $table) {
            $table->string('npwp_pemberi');
            $table->string('alamat_perusahaan');
            $table->string('npwp_penerima');
            $table->string('alamat_perusahaan_penerima');
            $table->string('kantor_bc_ftz');
            $table->string('ppftz_dikuasakan');
            $table->string('upload_dokumen');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kuasas', function (Blueprint $table) {
            //
        });
    }
}
