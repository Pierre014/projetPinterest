<?php

namespace App\Http\Controllers;

use Faker\Provider\Image as ProviderImage;
use Illuminate\Http\Request;
use Image;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class ProfilController extends Controller
{
    public function profile(){
        return view('profil', array('user' => Auth::user()) );
    }

    public function update_avatar(Request $request){

        // if(Auth::user()->avatar == null){
        //     Auth::user()->avatar = "default-avatar.jpg";
        // }

         if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();

            Image::make($avatar)->save(public_path('image/' .$filename));

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }

        return view('profil', array('user' => Auth::user()) );
    }
}
