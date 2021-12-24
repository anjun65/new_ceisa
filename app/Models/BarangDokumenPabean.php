<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangDokumenPabean extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor_pengajuan_dokumen',

        'seri',
        'hs',
        'lartas',
        'pernyataan_lartas',
        'kode',
        'uraian',
        'merk',
        'tipe',
        'ukuran',
        'spesifikasi_lain',
        'kondisi_barang',
        'negara',
        'berat_bersih',

            
        'jumlah_satuan',
        'satuan',

        'jumlah_kemasan',
        'kemasan',

        'amount',
        'jenis_nilai',
        'jatuh_tempo',
        'voluntary_declaration',

        'diskon',
        'fob',
        'harga_satuan',
        'freight',
        'asuransi',
        'cif_rupiah',
    ];
}
