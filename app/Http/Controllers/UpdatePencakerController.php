<?php

namespace App\Http\Controllers;
use App\Models\Pencaker;
use App\Models\Tahapan;
use App\Models\TahapanApply;
use Illuminate\Http\Request;
use DB;


class UpdatePencakerController extends Controller
{
    public function display($id)
    {
        $pencakers = DB::table('pencakers')
            ->select('pencakers.noktp', 'pencakers.nama', 'tahapans.nama as tahapan')
            ->leftJoin('apply_lokers', 'pencakers.noktp', '=', 'apply_lokers.noktp')
            ->leftJoin('tahapan_applies', 'apply_lokers.idapply', '=', 'tahapan_applies.idapply')
            ->leftJoin('tahapans', 'tahapan_applies.idtahapan', '=', 'tahapans.idtahapan')
            ->where('pencakers.noktp', $id)
            ->distinct()
            ->get();

        



    
        return view('updatepencaker', compact('pencakers'));
    }

    public function update(Request $request, $id){

        
        
        

        $affected = DB::table('tahapan_applies')
            ->leftJoin('apply_lokers', 'apply_lokers.idapply', '=', 'tahapan_applies.idapply')
            ->where('apply_lokers.noktp', $id)
            ->update(['idtahapan' => $request->tahapan]);
            

    return redirect('/dashboardpetugas')->with('success', 'Tahapan berhasil diperbarui');
}

}
