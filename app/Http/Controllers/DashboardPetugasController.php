<?php

namespace App\Http\Controllers;
use App\Models\Loker;
use Illuminate\Http\Request;

class DashboardPetugasController extends Controller
{
    public function index()
    {
         $lokers = Loker::select('nama', 'tipe', 'status', 'idloker')->get(); 
        return view ('dashboardpetugas', compact('lokers'));
    }

    public function destroy($id)
    {

        $lokers = Loker::find($id);
        $lokers -> delete();

        return redirect('/dashboardpetugas')->with([
            'success' => 'LokerberhasilDihapus',
        ]);
    }


}
