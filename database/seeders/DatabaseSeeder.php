<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Loker;
use App\Models\Petugas;
use App\Models\Pencaker;
use App\Models\Tahapan;
use App\Models\TahapanApply;
use App\Models\ApplyLoker;

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
        Loker::create([
            'idloker' => '3004',
            'idperusahaan' => 'A004',
            'nama' => 'Coding Studio',
            'tipe' => 'IT',
            'usia_min' => '19',
            'usia_max' => '30',
            'gaji_min' => '2000000',
            'gaji_max' => '5000000',
            'nama_cp' => 'fitra',
            'email_cp' => 'fitra@loker.com',
            'no_telp_cp' => '23459',
            'tgl_update' => '2023-01-17',
            'tgl_aktif' => '2023-01-01',
            'tgl_tutup' => '2023-12-01',
            'status' => 'ditutup',
        ]);
        Loker::create([
            'idloker' => '3005',
            'idperusahaan' => 'A005',
            'nama' => 'Neo X',
            'tipe' => 'IT',
            'usia_min' => '19',
            'usia_max' => '30',
            'gaji_min' => '2000000',
            'gaji_max' => '5000000',
            'nama_cp' => 'dorino',
            'email_cp' => 'dorino@loker.com',
            'no_telp_cp' => '23460',
            'tgl_update' => '2023-01-17',
            'tgl_aktif' => '2023-01-01',
            'tgl_tutup' => '2023-12-01',
            'status' => 'aktif',
        ]);
        Loker::create([
            'idloker' => '3006',
            'idperusahaan' => 'A006',
            'nama' => 'IRich',
            'tipe' => 'IT',
            'usia_min' => '19',
            'usia_max' => '30',
            'gaji_min' => '2000000',
            'gaji_max' => '5000000',
            'nama_cp' => 'sultan',
            'email_cp' => 'sultan@loker.com',
            'no_telp_cp' => '23461',
            'tgl_update' => '2023-01-17',
            'tgl_aktif' => '2023-01-01',
            'tgl_tutup' => '2023-12-01',
            'status' => 'proses seleksi',
        ]);
        Loker::create([
            'idloker' => '3007',
            'idperusahaan' => 'A007',
            'nama' => 'HMIF',
            'tipe' => 'IT',
            'usia_min' => '19',
            'usia_max' => '30',
            'gaji_min' => '2000000',
            'gaji_max' => '5000000',
            'nama_cp' => 'thirafi',
            'email_cp' => 'thirafi@loker.com',
            'no_telp_cp' => '23462',
            'tgl_update' => '2023-01-17',
            'tgl_aktif' => '2023-01-01',
            'tgl_tutup' => '2023-12-01',
            'status' => 'aktif',
        ]);

        Petugas::create([
            'idpetugas' => '1001',
            'nama' => 'amib',
            'email' => 'amib@loker.com',
            'password' => 'petugas',
        ]);

        Pencaker::create([
            'noktp' => '2001',
            'nama' => 'reza',
            'password' => 'pencaker',
            'jenis_kelamin' => 'L',
            'tempat_lahir' => 'Tangerang',
            'tanggal_lahir' => '2002-09-10',
            'alamat' => 'Mulawarman',
            'kota' => 'Semarang',
            'email' => 'reza@loker.com',
            'no_telp' => '1234',
            'foto' => '',
            'tgl_daftar' => '2021-10-19',
            'file_ktp' => '',
        ]);
        Pencaker::create([
            'noktp' => '2002',
            'nama' => 'dika',
            'password' => 'pencaker',
            'jenis_kelamin' => 'L',
            'tempat_lahir' => 'Manado',
            'tanggal_lahir' => '2002-07-10',
            'alamat' => 'Mulawarman',
            'kota' => 'Semarang',
            'email' => 'dika@loker.com',
            'no_telp' => '1235',
            'foto' => '',
            'tgl_daftar' => '2021-10-29',
            'file_ktp' => '',
        ]);
        Pencaker::create([
            'noktp' => '2003',
            'nama' => 'aryela',
            'password' => 'pencaker',
            'jenis_kelamin' => 'P',
            'tempat_lahir' => 'Semarang',
            'tanggal_lahir' => '2004-01-05',
            'alamat' => 'Mangunharjo',
            'kota' => 'Semarang',
            'email' => 'aryela@loker.com',
            'no_telp' => '1236',
            'foto' => '',
            'tgl_daftar' => '2021-12-19',
            'file_ktp' => '',
        ]);
        Pencaker::create([
            'noktp' => '2004',
            'nama' => 'zhafira',
            'password' => 'pencaker',
            'jenis_kelamin' => 'P',
            'tempat_lahir' => 'Bangka Belitung',
            'tanggal_lahir' => '2003-09-10',
            'alamat' => 'Bulusan',
            'kota' => 'Semarang',
            'email' => 'zhafira@loker.com',
            'no_telp' => '1237',
            'foto' => '',
            'tgl_daftar' => '2021-10-15',
            'file_ktp' => '',
        ]);
        Pencaker::create([
            'noktp' => '2005',
            'nama' => 'derva',
            'password' => 'pencaker',
            'jenis_kelamin' => 'L',
            'tempat_lahir' => 'Karawang',
            'tanggal_lahir' => '2002-12-10',
            'alamat' => 'Bulusan',
            'kota' => 'Semarang',
            'email' => 'derva@loker.com',
            'no_telp' => '1238',
            'foto' => '',
            'tgl_daftar' => '2021-05-19',
            'file_ktp' => '',
        ]);
        Pencaker::create([
            'noktp' => '2006',
            'nama' => 'ariq',
            'password' => 'pencaker',
            'jenis_kelamin' => 'L',
            'tempat_lahir' => 'Aceh',
            'tanggal_lahir' => '2002-01-10',
            'alamat' => 'Mulawarman',
            'kota' => 'Semarang',
            'email' => 'ariq@loker.com',
            'no_telp' => '1239',
            'foto' => '',
            'tgl_daftar' => '2021-10-05',
            'file_ktp' => '',
        ]);

        Tahapan::create([
            'idtahapan' => '5001',
            'nama' => 'Seleksi Administrasi',
        ]);
        Tahapan::create([
            'idtahapan' => '5002',
            'nama' => 'Seleksi Administrasi',
        ]);
        Tahapan::create([
            'idtahapan' => '5003',
            'nama' => 'Seleksi Administrasi',
        ]);
        Tahapan::create([
            'idtahapan' => '5004',
            'nama' => 'Seleksi Administrasi',
        ]);
        Tahapan::create([
            'idtahapan' => '5005',
            'nama' => 'Seleksi Wawancara',
        ]);
        Tahapan::create([
            'idtahapan' => '5006',
            'nama' => 'Seleksi Wawancara',
        ]);

        ApplyLoker::create([
            'idapply' => '7001',
            'idloker' => '3006',
            'noktp' => '2001',

            'tgl_apply' => '2023-07-15',
        ]);
        ApplyLoker::create([
            'idapply' => '7002',
            'idloker' => '3001',
            'noktp' => '2002',
            'tgl_apply' => '2023-08-15',
        ]);
        ApplyLoker::create([
            'idapply' => '7003',
            'idloker' => '3003',
            'noktp' => '2003',
            'tgl_apply' => '2023-07-19',
        ]);
        ApplyLoker::create([
            'idapply' => '7004',
            'idloker' => '3002',
            'noktp' => '2004',
            'tgl_apply' => '2023-05-15',
        ]);
        ApplyLoker::create([
            'idapply' => '7005',
            'idloker' => '3004',
            'noktp' => '2005',
            'tgl_apply' => '2023-01-15',
        ]);
        ApplyLoker::create([
            'idapply' => '7006',
            'idloker' => '3006',
            'noktp' => '2006',
            'tgl_apply' => '2023-03-10',
        ]);

        TahapanApply::create([
            'idapply' => '7006',
            'idtahapan' => '5006',
            'nilai' => '1',
            'tgl_update' => '2023-10-28',
        ]);
        TahapanApply::create([
            'idapply' => '7003',
            'idtahapan' => '5002',
            'nilai' => '0',
            'tgl_update' => '2023-10-28',
        ]);
        TahapanApply::create([
            'idapply' => '7001',
            'idtahapan' => '5001',
            'nilai' => '1',
            'tgl_update' => '2023-10-28',
        ]);
        TahapanApply::create([
            'idapply' => '7002',
            'idtahapan' => '5003',
            'nilai' => '1',
            'tgl_update' => '2023-10-28',
        ]);
        TahapanApply::create([
            'idapply' => '7003',
            'idtahapan' => '5004',
            'nilai' => '0',
            'tgl_update' => '2023-10-28',
        ]);
        User::create([
            'id' => '1',
            'nama' => 'amib',
            'email' => 'amib@loker.com',
            'password' => 'petugas',
            'role' => 'petugas',
        ]);
    }
}