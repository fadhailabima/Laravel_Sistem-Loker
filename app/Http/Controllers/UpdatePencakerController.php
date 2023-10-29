<?php

namespace App\Http\Controllers;
use App\Models\Pencaker;
use Illuminate\Http\Request;

class UpdatePencakerController extends Controller
{
    public function edit($id)
    {
        $pencakers = Pencaker::find($id);
    
        return view('updatepencaker', compact('pencakers'));
    }

    public function update(Request $request, $id){
        $pencakers = Pencaker::find($id)->update([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'status' => $request->status
        ]);


    // $lokers->save();

    return redirect('/detail/'.$id)->with('success', 'Loker berhasil diperbarui');
    }
}
