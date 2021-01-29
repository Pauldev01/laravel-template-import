<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
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

Route::get('/',[HomeController::class,'index']) -> name('Home');
Route::get('/about',[AboutController::class,'about']) ->name('About');
Route::get('/profil',[ProfilController::class,'profil'])->name('Profil');
Route::get('/store',[StoreController::class,'store'])->name('Store');