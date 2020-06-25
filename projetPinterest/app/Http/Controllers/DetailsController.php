<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function Details(){

        return view ('details');
    }
}
