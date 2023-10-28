<?php

namespace App\Http\Controllers;
use App\Models\Loker;
use Illuminate\Http\Request;

class UpdateLokerController extends Controller
{
    public function edit($id)
{
    $loker = Loker::find($id);

    return view('updateloker', compact('loker'));
}


    public function update(Request $request, $id)
{
    $loker = Loker::find($id);

    $loker->nama = $request->input('namaLowongan');
    $loker->tipe = $request->input('tipeLowongan');
    $loker->status = $request->input('statusLowongan');

    $loker->save();

    return redirect('/detail/'.$id)->with('success', 'Loker berhasil diperbarui');
}

}
