<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiDokumenPabean extends Model
{
    use HasFactory;


    protected $fillable = [
        'nomor_pengajuan_dokumen',
        'valuta',
        'ndpbm',

        'jenis_transaksi',
        'kode_barang',
        'harga_barang',
        'nilai_pabean',

            
        'biaya_penambah',
        'biaya_pengurang',
        'voluntary_declaration',

            
        'berat_kotor',
        'berat_bersih',
    ];
    
}
