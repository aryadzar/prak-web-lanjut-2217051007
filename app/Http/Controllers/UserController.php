<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(){
        $data = Kelas::all();

        return view('');
    }
}
