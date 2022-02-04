<?php

use App\Http\Controllers\DasboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UndanganController;
use App\Models\Undangan;
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

Route::get('/login', [LoginController::class, 'show'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/register', [LoginController::class, 'register'])->middleware('guest');
Route::post('/register', [LoginController::class, 'create']);

Route::get('/dasbord', [DasboardController::class, 'index'])->middleware('auth');
Route::get('/logout', [DasboardController::class, 'logout'])->middleware('auth');
Route::get('/hapus/{undangan}', [DasboardController::class, 'hapus'])->middleware('auth');
Route::get('/edit/{undangan}', [DasboardController::class, 'edit'])->middleware('auth');
Route::put('/edit/{undangan}', [DasboardController::class, 'update'])->middleware('auth');


Route::get('/create', function(){
    return view('layout.dasboard.create');
});

Route::get('/demo/classic', function(){
    return view('layout.themes.classic.classic');
});

Route::get('/create/themes/classic', [UndanganController::class, 'index']);
Route::post('/create/themes/', [UndanganController::class, 'store']);

Route::get('/{undangan:slug}', [UndanganController::class, 'show']);
Route::post('/{undangan:slug}', [UndanganController::class, 'sent']);