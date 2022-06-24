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

Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/homeAjax', [App\Http\Controllers\HomeController::class, 'indexPost'])->name('home');
Route::post('logout',[App\Http\Controllers\HomeController::class, 'logout']);
//Profile 
Route::get('/createProfile',[ProfileCon::class,'createProfile'])->middleware(['auth']);
Route::post('/saveProfile',[profileCon::class,'saveProfile'])->middleware(['auth']);
Route::get('/profilePage/{id}',[ProfileCon::class,'showProfilePage'])->middleware(['auth']);
Route::get('/editProfile/{id}',[ProfileCon::class,'showEditProfilePage'])->middleware(['auth']);
Route::post('/saveEditProfile/{id}',[ProfileCon::class,'saveEditProfilePage'])->middleware(['auth']);
//YourSelf
Route::get('/aboutYourSelf',[ProfileCon::class,'aboutYourSelfPageForm'])->middleware(['auth']);
Route::post('/saveYourSelf',[ProfileCon::class,'saveYourSelfFrom'])->middleware(['auth']);
//More Photo route
Route::get('/morePhoto',[ProfileCon::class,'morePhotoUpload'])->middleware(['auth']);
Route::post('/morePhotoUpload',[ProfileCon::class,'saveMorePhotoUpload'])->middleware(['auth']);
//follow option 
Route::post('/follow/{id}',[ProfileCon::class,'followOption']);