<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Article;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function Details(Article $article, $id){

        $article = Article::findOrFail($id);
        return view ('details' , compact('article'));
    }
}
