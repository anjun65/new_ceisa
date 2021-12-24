<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiDokumenPabeansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_dokumen_pabeans', function (Blueprint $table) {
            $table->id();

            $table->string('nomor_pengajuan_dokumen');
            $table->string('valuta');
            $table->decimal('ndpbm', 4,4);

            $table->string('jenis_transaksi');
            $table->string('kode_barang');
            $table->string('harga_barang');
            $table->decimal('nilai_pabean', 4,2);

            
            $table->decimal('biaya_penambah', 4,2);
            $table->decimal('biaya_pengurang', 4,2);
            $table->decimal('voluntary_declaration', 4,2);

            
            $table->decimal('berat_kotor', 4,4);
            $table->decimal('berat_bersih', 4,4);
            
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
        Schema::dropIfExists('transaksi_dokumen_pabeans');
    }
}
