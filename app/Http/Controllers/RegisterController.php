<?php

namespace App\Http\Controllers;
use Illuminate\Auth\Events\Registered;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Notifications\VerifyEmailNotification;


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
        $user = $request->validate([
            'name' => 'required|max:225',
            'password' => 'required|min:3|max:255',
            'phoneNumber' => 'required|unique:users|min:5',
            'email' => 'required|min:5|unique:users|max:255'
        ]);


    
        $user['password'] = bcrypt($user['password']);
    
        $createdUser = User::create($user);
    
        $createdUser->notify(new VerifyEmailNotification);

        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            session()->regenerate();
            return redirect()->intended('/email/verify');
            // return back()->with('loginSuccess', 'joss!');
        }
        
    }
    
}
