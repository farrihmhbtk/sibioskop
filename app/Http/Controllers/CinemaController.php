<?php

namespace App\Http\Controllers;
use App\Models\Lokasi;

use App\Models\Cinema;
use App\Http\Requests\StoreCinemaRequest;
use App\Http\Requests\UpdateCinemaRequest;

class CinemaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view ('daftarCinema', [
        //     "cinemas" => Cinema::find(1)
        // ]);
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
    // public function store(StoreCinemaRequest $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     */
    public function show(cinema $cinema)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cinema $cinema)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(UpdatecinemaRequest $request, cinema $cinema)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cinema $cinema)
    {
        //
    }
}
