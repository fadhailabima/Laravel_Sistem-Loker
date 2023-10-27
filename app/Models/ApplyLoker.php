<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplyLoker extends Model
{
    use HasFactory;
    protected $fillable = [
        'idapply',
        'idloker',
        'noktp',
        'tgl_apply',
    ];

    public function Loker()
    {
        return $this->belongsTo(Loker::class);
    }
    public function Petugas()
    {
        return $this->belongsTo(Petugas::class);
    }
    public function TahapanApply()
    {
        return $this->belongsTo(TahapanApply::class);
    }
}


