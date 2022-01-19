<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class DokumenPabean extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',

        'entitas',
        'jenis_pemberitahuan',
        'asal_barang',
        'tujuan_barang',
        
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
    
    const ENTITAS = [
        'IMPORTIR' => 'IMPORTIR',
        'EKSPORTIR' => 'EKSPORTIR',
        'TPB' => 'TPB',
        'PLB' => 'PLB',
        'IMPORTIR PLB' => 'IMPORTIR PLB',
        'EKSPORTIR PLB' => 'TEKSPORTIR PLB',
        'FTZ' => 'FTZ',
        'PPJK' => 'PPJK',
    ];

    const PEMBERITAHUAN = [
        'PEMASUKAN' => 'PEMASUKAN',
        'PENGELUARAN' => 'PENGELUARAN',
    ];

    const ASAL = [
        'LUAR DAERAH PABEAN' => 'Luar Daerah Pabean',
        'TEMPAT LAIN DALAM DAERAH PABEAN' => 'Tempat Lain Dalam Daerah Pabean',
    ];

    const TUJUAN = [
        'DALAM DAERAH PABEAN' => 'Dalam Daerah Pabean',
        'TEMPAT PENIMBUNAN BERIKAT' => 'Tempat Penimbunan Berikat',
        'FREE TRADE ZONE' => 'Free Trade Zone',        
        'PUSAT LOGISTIK BERIKAT' => 'Pusat Logistik Berikat',
    ];

    const JENIS = [
        'BC 2.0' => 'BC 2.0',
        'BC 2.3' => 'BC 2.3',
    ];

    public function getStatusColorAttribute()
    {
        return [
            'Diterima' => 'green',
            'Ditolak' => 'red',
        ][$this->status] ?? 'cool-gray';
    }

    public function getDateForHumansAttribute()
    {
        return $this->date->format('M, d Y');
    }

    public function getDateForEditingAttribute()
    {
        return $this->date->format('m/d/Y');
    }

    public function setDateForEditingAttribute($value)
    {
        $this->date = Carbon::parse($value);
    }
}
