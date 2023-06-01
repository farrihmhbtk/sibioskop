<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CekTiketController;
use App\Http\Controllers\ResetPassController;
use App\Http\Controllers\filmBerdasarkanCinemaController;
use App\Models\Lokasi;


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

Route::get('/login', [LoginController::class, 'index']);

Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index']);

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/', [FilmController::class, 'index']);

Route::post('/', [FilmController::class, 'store']);

Route::get('/cekTiket', [CekTiketController::class, 'index']);

Route::get('/film/{film:slug}/{min_tanggal_tayangs}', [FilmController::class, 'showTodayDate']);

Route::get('/lokasi/{lokasi:city}', function(Lokasi $lokasi){
    return view('daftarCinema', [
        'cinemas' => $lokasi->cinemas
    ]);
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

Route::get('/pembayaransukses', [FilmController::class, 'pembayaransukses']);

Route::get('/cinema/{cinema:slug}/{min_tanggal_tayangs}', [FilmController::class, 'filmBB']);

Route::get('/editnama', function() {
    return view('edit-profil-nama');
});

Route::get('/editnope', function() {
    return view('edit-profil-nope');
});

Route::get('/editemail', function() {
    return view('edit-profil-email');
});

Route::get('/editpass', function() {
    return view('edit-profil-pass');
});

Route::get('/editprofil', function() {
    return view('edit-profil');
});

Route::get('/pilihkursi', function() {
    return view('pilih-kursi');
});
