@extends('layouts.main')

@section('container')
    <style>
        .custom-column {
            flex: 0 0 calc(50% - 1.3rem);
            margin-right: 1.7rem;
            /* Adjust the width as needed */
        }

        .row {
            font-family: 'Poppins', sans-serif;
        }


    </style>

    <div class="container mb-5" style="padding-left: 0px;">

        @auth
            <div class="row justify-content-between">

                {{-- Kolom tiket aktif --}}
                <div class="custom-column" style="margin-right: 0px; margin-left: 0px;">

                    {{-- Header "Tiket Aktif" --}}
                    <div class="header text-center px-4 py-3 border border-dark border-3 rounded-2"
                        style="background-color: #EEC921; box-shadow: -10px 12px black">
                        <h3>Tiket Aktif</h3>
                    </div>

                    {{-- Container tiket aktif --}}
                    <div class="container-tiket-aktif px-4 py-3 mt-5 border border-dark border-3 rounded-2"
                        style="background-color: #EEC921; box-shadow: -10px 12px black">

                        {{-- Item 1 --}}
                        <x-card-tiket />

                    </div>

                </div>

                {{-- Kolom daftar transaksi --}}
                <div class="custom-column" style="">

                    {{-- Header "Daftar Transaksi" --}}
                    <div class="header text-center px-4 py-3 border border-dark border-3 rounded-2"
                        style="background-color: #EEC921; box-shadow: -10px 12px black">
                        <h3>Daftar Transaksi</h3>
                    </div>

                    {{-- Container daftar transaksi --}}
                    <div class="text-center container-tiket-aktif px-4 py-3 mt-5 border border-dark border-3 rounded-2"
                        style="background-color: #EEC921; box-shadow: -10px 12px black">
                        <p>Belum ada daftar transaksi</p>
                        {{-- Item 1 --}}
                        {{-- <x-card-tiket />

                        <hr> --}}
                    </div>
                </div>

            </div>
        @else
            <div class="row" style="height: 85vh">
                <div class="col text-center" style="height: 100%; padding-top: 10%">
                    <i style="" class="bi bi-ticket-perforated fs-1"></i>
                    <p class="mb-5" style="font-size: 12pt;">Masuk untuk melihat tiket anda</p>
                    <a class="d-flex justify-content-center" href="/login" style="text-decoration: none;">
                        <div class="py-2 fs-5 button1"
                            style="width: 30%; box-shadow: -8px 10px black; font-family: 'Poppins', sans-serif; border: 2px solid black;  border-radius: 4px;">
                            Masuk atau Daftar Akun
                        </div>
                    </a>
                </div>
            </div>


        @endauth
    @endsection
