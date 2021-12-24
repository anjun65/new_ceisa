<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengangkutDokumenPabean extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor_pengajuan_dokumen',
        'kode_tutup_pu',
        'nomor_tutup_pu',
        'tanggal_tutup_pu',

        'nomor_pos_1',
        'nomor_pos_2',
        'nomor_pos_3',

        'cara_pengangkutan',
        'sarana_angkut',
        'nomor_voy_flight',
        'bendera',
        'tanggal_perkiraan',

        'pelabuhan_muat',
        'pelabuhan_transit',
        'tempat_penimbunan',
    ];
}
