<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangDokumenPabeansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang_dokumen_pabeans', function (Blueprint $table) {
            $table->id();

            $table->string('nomor_pengajuan_dokumen');

            $table->integer('seri');
            $table->string('HS');
            $table->string('lartas');
            $table->string('pernyataan_lartas');
            $table->string('kode');
            $table->string('uraian');
            $table->string('merk');
            $table->string('tipe');
            $table->string('ukuran');
            $table->string('spesifikasi_lain');
            $table->string('kondisi_barang');
            $table->string('negara');
            $table->decimal('berat_bersih', 4,4);

            
            $table->decimal('jumlah_satuan', 4,4);
            $table->string('satuan');

            $table->integer('jumlah_kemasan');
            $table->string('kemasan');

            $table->integer('amount');
            $table->string('jenis_nilai');
            $table->string('jatuh_tempo');
            $table->decimal('voluntary_declaration', 4,4);

            $table->decimal('diskon', 4,2);
            $table->decimal('fob', 4,2);
            $table->decimal('harga_satuan', 4,2);
            $table->decimal('freight', 4,2);
            $table->decimal('asuransi', 4,2);
            $table->decimal('cif_rupiah', 4,2);


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
        Schema::dropIfExists('barang_dokumen_pabeans');
    }
}
