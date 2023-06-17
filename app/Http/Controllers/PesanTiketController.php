<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Pesanan;
use App\Models\KursiPesanan;
use App\Models\Kursi;
use Illuminate\Http\Request;

class PesanTiketController extends Controller
{
    public function pilihKursi($showID)
    {
        return view('pilihKursi', [
            'showID' => $showID,
            'alert' => ''
        ]);
    }

    public function belumPilihKursi($showID)
    {
        return view('pilihKursi', [
            'showID' => $showID,
            'alert' => '*Silahkan Pilih Kursi Terlebih dahulu'
        ]);
    }

    public function ringkasanOrder($showID, $seats)
    {
        $films = DB::table('jadwal_films')
            ->join('films', 'jadwal_films.filmID', '=', 'films.filmID')
            ->select('films.*')
            ->where('jadwal_films.showID', '=', $showID)
            ->get();
        return view('ringkasanOrder', [
            'showID' => $showID,
            'seats' => $seats,
            'films' => $films
        ]);
    }

    public function transfer($showID, $seats, $totBay, $orderNumber)
    {
        return view('transfer', [
            'showID' => $showID,
            'seats' => $seats,
            'totBay' => $totBay,
            'orderNumber' => $orderNumber
        ]);
    }

    public function storePesanan(Request $request, $showID, $seats, $totBay)
    {
        $pesanans = $request->validate([
            'showID' => 'required',
            'totalPembayaran' => 'required',
            'user_id' => 'required',
            'bookingCode' => 'required'
        ]);

        $seatNumbers = explode(', ', $seats); 

        $pesanan = Pesanan::create($pesanans);

        foreach ($seatNumbers as $seatNumber) {

            $seatIDs = DB::table('kursis')
                ->join('bioskops', 'kursis.bioskopID', '=', 'bioskops.bioskopID')
                ->join('jadwal_films', 'bioskops.bioskopID', '=', 'jadwal_films.bioskopID')
                ->where('jadwal_films.showID', '=', $showID)
                ->where('kursis.seatNumber', '=', $seatNumber)
                ->pluck('kursis.seatID')
                ->toArray(); 
            foreach ($seatIDs as $seatID) {
                KursiPesanan::create([
                    'seatID' => $seatID,
                    'orderNumber' => $pesanan->orderNumber
                ]);
            }
        }

        return view('timerTransaction', [
            'showID' => $showID,
            'seats' => $seats,
            'totBay' => $totBay
        ]);
    }

    public function pembayaranSukses($showID, $seats, $totBay)
    {
        $films = DB::table('jadwal_films')
            ->join('films', 'jadwal_films.filmID', '=', 'films.filmID')
            ->select('films.*')
            ->where('jadwal_films.showID', '=', $showID)
            ->get();
        return view('pembayaranSukses', [
            'showID' => $showID,
            'seats' => $seats,
            'totBay' => $totBay,
            'films' => $films
        ]);
    }
}
