<?php

namespace App\Http\Controllers;
use App\Models\Loker;
use Illuminate\Http\Request;

class UpdateLokerController extends Controller
{
    public function edit($id)
{
    $lokers = Loker::find($id);

    return view('updateloker', compact('lokers'));
}


    public function update(Request $request, $id)
{
     $lokers = Loker::find($id)->update([
            'nama' => $request->nama,
            'tipe' => $request->tipe,
            'status' => $request->status
        ]);


    // $lokers->save();

    return redirect('/detail/'.$id)->with('success', 'Loker berhasil diperbarui');
}

 public function display(){
    return view('add');
 }
 public function store(Request $request)
    {
        
        // Validasi data yang diterima dari formulir
        $validatedData = $request->validate([
            'idperusahaan' => 'required',
            'nama' => 'required',
            'tipe' => 'required',
            'usia_min' => 'required|integer',
            'usia_max' => 'required|integer',
            'gaji_min' => 'required|numeric',
            'gaji_max' => 'required|numeric',
            'nama_cp' => 'required',
            'email_cp' => 'required|email',
            'no_telp_cp' => 'required',
            'status' => 'required',
        ]);
        $validatedData['tgl_aktif'] = date('Y-m-d');
        $validatedData['tgl_update'] = date('Y-m-d');
        
        // Simpan data ke dalam database menggunakan model Loker
        Loker::create($validatedData);

        // Redirect ke halaman lain atau tampilkan pesan sukses
        return redirect('dashboardpetugas')->with('success', 'Lowongan kerja telah berhasil ditambahkan.');
    }

}
