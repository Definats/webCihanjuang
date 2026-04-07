<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfilKecamatan extends Model
{
    protected $table = 'profil_kecamatan';

    protected $fillable = [
        'jabatan',
        'nama',
        'deskripsi',
        'foto'
    ];
}
