<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pencaker extends Model
{
    use HasFactory;
    protected $fillable = [
        'noktp',
        'nama',
        'password',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'kota',
        'email',
        'no_telp',
        'foto',
        'tgl_daftar',
        'file_ktp',

    ];
    protected $primaryKey = 'noktp';
}
