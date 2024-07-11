<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan_cuti;
use Illuminate\Http\RedirectResponse;
use App\Models\Pegawai;

class Pengajuan_cutiController extends Controller
{
    public function show()
    {
        $list_pengajuan_cuti = Pengajuan_cuti::all();
        return view('pengajuan_cuti.show', ['list_pengajuan_cuti' => $list_pengajuan_cuti]);
    }

    public function create()
    {
        $list_pegawai = Pegawai::all();
        $pengajuan_cuti = new Pengajuan_cuti();
        return view('pengajuan_cuti.form', ['pengajuan_cuti' => $pengajuan_cuti, 'list_pegawai' => $list_pegawai]);
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'tanggal_awal' => 'required|date',
            'tanggal_akhir' => 'required|date',
            'jumlah' => 'required|integer',
            'ket' => 'required|string',
            'pegawai_nip' => 'required|string',
        ]);

        $pengajuan_cuti = Pengajuan_cuti::updateOrCreate(
            ['id' => $request->input('id')],
            $request->all()
        );

        return redirect()->route('pengajuan_cuti.show')->with('pesan', 'Data berhasil disimpan');
    }

    public function edit($id)
    {
        $list_pegawai = Pegawai::all();
        $pengajuan_cuti = Pengajuan_cuti::find($id);
        return view('pengajuan_cuti.form', ['pengajuan_cuti' => $pengajuan_cuti, 'list_pegawai' => $list_pegawai]);
    }

    public function view($id)
    {
        $pengajuan_cuti = Pengajuan_cuti::find($id);
        return view('pengajuan_cuti.view', ['pengajuan_cuti' => $pengajuan_cuti]);
    }

    public function destroy($id): RedirectResponse
    {
        $pengajuan_cuti = Pengajuan_cuti::findOrFail($id);
        $pengajuan_cuti->delete();
        return redirect()->route('pengajuan_cuti.show')->with('pesan', 'Data berhasil dihapus');
    }
}
