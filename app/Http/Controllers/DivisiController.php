<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Divisi;
use Illuminate\Http\RedirectResponse;

class DivisiController extends Controller
{
    public function show()
    {
        $list_divisi = Divisi::all();
        return view('divisi.show', ['list_divisi' => $list_divisi]);
    }
    
    public function create()
    {
        $divisi = new Divisi();
        return view('divisi.form', ['divisi' => $divisi]);
    }

    public function store(Request $request): RedirectResponse
    {
        // Validasi data inputan
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'manager' => 'required',
        ]);

        // Create a new divisi instance with the validated data
        Divisi::create($request->all());

        // Redirect to the index page with a success message
        return redirect(route('divisi.show'))->with('pesan', 'Data berhasil disimpan');
    }

    public function edit($id)
    {
        $divisi = Divisi::find($id);
        return view('divisi.form', ['divisi' => $divisi]);
    }
    
    public function view($id)
    {
        $divisi = Divisi::find($id);
        return view('divisi.view', ['divisi' => $divisi]);
    }
    
    public function destroy($id): RedirectResponse
    {
        $divisi = Divisi::findOrFail($id);
        $divisi->delete();
        return redirect()->route('divisi.show')->with('pesan', 'Data berhasil dihapus');
    }
}
