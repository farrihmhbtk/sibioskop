<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PilihKursiController extends Controller
{
    public function index($showID, $price, $startTimeID)
    {
        return view ('pilihKursi',[
            'showID' => $showID,
            'price' => $price,
            'startTimeID' => $startTimeID
        ]);
    }
}
