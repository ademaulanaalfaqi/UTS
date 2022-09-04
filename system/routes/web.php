<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KomenController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KomenAdminController;
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

// login
Route::get('login', [AuthController::class, 'login']);
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);

// blog
Route::get('home', [HomeController::class, 'showHome']);
Route::get('detail', [HomeController::class, 'showDetail']);
Route::get('detail/{artikel}', [HomeController::class, 'showDetail']);

// admin
Route::get('base', [AdminController::class, 'showBase']);
Route::get('user', [AdminController::class, 'showUser']);
Route::get('komen', [AdminController::class, 'showKomen']);
Route::get('artikel', [AdminController::class, 'showArtikel']);
Route::get('dashboard', [AdminController::class, 'showDashboard']);

// user
Route::get('user', [UserController::class, 'index']);
Route::get('user/create', [UserController::class, 'create']);
Route::post('user', [UserController::class, 'store']);
Route::get('user/{user}', [UserController::class, 'show']);
Route::get('user/{user}/edit', [UserController::class, 'edit']);
Route::put('user/{user}', [UserController::class, 'update']);
Route::delete('user/{user}', [UserController::class, 'destroy']);

// artikel
Route::get('artikel', [ArtikelController::class, 'index']);
Route::get('artikel/create', [ArtikelController::class, 'create']);
Route::post('artikel', [ArtikelController::class, 'store']);
Route::get('artikel/{artikel}', [ArtikelController::class, 'show']);
Route::get('artikel/{artikel}/edit', [ArtikelController::class, 'edit']);
Route::put('artikel/{artikel}', [ArtikelController::class, 'update']);
Route::delete('artikel/{artikel}', [ArtikelController::class, 'destroy']);
Route::post('artikel/filter', [ArtikelController::class, 'filter']);

// komentar
Route::get('komen', [KomenAdminController::class, 'index']);
Route::get('komen/{komen}', [KomenAdminController::class, 'show']);
Route::post('home', [KomenController::class, 'store']);