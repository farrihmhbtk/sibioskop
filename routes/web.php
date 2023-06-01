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

// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/login', [LoginController::class, 'index']);

Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index']);

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/', [FilmController::class, 'index']);

Route::post('/', [FilmController::class, 'store']);

Route::get('/cekTiket', [CekTiketController::class, 'index']);

Route::get('/film/{film:slug}/{temp_lokasi:id_temp}', [FilmController::class, 'show']);

Route::get('/lokasi/{lokasi:city}', function(Lokasi $lokasi){
    return view('daftarCinema', [
        'cinemas' => $lokasi->cinemas
    ]);
});



// Route::get('/filmBB', [filmBerdasarkanCinemaController::class, 'index']);

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
// Route::get('/pembayaransukses', function() {
//     return view('PembayaranSukses');
// });

Route::get('/pembayaransukses', [FilmController::class, 'pembayaransukses']);

Route::get('/cinema/{cinema:cinema}', [FilmController::class, 'indexCinema']);
