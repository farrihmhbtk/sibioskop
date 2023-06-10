@extends('layouts.main')

@section('container')
<div class="container mb-4"
        style="padding-top: 3%; padding-bottom: 4%; box-shadow: -8px 10px #EEC921; width:97%; background-color: white; font-family: 'Poppins', sans-serif; border: 2px solid black; border-radius: 5px; margin-left: 0px;">
        <div class="row justify-content-center mb-4" >
            <div class="container" style="width: 80%; border: 2px solid black; border-radius: 5px; padding-top: 1.5%; padding-bottom: 1%; padding-left: 2%;">
                <div class="row">
                    <p class="fw-bold" style="margin-bottom: 0;">Mohon Transfer ke Rekening PT Dewa Bioskop Indonesia</p>
                </div>
                <div class="row">
                    <p style="margin-top: 0;">Jika sudah transfer, mohon klik tombol <span class="fw-bold">“Saya Sudah Bayar”</span> agar kami dapat melakukan verifikasi pembayaran dan menyelesaikan transaksi kamu</p> 
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container" style="width: 60%; border: 2px solid black; border-radius: 5px; padding-top: 1.5%; padding-left: 2%; padding-bottom: 1.5%;">
                <p class="fw-bold" style="margin-bottom: 0px; ">Bank BCA</p>
                <p style="">PT. Dewa Bioskop Indonesia</p>
                <div class="row fw-bold" style="width: 97.8%; border: 2px solid black; border-radius: 5px; padding-top: 1.5%; padding-bottom: 1.5%; margin-left: 0.2%; padding-left: 2%;">
                    0332571972
                </div>
                <p class="mt-3 mb-3"style="">Jumlah Transfer</p>
                <div class="row fw-bold" style="width: 97.8%; border: 2px solid black; border-radius: 5px; padding-top: 1.5%; padding-bottom: 1.5%; margin-left: 0.2%; padding-left: 2%;">
                    Rp {{ $totBay }}
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col text-center">
                @php
                    $bookingCode = mt_rand(100000,999999);
                @endphp
                <form action="/timer/{{ $showID }}/{{ $seats }}/{{ $totBay }}" method="post">
                    @csrf
                    
                    <input type="hidden" name="showID" id="showID" value="{{ $showID }}">
                    <input type="hidden" name="totalPembayaran" id="totalPembayaran" value="{{ $totBay }}">
                    <input type="hidden" name="user_id" id="user_id" value="{{ auth()->user()->id }}">
                    <input type="hidden" name="seats" id="seats" value="{{ $seats }}">
                    <input type="hidden" name="bookingCode" id="bookingCode" value="{{ $bookingCode }}">
                    <button type="submit" class="button1 text-center" style="font-size: 15pt; text-decoration: none; border: 2px solid black; border-radius: 5px; padding-top: 0.5%; padding-left: 5%; padding-bottom: 0.5%; padding-right:5%; box-shadow: -6px 8px black">Saya Sudah Bayar</button>
                </form>
            </div>
        </div>
</div>
@endsection
