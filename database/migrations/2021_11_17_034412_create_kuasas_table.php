<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKuasasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kuasas', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('user_id');
            $table->string('nomor_kuasa', 10);
            $table->date('tanggal_kuasa');
            $table->string('pemberi_kuasa');
            $table->string('nomor_ijin_bpk', 10);
            $table->date('tanggal_ijin_bpk');
            $table->string('penerima_kuasa');
            $table->date('awal_berlaku');
            $table->date('akhir_berlaku');
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
        Schema::dropIfExists('kuasas');
    }
}
