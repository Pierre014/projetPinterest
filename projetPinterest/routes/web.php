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
    return view('welcome');
});

Route::get('profil', 'ProfilController@profile');
Route::post('profil', 'ProfilController@update_avatar');

Route::group(['middleware' => 'auth'],function(){
    Route::get('/profil', function(){
        return view("profil");
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
