<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{


    public function store(){
        return view('create_user');
    }
    public function store_request(Request $request){
        $name = $request->name;
        $kelas = $request->kelas;
        $npm = $request->npm;

        return view('profile', compact('name', 'kelas', 'npm'));
    }

    
}
