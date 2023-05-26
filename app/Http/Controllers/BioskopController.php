<?php

namespace App\Http\Controllers;
use App\Models\Lokasi;

use App\Models\Bioskop;
use App\Http\Requests\StoreBioskopRequest;
use App\Http\Requests\UpdateBioskopRequest;

class BioskopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('daftarBioskop', [
            "bioskops" => Bioskop::all(),
            "lokasis" => Lokasi::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBioskopRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Bioskop $bioskop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bioskop $bioskop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBioskopRequest $request, Bioskop $bioskop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bioskop $bioskop)
    {
        //
    }
}
