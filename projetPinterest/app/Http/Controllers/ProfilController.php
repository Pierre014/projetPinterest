<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profil extends Controller
{
    public function profile(){
        return view('profil', array('user' => Auth::user) );

    }
}
