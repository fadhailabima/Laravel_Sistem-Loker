<?php

namespace App\Http\Controllers;
use App\Models\Pencaker;
use App\Models\Tahapan;
use Illuminate\Http\Request;
use DB;


class UpdatePencakerController extends Controller
{
    public function edit($id)
    {
        $pencakers = DB::table('pencakers')
            ->select('pencakers.noktp', 'pencakers.nama', 'tahapans.nama as tahapan')
            ->leftJoin('apply_lokers', 'pencakers.noktp', '=', 'apply_lokers.noktp')
            ->leftJoin('tahapan_applies', 'apply_lokers.idapply', '=', 'tahapan_applies.idapply')
            ->leftJoin('tahapans', 'tahapan_applies.idtahapan', '=', 'tahapans.idtahapan')
            ->where('pencakers.noktp', $id)
            ->get();



    
        return view('updatepencaker', compact('pencakers'));
    }

    public function update(Request $request, $id){
        $pencakers = Pencaker::find($id)->update([
            // 'nama' => $request->nama,
            // 'jenis_kelamin' => $request->jenis_kelamin,
            'status' => $request->status
        ]);


    // $lokers->save();

    return redirect('/dashboardpetugas')->with('success', 'Loker berhasil diperbarui');
    }
}
