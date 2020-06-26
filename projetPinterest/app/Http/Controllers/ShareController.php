<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\UploadFile;
use App\Article;
use App\User;
use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class ShareController extends Controller
{
    public function index(){

        return view ('share');
    }

    public function store(Request $request){

       request()->validate([
           'title' => 'required|string|max:255',
           'content' =>'required|string|max:500',
           'image'=>'required|string',
       ]);

       $title = request('title');
       $content = request('content');
       $request->file('image');
       
       
       $article = new Article();
       $article->title = $title;
       $article->author = "john wick";
       $article->content = $title;
       $article->image = $image;
       $article->user_id = 1;
       $article->save();
       
    }
}
