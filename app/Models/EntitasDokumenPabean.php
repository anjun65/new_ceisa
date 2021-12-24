<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntitasDokumenPabean extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor_pengajuan_dokumen',
        'npwp_importir',
        'nama_importir',
        'alamat_importir',
        'API',
        'NIB',
        'status',
        
        'npwp_pemilik',
        'nama_pemilik',
        'alamat_pemilik',

        'npwp_terpusat',
        'nama_terpusat',
        'alamat_terpusat',

        'nama_pengirim',
        'alamat_pengirim',
        'negara_pengirim',

        'nama_penjual',
        'alamat_penjual',
        'negara_penjual',
    ];
}
