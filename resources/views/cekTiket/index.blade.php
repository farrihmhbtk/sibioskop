@extends('layouts.main')

@section('container')
    <style>
        .custom-column {
            flex: 0 0 calc(50% - 1.3rem);
            /* Adjust the width as needed */
        }
    </style>

    <div class="container">
        <div class="row justify-content-between">

            {{-- Kolom tiket aktif --}}
            <div class="custom-column">

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

                    <hr>
                </div>

            </div>

            {{-- Kolom daftar transaksi --}}
            <div class="custom-column">

                {{-- Header "Daftar Transaksi" --}}
                <div class="header text-center px-4 py-3 border border-dark border-3 rounded-2"
                    style="background-color: #EEC921; box-shadow: -10px 12px black">
                    <h3>Daftar Transaksi</h3>
                </div>

                {{-- Container daftar transaksi --}}
                <div class="container-tiket-aktif px-4 py-3 mt-5 border border-dark border-3 rounded-2"
                    style="background-color: #EEC921; box-shadow: -10px 12px black">

                    {{-- Item 1 --}}
                    <x-card-tiket />

                    <hr>
                </div>
            </div>

        </div>
    @endsection
