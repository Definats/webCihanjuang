<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function kecamatan()
    {
        return view('user.profil-kecamatan');
    }
}