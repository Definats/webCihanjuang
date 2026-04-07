<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProfilKecamatan;
use App\Models\VisiMisi;

class ProfilKecamatanController extends Controller
{
    public function index()
    {
        $data = ProfilKecamatan::first();
        return view('admin.profil-kecamatan', compact('data'));
    }

    public function visiMisi()
    {
        $data = VisiMisi::first();
        return view('admin.visi-misi', compact('data'));
    }

    public function store(Request $request)
    {
        $data = ProfilKecamatan::first();

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $filename);
        }

        ProfilKecamatan::updateOrCreate(
            ['id' => $data->id ?? null],
            [
                'jabatan' => $request->jabatan,
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'foto' => $filename ?? $data->foto ?? null
            ]
        );

        return back()->with('success', 'Berhasil disimpan');
    }
    public function storeVisiMisi(Request $request)
    {
        $request->validate([
            'visi' => 'required|string',
            'misi' => 'required|string',
        ]);

        $data = VisiMisi::first(); // ambil data pertama
        if ($data) {
            $data->update([
                'visi' => $request->visi,
                'misi' => $request->misi,
            ]);
        } else {
            VisiMisi::create([
                'visi' => $request->visi,
                'misi' => $request->misi,
            ]);
        }

        return redirect()->back()->with('success', 'Visi & Misi berhasil disimpan.');
    }
}
