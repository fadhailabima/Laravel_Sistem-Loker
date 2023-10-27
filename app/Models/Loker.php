<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loker extends Model
{
    use HasFactory;
    protected $fillable = [
        'idloker',
        'idperusahaan',
        'nama',
        'tipe',
        'usia_min',
        'usia_max',
        'gaji_min',
        'gaji_max',
        'nama_cp',
        'email_cp',
        'no_telp_cp',
        'tgl_update',
        'tgl_aktif',
        'tgl_tutup',
        'status',

    ];

    public function ApplyLoker()
    {
        return $this->belongsTo(ApplyLoker::class);
    }
    public function TahapanApply()
    {
        return $this->belongsTo(TahapanApply::class);
    }
}
