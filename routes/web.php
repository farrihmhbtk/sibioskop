<?php

use App\Models\Lokasi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CekTiketController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetPassController;
use App\Http\Controllers\PilihKursiController;
use App\Http\Controllers\EditProfileController;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Password;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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

Route::get('/lokasi/{lokasi:lokasi}', function(Lokasi $lokasi){
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

Route::get('/cinemaGuest/{cinema:slug}/{min_tanggal_tayangs}', [FilmController::class, 'filmBBGuest']);

Route::get('/cinemaAuth/{cinema:slug}/{min_tanggal_tayangs}', [FilmController::class, 'filmBBAuth']);

Route::get('/editName', function() {
    return view('edit-profile.edit-profile-nama');
});

Route::get('/editNoHP', function() {
    return view('edit-profile.edit-profile-noHP');
});

Route::get('/editEmail', function() {
    return view('edit-profile.edit-profile-email');
})->middleware('auth');

Route::get('/editpass', function() {
    return view('edit-profile.edit-profile-pass');
});

Route::get('/profile', function() {
    return view('edit-profile.edit-profile');
});

Route::post('/editName/{user:id}', [EditProfileController::class, 'editName']);

Route::post('/editPass/{user:id}', [EditProfileController::class, 'editPass']);

Route::post('/editNoHP', [EditProfileController::class, 'editNoHP']);

Route::post('/editEmail', [EditProfileController::class, 'editEmail']);

Route::get('/pilihKursi/{showID}', [PilihKursiController::class, 'pilihKursi'])->middleware('auth');

// ->middleware(['auth', 'verified']);

Route::get('/ringkasanOrder/{showID}/{seats}', [PilihKursiController::class, 'ringkasanOrder'])->middleware('auth');

Route::get('/ringkasanOrder/{showID}/', [PilihKursiController::class, 'belumPilihKursi'])->middleware('auth');

Route::get('/transfer/{showID}/{seats}/{totBay}/{orderNumber}', [PilihKursiController::class, 'transfer'])->middleware('auth');

Route::post('/timer/{showID}/{seats}/{totBay}', [PilihKursiController::class, 'storePesanan'])->middleware('auth');

Route::get('/pembayaranSukses/{showID}/{seats}/{totBay}', [PilihKursiController::class, 'pembayaranSukses'])->middleware('auth');

// EMAIL VERIFICATION

// Email Verification Routes | DONE
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware(['auth'])->name('verification.notice');

// The Email Verification Handler | DONE
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');

// Resending The Verification Email | DONE
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Link verifikasi telah dikirim!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// RESET PASSWORD

// The Password Reset Link Request Form
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');

// Handling The Form Submission
Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);
 
    $status = Password::sendResetLink(
        $request->only('email')
    );
 
    return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

// The Password Reset Form
Route::get('/reset-password/{token}', function (string $token) {
    return view('auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');

// Handling The Form Submission
Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);
 
    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function (User $user, string $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));
 
            $user->save();
 
            event(new PasswordReset($user));
        }
    );
 
    return $status === Password::PASSWORD_RESET
                ? redirect()->route('login')->with('status', __($status))
                : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');