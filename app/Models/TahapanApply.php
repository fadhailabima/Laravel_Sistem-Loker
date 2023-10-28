<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TahapanApply extends Model
{
    use HasFactory;
    protected $fillable = [
        'nilai',
        'tgl_update',
    ];
}
