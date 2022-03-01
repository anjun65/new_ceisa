<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Kuasa extends Model
{
    use HasFactory;

    // protected $casts = [
    //     'tanggal_kuasa' => 'date:Y-m-d',
    //     'tanggal_ijin_bpk' => 'date:Y-m-d',
    //     'awal_berlaku' => 'date:Y-m-d',
    //     'akhir_berlaku' => 'date:Y-m-d',
    // ];

    protected $fillable = [
        'user_id',
        'nomor_kuasa',
        'tanggal_kuasa',
        'pemberi_kuasa',
        'nomor_ijin_bpk',
        'tanggal_ijin_bpk',
        'penerima_kuasa',
        'awal_berlaku',
        'akhir_berlaku',
        'npwp_pemberi',
        'alamat_perusahaan',
        'npwp_penerima',
        'alamat_perusahaan_penerima',
        'kantor_bc_ftz',
        'ppftz_dikuasakan',
        'upload_dokumen',
        'status',
    ];


    const STATUSES = [
        'Diterima' => 'Diterima',
        'Ditolak' => 'Ditolak',
        'Diajukan' => 'Diajukan',
    ];

    protected $guarded = [];
    // protected $appends = ['date_for_editing'];

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
