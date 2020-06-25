<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('profil', 'ProfilController@profile');
Route::post('profil', 'ProfilController@update_avatar');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/profil', function () {
        return view("profil");
    });
});

Auth::routes();

Route::get('profil', 'ProfilController@profile');
Route::post('profil', 'ProfilController@update_avatar');
Route::group(['middleware' => 'auth'], function () {
    Route::get('profil', function () {
        return view("profil");
    });
});

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/profil', 'ProfilController@profilindex')->name('profil');


Route::get('/details', 'DetailsController@Details')->name('détails');


Route::get('/post', function(){

    $post = new App\Article();
    $post->image = "coucou.jpg";
    $post->title = 'coucou';
    $post->description = "maboy";
    $post->author = "maboyboy";
    $post->user_id = $user->id;

    $post->save();

});