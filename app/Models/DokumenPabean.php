<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DokumenPabean extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',

        'entitas',
        'jenis_pemberitahun',
        'asal_barang',
        'tujuan_barang',

        'jenis_TPB',
        'tujuan_pengiriman',
        'cara_bayar',

        'nomor_dokumen_pabean',
        'kode_dokumen_pabean',
        'nomor_aju_pabean',
        'nomor_pendaftaran',
        'tanggal_pendaftaran',
        'jalur',
        'nama_perusahaan',
        'kantor_pabean',
        'status',
    ];
    
}
