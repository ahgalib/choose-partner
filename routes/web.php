<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileCon;


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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('logout',[App\Http\Controllers\HomeController::class, 'logout']);
//Profile 
Route::get('/createProfile',[ProfileCon::class,'createProfile']);
Route::post('/saveProfile',[profileCon::class,'saveProfile']);
Route::get('/profilePage/{id}',[ProfileCon::class,'showProfilePage']);
Route::get('/editProfile/{id}',[ProfileCon::class,'showEditProfilePage']);
Route::post('/saveEditProfile/{id}',[ProfileCon::class,'saveEditProfilePage']);
//YourSelf
Route::get('/aboutYourSelf',[ProfileCon::class,'aboutYourSelfPageForm']);
Route::post('/saveYourSelf',[ProfileCon::class,'saveYourSelfFrom']);

