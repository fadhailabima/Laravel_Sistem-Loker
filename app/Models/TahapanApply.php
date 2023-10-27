<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TahapanApply extends Model
{
    use HasFactory;
    protected $fillable = [
        'idapply',
        'idtahapan',
        'nilai',
        'tgl_update',
    ];
    public function ApplyLoker()
    {
        return $this->belongsTo(ApplyLoker::class);
    }
    public function Tahapan()
    {
        return $this->belongsTo(Tahapan::class);
    }
    public function Loker()
    {
        return $this->belongsTo(Loker::class);
    }
}
