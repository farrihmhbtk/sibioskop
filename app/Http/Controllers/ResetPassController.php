<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ResetPassController extends Controller
{
    public function index()
    {
        return view('lupa-password.lupaPassword');
    }
    public function verification()
    {
        return view('lupa-password.verifikasiLupaPassword');
    }
    public function enterPassword()
    {
        return view('lupa-password.isiPasswordBaru');
    }
}
