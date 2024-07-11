<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Pegawai;
use App\Models\Divisi;

class PegawaiController extends Controller
{
    //
    public function show(){
        $list_pegawai = Pegawai::all();
        return view('pegawai.show', ['list_pegawai'=>$list_pegawai]);
    }

    public function create()
    {
        $list_divisi = divisi::all();
        $pegawai = new Pegawai();
        return view('pegawai.form',['pegawai'=>$pegawai,'list_divisi'=>$list_divisi]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validasi data inputan
        $request->validate([
            'nip' => 'required',
            'gender' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required',
            'telpon' => 'required',
            'alamat' => 'required',
            'divisi_iddivisi' => 'required',
        ]);

        if($request->id){  
            Pegawai::find($request->id)->update($request->all());
            // Redirect to the index page with a success message
            return redirect(route('pegawai.show'))->with('pesan', 'Data berhasil diupdate');
        }
        else{
            // Create a new pegawai instance with the validated data
            Pegawai::create($request->all());
            // Redirect to the index page with a success message
            return redirect(route('pegawai.show'))->with('pesan', 'Data berhasil disimpan');
        }  
    }

    public function edit($id)
    {
        $pegawai = Pegawai::find($id);
        $list_divisi = Divisi::all();
        return view('pegawai.form',['pegawai'=>$pegawai,'list_divisi'=>$list_divisi]);
    }
    public function view($id)
    {
        $pegawai = Pegawai::find($id);
        return view('pegawai.view',['pegawai'=>$pegawai]);
    }
    public function destroy($id): RedirectResponse
    {
        Pegawai::find($id)->delete();
        return redirect(route('pegawai.show'))->with('pesan', 'Data berhasil dihapus');
    }
}
