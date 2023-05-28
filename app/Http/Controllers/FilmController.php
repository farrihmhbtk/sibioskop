<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Lokasi;
use App\Models\temp_lokasi;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('beranda', [
            "films" => Film::all(),
            "trailers" => Film::limit(5)->get(),
            "lokasis" => Lokasi::all()
        ]);
    }

    public function index2()
    {
        return view ('coba', [
            "films" => Film::all()
        ]);
    }

    public function pembayaransukses()
    {
        return view ('pembayaransukses', [
            "films" => Film::where('filmID', 2)->get()
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
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_temp' => 'required'
        ]);

        temp_lokasi::create($validatedData);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(film $film)
    {
        return view ('bioskopBerdasarkanFilm', [
            "film" => $film
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Film $film)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Film $film)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Film $film)
    {
        //
    }
}
