<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Loker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Loker::create([
            'idloker' => '3001',
            'idperusahaan' => 'A001',
            'nama' => 'Telkom',
            'tipe' => 'IT',
            'usia_min' => '19',
            'usia_max' => '30',
            'gaji_min' => '2000000',
            'gaji_max' => '5000000',
            'nama_cp' => 'luthfi',
            'email_cp' => 'luthfi@loker.com',
            'no_telp_cp' => '23456',
            'tgl_update' => '2023-01-17',
            'tgl_aktif' => '2023-01-01',
            'tgl_tutup' => '2023-12-01',
            'status' => 'aktif',
        ]);
        Loker::create([
            'idloker' => '3002',
            'idperusahaan' => 'A002',
            'nama' => 'Dicoding',
            'tipe' => 'IT',
            'usia_min' => '19',
            'usia_max' => '30',
            'gaji_min' => '2000000',
            'gaji_max' => '5000000',
            'nama_cp' => 'darrel',
            'email_cp' => 'darrel@loker.com',
            'no_telp_cp' => '23457',
            'tgl_update' => '2023-01-17',
            'tgl_aktif' => '2023-01-01',
            'tgl_tutup' => '2023-12-01',
            'status' => 'proses seleksi',
        ]);
        Loker::create([
            'idloker' => '3003',
            'idperusahaan' => 'A003',
            'nama' => 'Skillvul',
            'tipe' => 'IT',
            'usia_min' => '19',
            'usia_max' => '30',
            'gaji_min' => '2000000',
            'gaji_max' => '5000000',
            'nama_cp' => 'victor',
            'email_cp' => 'victor@loker.com',
            'no_telp_cp' => '23458',
            'tgl_update' => '2023-01-17',
            'tgl_aktif' => '2023-01-01',
            'tgl_tutup' => '2023-12-01',
            'status' => 'ditutup',
        ]);
    }
}
