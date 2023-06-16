<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Cinema;
use App\Models\HistoryLokasi;
use App\Models\HistoryLokasiGuest;
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
            "min_tanggal_tayangs" => TanggalTayang::first()
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
     * Store a newly created resource in storage.
     */
    public function storeGuest(Request $request)
    {
        $validatedData = $request->validate([
            'lokasi' => 'required'
        ]);

        HistoryLokasiGuest::create($validatedData);

        return redirect('/');
    }

    public function storeAuth(Request $request)
    {
        $user = auth()->user()->id;

        $validatedData = $request->validate([
            'lokasi' => 'required',
            'user_id' => 'required'
        ]);

        HistoryLokasi::create($validatedData);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function showTodaysFilmGuest(Film $film, $min_tanggal_tayangs)
    {
        $lokasi = HistoryLokasiGuest::select('lokasi')->orderBy('id', 'desc')->first();

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
            ->where('lokasis.lokasi', '=', $lokasi->lokasi)
            ->where('films.slug', '=', $film->slug)
            ->get();

        if ($lokasi->lokasi == 'silahkanPilihLokasi') {
            $loopCinemas = DB::table('cinemas')->select('cinemas.cinema')->where('cinemas.cinemaID', '=', 1)->get();
            return view('bioskopBerdasarkanFilm', [
                "film" => $film,
                "loopCinemas" => $loopCinemas,
                "lokasi" => $lokasi,
                "min_tanggal_tayangs" => $min_tanggal_tayangs
            ]);
        }

        return view('bioskopBerdasarkanFilm', [
            "film" => $film,
            "loopCinemas" => $loopCinemas,
            "lokasi" => $lokasi,
            "min_tanggal_tayangs" => $min_tanggal_tayangs
        ]);
    }


    public function showTodaysFilmAuth(Film $film, $min_tanggal_tayangs)
    {
        $user = auth()->user();

        $lokasi = DB::table('history_lokasis')
                ->join('users', 'history_lokasis.user_id', '=', 'users.id')
                ->select('history_lokasis.*')
                ->where('users.id', '=', $user->id)
                ->orderBy('history_lokasis.id', 'desc')
                ->first();

        // $min_tanggal_tayangs = DB::table('tanggal_tayangs')->select('showDateID')->where('showDateID', $min_tanggal_tayangs)->get();

        // $min_tanggal_tayangs = TanggalTayang::whereshowdateid($min_tanggal_tayangs)->first();

        if($lokasi != null){
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
            ->where('lokasis.lokasi', '=', $lokasi->lokasi)
            ->where('films.slug', '=', $film->slug)
            ->get();

            if($lokasi->lokasi != 'silahkanPilihLokasi'){
                return view('bioskopBerdasarkanFilm', [
                    "film" => $film,
                    "loopCinemas" => $loopCinemas,
                    "lokasi" => $lokasi,
                    "min_tanggal_tayangs" => $min_tanggal_tayangs
                ]);
            }
                $loopCinemas = DB::table('cinemas')->select('cinemas.cinema')->where('cinemas.cinemaID', '=', 1)->get();
                return view('bioskopBerdasarkanFilm', [
                    "film" => $film,
                    "loopCinemas" => $loopCinemas,
                    "lokasi" => $lokasi,
                    "min_tanggal_tayangs" => $min_tanggal_tayangs
                ]);

        }
        
        $lokasi = Lokasi::select('lokasis.*')->where('lokasis.lokasiID', '=', 1)->get();
        
        $lokasi = Lokasi::find(1);

        $loopCinemas = DB::table('cinemas')->select('cinemas.cinema')->where('cinemas.cinemaID', '=', 1)->get();
                return view('bioskopBerdasarkanFilm', [
                    "film" => $film,
                    "loopCinemas" => $loopCinemas,
                    "lokasi" => $lokasi,
                    "min_tanggal_tayangs" => $min_tanggal_tayangs
                ]);
        
    }

    public function filmBBGuest(Cinema $cinema, $min_tanggal_tayangs)
    {
        $temp_lokasi = HistoryLokasiGuest::select('lokasi')->orderBy('id', 'desc')->first();

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
            // ->where('lokasis.lokasi', '=', $temp_lokasi->id_temp)
            ->where('cinemas.slug', '=', $cinema->slug)
            ->get();

        if ($temp_lokasi->lokasi == 'silahkanPilihLokasi') {
            return redirect()->back()->with('alert', 'hello');
        }

        return view('filmBerdasarkanCinema', [
            "cinemas" => $cinema,
            "loopFilms" => $loopFilms,
            // "temp_lokasi" => $temp_lokasi,
            "min_tanggal_tayangs" => $min_tanggal_tayangs,
        ]);
    }

    public function filmBBAuth(Cinema $cinema, $min_tanggal_tayangs)
    {

        $user = auth()->user()->id;
        $lokasi = DB::table('history_lokasis')
            ->join('users', 'history_lokasis.user_id', '=', 'users.id')
            ->select('history_lokasis.*')
            ->where('users.id', '=', $user)
            ->orderBy('history_lokasis.id', 'desc')
            ->first();
        $lokasiText = $lokasi ? $lokasi->lokasi : 'silahkanPilihLokasi';

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
            // ->where('lokasis.lokasi', '=', $temp_lokasi->id_temp)
            ->where('cinemas.slug', '=', $cinema->slug)
            ->get();

        if ($lokasiText == 'silahkanPilihLokasi') {
            return redirect()->back()->with('alert', 'hello');
        }

        return view('filmBerdasarkanCinema', [
            "cinemas" => $cinema,
            "loopFilms" => $loopFilms,
            // "temp_lokasi" => $temp_lokasi,
            "min_tanggal_tayangs" => $min_tanggal_tayangs,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */

}
