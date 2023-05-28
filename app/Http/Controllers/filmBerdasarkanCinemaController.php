<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bioskop;

class filmBerdasarkanCinemaController extends Controller
{
    public function index()
    {
        return view ('filmBerdasarkanCinema',[
            "bioskops" => Bioskop::find(1)->cinemas(1)->get()
        ]);
    }
}