<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CekTiketController;
use App\Http\Controllers\ResetPassController;
use App\Http\Controllers\EditProfileController;
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

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/verifEmail', [RegisterController::class, 'verifEmail']);

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

Route::get('/editName', function() {
    return view('edit-profile.edit-profile-nama');
});

Route::get('/editNoHP', function() {
    return view('edit-profile.edit-profile-noHP');
});

Route::get('/editEmail', function() {
    return view('edit-profile.edit-profile-email');
});

Route::get('/editpass', function() {
    return view('edit-profile.edit-profile-pass');
});

Route::get('/profile', function() {
    return view('edit-profile.edit-profile');
});

Route::get('/pilihkursi', function() {
    return view('pilihKursi');
});

Route::post('/editName/{user:id}', [EditProfileController::class, 'editName']);

Route::post('/editPass/{user:id}', [EditProfileController::class, 'editPass']);

Route::post('/editNoHP', [EditProfileController::class, 'editNoHP']);

Route::post('/editEmail', [EditProfileController::class, 'editEmail']);
