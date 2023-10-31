<?php

namespace App\Http\Controllers;
use App\Models\Loker;
use App\Models\ApplyLoker;
use Illuminate\Http\Request;
use DB;

class ViewController extends Controller
{
    public function index($id)
    {
        $lokers = DB::table('apply_lokers')
    ->leftJoin('pencakers', 'apply_lokers.noktp', '=', 'pencakers.noktp')
    ->leftJoin('tahapan_applies', 'apply_lokers.idapply', '=', 'tahapan_applies.idapply')
    ->leftJoin('tahapans', 'tahapan_applies.idtahapan', '=', 'tahapans.idtahapan')
    ->leftJoin('lokers', 'apply_lokers.idloker', '=', 'lokers.idloker')
    ->where('lokers.idloker','=', $id)
    ->select(
        'lokers.nama as nama_pekerjaan',
        'pencakers.noktp',
        'lokers.tipe',
        'lokers.status',
        'lokers.usia_min',
        'lokers.usia_max',
        'lokers.gaji_min',
        'lokers.gaji_max',
        'lokers.nama_cp',
        'lokers.email_cp',
        'lokers.no_telp_cp',
        'lokers.status',
        'pencakers.nama',
        'tahapans.nama as tahapan'
    )
    ->distinct()
    ->get();




        return view ('view', compact('lokers'));
    }

    
}
