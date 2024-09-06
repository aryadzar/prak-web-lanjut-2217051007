<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($nama, $npm, $kelas){
        return view('profile', compact('nama', 'npm', 'kelas'));
    }
}
