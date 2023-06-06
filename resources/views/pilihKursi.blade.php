@extends('layouts.main')

@section('container')
    <style>
        .row {
            display: flex;
        }

        .seat {
            background-color: #444451;
            /* height: 12px;
                                                        width: 15px; */
            margin: 5px;
            /* border-top-left-radius: 10px;
                                                    border-top-right-radius: 10px; */

            border-radius: 5px;
            font-size: 15pt;
            padding-top: 7px;
            font-weight: ;
            height: 50px;
            width: 50px;
            background: #EEC921;
            border: 2px solid black;
            transition: all .2s ease;
        }

        .seatShowcase {
            background-color: #444451;
            /* height: 12px;
                                                        width: 15px; */
            margin: 5px;
            /* border-top-left-radius: 10px;
                                                    border-top-right-radius: 10px; */
            border-radius: 5px;
            height: 50px;
            width: 50px;
            background: #EEC921;
            border: 2px solid black;
            transition: all .2s ease;
        }

        .seat.selected {
            background-color: #6feaf6;
            background-color: #EE6B21;
        }

        .seat.occupied {
            background-color: #fff;
        }

        .seat:nth-of-type(2) {
            margin-right: 18px;
        }

        .seat:nth-last-of-type(2) {
            margin-left: 18px;
        }

        .seat:not(.occupied):hover {
            /* Selecting seats that do not have "occupied" class */
            cursor: pointer;
            transform: scale(1.2);
        }

        .row {
            display: flex;
            justify-content: center;
            /* Align items horizontally to the center */
        }
    </style>

    <div class="container text-center">
        <div class="movie-screen mb-5">
            <img src='/img/screen-thumb.png' alt='screen' />
        </div>

        <?php
        $loopSeats = DB::table('kursis')
            ->join('bioskops', 'kursis.bioskopID', '=', 'bioskops.bioskopID')
            ->join('jadwal_films', 'bioskops.bioskopID', '=', 'jadwal_films.bioskopID')
            ->select('kursis.*')
            ->where('jadwal_films.showID', '=', $showID)
            ->get();
        ?>

        <div class="row-container" style="font-family: 'Poppins', sans-serif;">

            @php
                $chunkedSeats = $loopSeats->chunk(8);
            @endphp

            @foreach ($chunkedSeats as $rowSeats)
                <div class="row">
                    @foreach ($rowSeats as $index => $seat)
                        <div class="seat" data-seat-index="{{ $index }}">{{ $seat->seatNumber }}</div>
                    @endforeach
                </div>
            @endforeach

            <div class="container mb-4" style="font-family: 'Poppins', sans-serif;">
                <div class="row mt-5" style="">
                    <div class="col-3 mx-3 text-start"
                        style="padding-top: 6px; padding-bottom: 6px; padding-left: 1.2%; box-shadow: -7px 7px black; color: black; background-color: #EEC921; border: 2px solid black; border-radius: 8px;">
                        <div class="d-flex">
                            Total Harga
                        </div>
                        <div class="d-flex fw-bold" style="font-size: 18pt; margin-top: 0;">
                            Rp <span id="total">0</span>
                        </div>
                    </div>
                    <div class="col-3 mx-3 text-start"
                        style="padding-top: 6px; padding-bottom: 6px; padding-left: 1.2%; box-shadow: -7px 7px black; color: black; background-color: #EEC921; border: 2px solid black; border-radius: 8px;">
                        <div class="d-flex">
                            Selected Seat
                        </div>
                        <div class="d-flex fw-bold" style="font-size: 18pt; margin-top: 0;">
                            <span id='count'>0</span>
                        </div>
                    </div>
                </div>
                <div class="row mt-5" style="">
                    <div class="col-3" style="">
                        <div class="d-flex" style="list-style-type: none;">
                            <li>
                                <div class="seatShowcase"></div>
                                <small>Kosong</small>
                            </li>
                            <li>
                                <div class="seatShowcase" style="background-color: #EE6B21"></div>
                                <small>Dipilih</small>
                            </li>
                            <li>
                                <div class="seat occupied"></div>
                                <small>Terisi</small>
                            </li>
                        </div>
                    </div>
                    <div class="col-9" style="padding-top: 5px; padding-left: 14.8%">
                        <a href="/ringkasanOrder" style="text-decoration: none;">
                            <div class="button1 d-flex justify-content-center"
                                style="font-size: 15pt; padding-top: 1%; width: 35%; height: 62%; box-shadow: -7px 7px black; border: 2px solid black; border-radius: 8px;">
                                Ringkasan Order
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            {{-- <div class="text-wrapper">
                <p class="text">Selected Seats <span id='count'>0</span>
                <p class="text">Total Price ₹<span id="total">0</span></p>
            </div> --}}
        </div>

        <div class="movie-container" hidden="hidden">
            <label>Pick a movie:</label>
            <select id="movie">
                <option value="{{ $price }}" selected>Film Selected</option>
                {{-- <option value="850">Joker (₹850)</option>
                <option value="550">Jumanji: Next Level (₹550)</option>
                <option value="750">Dolittle (₹750)</option> --}}
            </select>
        </div>

        {{-- <ul class="showcase">
            <li>
                <div class="seat"></div>
                <small>N/A</small>
            </li>
            <li>
                <div class="seat selected"></div>
                <small>Selected</small>
            </li>
            <li>
                <div class="seat occupied"></div>
                <small>Occupied</small>
            </li>
        </ul> --}}

    </div>


    <!-- <div class="text-wrapper">
                                            <p class="text">Selected Seats <span id='count'>0</span>
                                                <p class="text">Total Price ₹<span id="total">0</span></p>
                                        </div> -->

    <script type="text/javascript" src="{{ URL::asset('js/pilihKursi.js') }}"></script>
@endsection
