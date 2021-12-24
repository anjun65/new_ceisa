<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LartasDokumenPabean extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor_pengajuan_dokumen',
        'seri',
        'jenis',
        'nomor',
        'tanggal_lartas',
        'fasilitas',
        'izin',
        'file',
    ];
}
