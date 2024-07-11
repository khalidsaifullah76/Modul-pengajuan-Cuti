<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Jatah_cuti;
use App\Models\Pegawai;

class Jatah_cutiController extends Controller
{
    public function show(){
        $list_jatah_cuti = Jatah_cuti::all();
        return view('jatah_cuti.show', ['list_jatah_cuti'=>$list_jatah_cuti]);
    }

    public function create()
    {
        $list_pegawai = Pegawai::all();
        $jatah_cuti = new Jatah_cuti();
        return view('jatah_cuti.form',['jatah_cuti'=>$jatah_cuti,'list_pegawai'=>$list_pegawai]);
    }

    /**
     * Store a newly created resource in storage.
     */ 
    public function store(Request $request): RedirectResponse
{
    // Validasi data inputan
    $request->validate([
        'tahun' => 'required',
        'jumlah' => 'required',
        'pegawai_nip' => 'required',
    ]);

    if($request->id){  
        // Update menggunakan 'id' sebagai primary key
        Jatah_cuti::find($request->id)->update($request->all());
        // Redirect to the index page with a success message
        return redirect(route('jatah_cuti.show'))->with('pesan', 'Data berhasil diupdate');
    }
    else{
        // Create a new jatah_cuti instance with the validated data
        Jatah_cuti::create($request->all());
        // Redirect to the index page with a success message
        return redirect(route('jatah_cuti.show'))->with('pesan', 'Data berhasil disimpan');
    }  
}




    public function edit($id)
    {
        $list_pegawai = Pegawai::all();
        $jatah_cuti = Jatah_cuti::find($id);
        return view('jatah_cuti.form',['jatah_cuti'=>$jatah_cuti,'list_pegawai'=>$list_pegawai]);
    }
    public function view($id)
    {
        $jatah_cuti = Jatah_cuti::find($id);
        return view('jatah_cuti.view',['jatah_cuti'=>$jatah_cuti]);
    }
    public function destroy($id): RedirectResponse
    {
        $jatah_cuti = Jatah_cuti::findOrFail($id);
        $jatah_cuti->delete();
        return redirect()->route('jatah_cuti.show')->with('pesan', 'Data berhasil dihapus');
    }
    

}