<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CekTiketController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PesanTiketController;
use App\Http\Controllers\EditProfileController;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Password;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
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

Route::group(['middleware' => ['auth', 'verified']], function () {

    Route::get('/panduan', [EditProfileController::class, 'showPanduan']);

    Route::get('/ringkasanOrder', [PesanTiketController::class, 'showRingkasanOrder']);

    Route::get('/editName', [EditProfileController::class, 'showEditName']);

    Route::get('/editNoHP', [EditProfileController::class, 'showEditNoHP']);

    Route::get('/editEmail', [EditProfileController::class, 'showEditEmail']);

    Route::get('/editpass', [EditProfileController::class, 'showEditPass']);

    Route::get('/profile', [EditProfileController::class, 'showEditProfile']);

    Route::get('/pilihKursi/{showID}', [PesanTiketController::class, 'pilihKursi']);

    Route::get('/ringkasanOrder/{showID}/{seats}', [PesanTiketController::class, 'ringkasanOrder']);

    Route::get('/ringkasanOrder/{showID}/', [PesanTiketController::class, 'belumPilihKursi']);

    Route::get('/transfer/{showID}/{seats}/{totBay}/{orderNumber}', [PesanTiketController::class, 'transfer']);

    Route::post('/timer/{showID}/{seats}/{totBay}', [PesanTiketController::class, 'storePesanan']);

    Route::get('/pembayaranSukses/{showID}/{seats}/{totBay}', [PesanTiketController::class, 'pembayaranSukses']);
});

Route::group(['middleware' => 'guest'], function () {

    Route::get('/login', [LoginController::class, 'index'])->name('login');

    Route::get('/register', [RegisterController::class, 'index']);

});

Route::get('/cinemaAuth/{cinema:slug}/{min_tanggal_tayangs}', [FilmController::class, 'filmBBAuth']);

Route::get('/filmAuth/{film:slug}/{min_tanggal_tayangs}', [FilmController::class, 'showTodaysFilmAuth']);

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/verifEmail', [RegisterController::class, 'verifEmail']);

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/', [FilmController::class, 'index']);

Route::post('/guest', [FilmController::class, 'storeGuest']);

Route::post('/auth', [FilmController::class, 'storeAuth']);

Route::get('/cekTiket', [CekTiketController::class, 'index']);

Route::get('/filmGuest/{film:slug}/{min_tanggal_tayangs}', [FilmController::class, 'showTodaysFilmGuest']);

Route::get('/lokasi/{lokasi:lokasi}', function (Lokasi $lokasi) {
    return view('daftarCinema', [
        'cinemas' => $lokasi->cinemas
    ]);
});

Route::get('/cinemaGuest/{cinema:slug}/{min_tanggal_tayangs}', [FilmController::class, 'filmBBGuest']);

Route::post('/editName/{user:id}', [EditProfileController::class, 'editName']);

Route::post('/editPass/{user:id}', [EditProfileController::class, 'editPass']);

Route::post('/editNoHP', [EditProfileController::class, 'editNoHP']);

Route::post('/editEmail', [EditProfileController::class, 'editEmail']);

// EMAIL VERIFICATION

// The Email Verification Notice | DONE
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware(['auth'])->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    
    $message = $request->user()->hasVerifiedEmail() ? 'Email successfully verified!' : 'Email verification failed.';
    session()->flash('verification_status', $message);
    session()->save();
    
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
Route::get('/panduan', [PanduanController::class, 'index']);
