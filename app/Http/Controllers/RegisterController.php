<?php

namespace App\Http\Controllers;

use App\Models\akun_pengguna;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|max:225',
            'password' => 'required|min:3|max:255|unique:akun_penggunas',
            'phoneNumber' => 'required|unique:akun_penggunas|min:5',
            'email' => 'required|min:5|max:255'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);


        akun_pengguna::create($validatedData);

        return redirect('/login')->with('success', 'Registration was successful!');
    }
}