<?php

use App\Http\Controllers\BioskopController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CekTiketController;
use App\Http\Controllers\ResetPassController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/login', [LoginController::class, 'index']);

Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index']);

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/', [FilmController::class, 'index']);

Route::get('/cekTiket', [CekTiketController::class, 'index']);

Route::get('/daftarBioskop', [BioskopController::class, 'index']);

Route::get('/film/{film:slug}', [FilmController::class, 'show']);

Route::get('/filmBB', function() {
    return view('filmBerdasarkanBioskop');
});

Route::get('/panduan', function() {
    return view('panduan');
});

Route::get('/ringkasanOrder', function() {
    return view('ringkasanOrder');
});

Route::get('/coba', [FilmController::class, 'index2']);

Route::get('/reset', [ResetPassController::class, 'index']);

Route::get('/resetVerification', [ResetPassController::class, 'verification']);

Route::get('/resetEnter', [ResetPassController::class, 'enterPassword']);
