<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
            'password' => 'required|min:3|max:255|unique:users',
            'phoneNumber' => 'required|unique:users|min:5',
            'email' => 'required|min:5|unique:users|max:255'
        ]);

        $user['password'] = bcrypt($user['password']);

        User::create($user);

        return redirect('/login')->with('success', 'Registration was successful!');
    }
}