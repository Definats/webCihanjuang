<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfilKecamatan;
use App\Models\VisiMisi;

class ProfilController extends Controller
{
    public function kecamatan()
    {
        $data = ProfilKecamatan::first(); // ambil data profil kecamatan
        $visiMisi = VisiMisi::first();    // ambil data visi & misi

        return view('user.profil-kecamatan', compact('data', 'visiMisi'));
    }
    public function desa()
    {
        return view('user.profil-desa');
    }

}