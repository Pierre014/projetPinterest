<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function Profilindex()
    {
        return view('profil');
    }
}
