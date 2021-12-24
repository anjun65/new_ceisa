<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeaderDokumenPabean extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor_pengajuan_dokumen',
        'pelabuhan_tujuan',
        'kantor_pabean',
        'asal_barang',
        'jenis_pib',
        'jenis_impor',
        'cara_bayar',
    ];
}
