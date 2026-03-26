<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Contoh data dummy user
        $users = [
            ['name' => 'Defina', 'email' => 'defina@example.com'],
            ['name' => 'Budi', 'email' => 'budi@example.com'],
            ['name' => 'Sari', 'email' => 'sari@example.com'],
        ];

        return view('user.index', compact('users'));
    }
}
