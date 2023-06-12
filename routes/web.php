<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CekTiketController;
use App\Http\Controllers\ResetPassController;
use App\Http\Controllers\EditProfileController;
use App\Http\Controllers\PilihKursiController;
use App\Http\Controllers\PanduanController;
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

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/', [FilmController::class, 'index']);

Route::post('/guest', [FilmController::class, 'storeGuest']);

Route::post('/auth', [FilmController::class, 'storeAuth']);

Route::get('/cekTiket', [CekTiketController::class, 'index']);

Route::get('/filmGuest/{film:slug}/{min_tanggal_tayangs}', [FilmController::class, 'showTodaysFilmGuest']);

Route::get('/filmAuth/{film:slug}/{min_tanggal_tayangs}', [FilmController::class, 'showTodaysFilmAuth']);

Route::get('/lokasi/{lokasi:city}', function (Lokasi $lokasi) {
    return view('daftarCinema', [
        'cinemas' => $lokasi->cinemas
    ]);
});

Route::get('/panduan', function () {
    return view('panduan');
});

Route::get('/ringkasanOrder', function () {
    return view('ringkasanOrder');
});

Route::get('/coba', [FilmController::class, 'index2']);

Route::get('/reset', [ResetPassController::class, 'index']);

Route::get('/resetVerification', [ResetPassController::class, 'verification']);

Route::get('/resetEnter', [ResetPassController::class, 'enterPassword']);

Route::get('/cinemaGuest/{cinema:slug}/{min_tanggal_tayangs}', [FilmController::class, 'filmBBGuest']);

Route::get('/cinemaAuth/{cinema:slug}/{min_tanggal_tayangs}', [FilmController::class, 'filmBBAuth']);

Route::get('/editName', function () {
    return view('edit-profile.edit-profile-nama');
});

Route::get('/editNoHP', function () {
    return view('edit-profile.edit-profile-noHP');
});

Route::get('/editEmail', function () {
    return view('edit-profile.edit-profile-email');
})->middleware('auth');

Route::get('/editpass', function () {
    return view('edit-profile.edit-profile-pass');
});

Route::get('/profile', function () {
    return view('edit-profile.edit-profile');
});

// Route::get('/pilihKursi', function() {
//     return view('pilihKursi');
// });

Route::post('/editName/{user:id}', [EditProfileController::class, 'editName']);

Route::post('/editPass/{user:id}', [EditProfileController::class, 'editPass']);

Route::post('/editNoHP', [EditProfileController::class, 'editNoHP']);

Route::post('/editEmail', [EditProfileController::class, 'editEmail']);

Route::get('/pilihKursi/{showID}', [PilihKursiController::class, 'pilihKursi'])->middleware('auth');

Route::get('/ringkasanOrder/{showID}/{seats}', [PilihKursiController::class, 'ringkasanOrder'])->middleware('auth');

Route::get('/ringkasanOrder/{showID}/', [PilihKursiController::class, 'belumPilihKursi'])->middleware('auth');

Route::get('/transfer/{showID}/{seats}/{totBay}/{orderNumber}', [PilihKursiController::class, 'transfer'])->middleware('auth');

Route::post('/timer/{showID}/{seats}/{totBay}', [PilihKursiController::class, 'storePesanan'])->middleware('auth');

Route::get('/pembayaranSukses/{showID}/{seats}/{totBay}', [PilihKursiController::class, 'pembayaranSukses'])->middleware('auth');

Route::get('/panduan', [PanduanController::class, 'index']);
