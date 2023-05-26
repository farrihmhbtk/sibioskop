<?php

namespace App\Http\Controllers;
use App\Models\Lokasi;

use Illuminate\Http\Request;

class CekTiketController extends Controller
{
    public function index()
    {
        return view('cekTiket',[
            "lokasis" => Lokasi::all()
        ]);
    }
}
