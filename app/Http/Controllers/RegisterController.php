<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Registered;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Notifications\VerifyEmailNotification;
use Illuminate\Foundation\Auth\EmailVerificationRequest;


class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function verifEmail()
    {
        return view('register.verifikasiEmail', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:225',
            'password' => 'required|min:8|max:255|confirmed',
            'phoneNumber' => 'required|unique:users|min:5',
            'email' => 'required|min:5|unique:users|max:255'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['email_verified_at'] = null;

        $createdUser = User::create($validatedData);

        $createdUser->sendEmailVerificationNotification();

        event(new Registered($createdUser));

        Auth::login($createdUser); 

        $request->session()->regenerate(); 

        return redirect()->route('verification.notice');
    }
}
