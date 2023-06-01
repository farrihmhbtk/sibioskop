<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Cinema;
use App\Models\Lokasi;
use App\Models\TanggalTayang;
use App\Models\temp_lokasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('beranda', [
            "films" => Film::all(),
            "trailers" => Film::limit(5)->get(),
            "lokasis" => Lokasi::all(),
            "min_tanggal_tayangs"=> TanggalTayang::first()
        ]);
    }

    public function index2()
    {
        return view('coba', [
            "films" => Film::all()
        ]);
    }

    // public function indexCinema(Cinema $cinema)
    // {
    //     return view('filmBerdasarkanCinema', [
    //         "cinemas" => $cinema
    //     ]);
    // }

    public function pembayaransukses()
    {
        return view('pembayaransukses', [
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
    public function showTodayDate(Film $film, $min_tanggal_tayangs)
    {
        $temp_lokasi = temp_lokasi::select('id_temp')->orderBy('id', 'desc')->first();

        // $min_tanggal_tayangs = DB::table('tanggal_tayangs')->select('showDateID')->where('showDateID', $min_tanggal_tayangs)->get();

        // $min_tanggal_tayangs = TanggalTayang::whereshowdateid($min_tanggal_tayangs)->first();

        $loopCinemas = DB::table('lokasis')
        ->join('cinemas', 'lokasis.lokasiID', '=', 'cinemas.lokasiID')
        ->join('bioskops', 'cinemas.cinemaID', '=', 'bioskops.cinemaID')
        ->join('jadwal_films', 'bioskops.bioskopID', '=', 'jadwal_films.bioskopID')
        ->join('films', 'jadwal_films.filmID', '=', 'films.filmID')
        ->join('waktu_tayangs', 'jadwal_films.startTimeID', '=', 'waktu_tayangs.startTimeID')
        ->join('tanggal_tayangs', 'jadwal_films.showDateID', '=', 'tanggal_tayangs.showDateID')
        ->join('studios', 'jadwal_films.studioID', '=', 'studios.studioID')
        ->distinct()->select('cinemas.cinema')
        ->where('jadwal_films.showDateID', '=', $min_tanggal_tayangs)
        ->where('lokasis.city', '=', $temp_lokasi->id_temp)
        ->where('films.slug', '=', $film->slug)
        ->get(); 

        if($temp_lokasi->id_temp == 'silahkanPilihLokasi'){
            $loopCinemas = DB::table('cinemas')->select('cinemas.cinema')->where('cinemas.cinemaID', '=', 1)->get();
            return view('bioskopBerdasarkanFilm', [
                "film" => $film,
                "loopCinemas" => $loopCinemas,
                "temp_lokasi" => $temp_lokasi,
                "min_tanggal_tayangs" => $min_tanggal_tayangs
            ]);
        }

        return view('bioskopBerdasarkanFilm', [
            "film" => $film,
            "loopCinemas" => $loopCinemas,
            "temp_lokasi" => $temp_lokasi,
            "min_tanggal_tayangs" => $min_tanggal_tayangs
        ]);
    }

    public function filmBB(Cinema $cinema, $min_tanggal_tayangs)
    {
        $temp_lokasi = temp_lokasi::select('id_temp')->orderBy('id', 'desc')->first();

        // $min_tanggal_tayangs = DB::table('tanggal_tayangs')->select('showDateID')->where('showDateID', $min_tanggal_tayangs)->get();

        // $min_tanggal_tayangs = TanggalTayang::whereshowdateid($min_tanggal_tayangs)->first();

        $loopFilms = DB::table('lokasis')
        ->join('cinemas', 'lokasis.lokasiID', '=', 'cinemas.lokasiID')
        ->join('bioskops', 'cinemas.cinemaID', '=', 'bioskops.cinemaID')
        ->join('jadwal_films', 'bioskops.bioskopID', '=', 'jadwal_films.bioskopID')
        ->join('films', 'jadwal_films.filmID', '=', 'films.filmID')
        ->join('waktu_tayangs', 'jadwal_films.startTimeID', '=', 'waktu_tayangs.startTimeID')
        ->join('tanggal_tayangs', 'jadwal_films.showDateID', '=', 'tanggal_tayangs.showDateID')
        ->join('studios', 'jadwal_films.studioID', '=', 'studios.studioID')
        ->distinct()->select('jadwal_films.filmID')
        ->where('jadwal_films.showDateID', '=', $min_tanggal_tayangs)
        ->where('lokasis.city', '=', $temp_lokasi->id_temp)
        ->where('cinemas.slug', '=', $cinema->slug)
        ->get(); 

        if($temp_lokasi->id_temp == 'silahkanPilihLokasi'){
            return redirect()->back()->with('alert','hello');
        }

        return view('filmBerdasarkanCinema', [
            "cinemas" => $cinema,
            "loopFilms" => $loopFilms,
            "temp_lokasi" => $temp_lokasi,
            "min_tanggal_tayangs" => $min_tanggal_tayangs,
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
