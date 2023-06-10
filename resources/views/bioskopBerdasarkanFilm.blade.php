@extends('layouts.main')

@section('container')
    <style>
        li {
            margin: 10px 0;
            font-size: 10pt;
        }

        ul {
            padding: 0;

        }

        .button1 {
            background-color: #EEC921;
            color: black;
        }

        .button1:hover {
            background-color: #A49241;
            color: white;
        }
    </style>
    <div class="d-block justify-content-start" style="width: 94%;">
        <div class="row">
            {{-- ROW KIRI --}}
            <div class="col-sm-6" style="position:fixed;">
                {{-- ATAS (TRAILER) --}}
                <div class="row">
                    <div class="col-sm-12 mb-5">
                        <div class="wrapper" style="position: relative; width: 480px; ">
                            <img id="video-cover" src="{{ $film->linkCoverTrailer }}" alt="Video title"
                                style="max-width: 100%; height:auto; border-radius: 8px; border: 2px solid black; box-shadow: -10px 12px black">
                            <iframe id="video" width="480" height="269"
                                src="https://www.youtube.com/embed/{{ $film->linkTrailerID }}" frameborder="0"
                                allow="autoplay; encrypted-media" allowfullscreen style="display: none;">
                            </iframe>
                            <button id="playbutton" class="play-btn">
                                <svg width="100" height="103" viewBox="0 0 119 123" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M113.484 65.7418C113.484 96.9896 88.1525 122.321 56.9047 122.321C25.6569 122.321 0.325562 96.9896 0.325562 65.7418C0.325562 34.494 25.6569 9.1627 56.9047 9.1627C88.1525 9.1627 113.484 34.494 113.484 65.7418Z"
                                        fill="#222222" />
                                    <circle cx="61.6195" cy="57.255" r="56.5791" fill="#EEC921" />
                                    <path
                                        d="M83.3519 52.4533C86.6853 54.3778 86.6853 59.1891 83.3519 61.1136L53.7959 78.1778C50.4625 80.1023 46.2959 77.6967 46.2959 73.8477V39.7193C46.2959 35.8703 50.4625 33.4646 53.7959 35.3891L83.3519 52.4533Z"
                                        fill="#222222" />
                                </svg>

                            </button>
                        </div>
                    </div>
                    {{-- ATAS (POSTER DAN INFO FILM) --}}
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-3" style="">
                                <div class="wrapper"
                                    style="width: 130px; float: none; display:inline-block;position: relative; margin-right:30px">
                                    <img src="{{ $film->linkPoster }}" alt=""
                                        style="max-width: 100%; height:auto; border-radius: 8px; box-shadow: -8px 10px black;">
                                    <svg class="mt-3" style="" width="130" height="30" viewBox="0 0 180 36"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16.7241 3.6236L20.3539 14.795H32.1003L22.5973 21.6994L26.2271 32.8708L16.7241 25.9665L7.2211 32.8708L10.8509 21.6994L1.34793 14.795H13.0943L16.7241 3.6236Z"
                                            fill="#222222" />
                                        <path
                                            d="M18.6838 2.30209L21.8381 12.01L21.9504 12.3555H22.3136H32.5211L24.2631 18.3553L23.9692 18.5688L24.0815 18.9143L27.2358 28.6222L18.9777 22.6224L18.6838 22.4089L18.3899 22.6224L10.1319 28.6222L13.2862 18.9143L13.3984 18.5688L13.1045 18.3553L4.84649 12.3555H15.054H15.4173L15.5295 12.01L18.6838 2.30209Z"
                                            fill="#EEC921" stroke="black" />
                                        <path
                                            d="M52.9782 3.6236L56.6081 14.795H68.3544L58.8514 21.6994L62.4812 32.8708L52.9782 25.9665L43.4753 32.8708L47.1051 21.6994L37.6021 14.795H49.3484L52.9782 3.6236Z"
                                            fill="#222222" />
                                        <path
                                            d="M54.938 2.30209L58.0923 12.01L58.2045 12.3555H58.5678H68.7753L60.5172 18.3553L60.2234 18.5688L60.3356 18.9143L63.4899 28.6222L55.2319 22.6224L54.938 22.4089L54.6441 22.6224L46.386 28.6222L49.5403 18.9143L49.6526 18.5688L49.3587 18.3553L41.1006 12.3555H51.3081H51.6714L51.7837 12.01L54.938 2.30209Z"
                                            fill="#EEC921" stroke="black" />
                                        <path
                                            d="M89.2326 3.6236L92.8625 14.795H104.609L95.1058 21.6994L98.7356 32.8708L89.2326 25.9665L79.7296 32.8708L83.3595 21.6994L73.8565 14.795H85.6028L89.2326 3.6236Z"
                                            fill="#222222" />
                                        <path
                                            d="M91.1924 2.30209L94.3467 12.01L94.4589 12.3555H94.8222H105.03L96.7716 18.3553L96.4777 18.5688L96.59 18.9143L99.7443 28.6222L91.4863 22.6224L91.1924 22.4089L90.8985 22.6224L82.6404 28.6222L85.7947 18.9143L85.907 18.5688L85.6131 18.3553L77.355 12.3555H87.5625H87.9258L88.0381 12.01L91.1924 2.30209Z"
                                            fill="#EEC921" stroke="black" />
                                        <path
                                            d="M125.487 3.6236L129.117 14.795H140.863L131.36 21.6994L134.99 32.8708L125.487 25.9665L115.984 32.8708L119.614 21.6994L110.111 14.795H121.857L125.487 3.6236Z"
                                            fill="#222222" />
                                        <path
                                            d="M127.447 2.30209L130.601 12.01L130.713 12.3555H131.077H141.284L133.026 18.3553L132.732 18.5688L132.844 18.9143L135.999 28.6222L127.741 22.6224L127.447 22.4089L127.153 22.6224L118.895 28.6222L122.049 18.9143L122.161 18.5688L121.867 18.3553L113.609 12.3555H123.817H124.18L124.292 12.01L127.447 2.30209Z"
                                            fill="#EEC921" stroke="black" />
                                        <path
                                            d="M161.741 3.6236L165.371 14.795H177.117L167.614 21.6994L171.244 32.8708L161.741 25.9665L152.238 32.8708L155.868 21.6994L146.365 14.795H158.111L161.741 3.6236Z"
                                            fill="#222222" />
                                        <path
                                            d="M163.701 2.30209L166.855 12.01L166.967 12.3555H167.331H177.538L169.28 18.3553L168.986 18.5688L169.099 18.9143L172.253 28.6222L163.995 22.6224L163.701 22.4089L163.407 22.6224L155.149 28.6222L158.303 18.9143L158.416 18.5688L158.122 18.3553L149.864 12.3555H160.071H160.434L160.547 12.01L163.701 2.30209Z"
                                            fill="#EEC921" stroke="black" />
                                    </svg>

                                </div>
                            </div>
                            <div class="col-sm-8" style="">
                                <ul class="text-start" style="list-style-type: none; font-family: 'Poppins', sans-serif; ">
                                    <li class=""
                                        style="font-family: 'ChunkFive', sans-serif; font-size: 12pt; margin-top: 0; ">
                                        {{ $film->title }}
                                    </li>
                                    <li>
                                        Genre &emsp; &emsp; &emsp;{{ $film->genre }}
                                    </li>
                                    <li>
                                        Durasi &emsp; &emsp; &emsp;{{ $film->durasi }}
                                    </li>
                                    <li>
                                        Sutradara &emsp; &nbsp;{{ $film->sutradara }}
                                    </li>
                                    <li>
                                        Rating Usia &emsp;{{ $film->ratingUsia }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            {{-- ROW KANAN --}}
            <div class="col-sm-6 mb-4"
                style=" font-family: 'Poppins', sans-serif; margin-left: 50%; white-space: nowrap; position: relative;">
                <div class="row">
                    {{-- TANGGAL TAYANG --}}
                    <div class="col-sm-12 mb-2 text-center"
                        style="padding-left: 5%; padding-bottom: 2%; white-space: nowrap; position: relative; overflow-x: scroll; -webkit-overflow-scrolling: touch;">
                        <?php
                        $tanggals = DB::table('tanggal_tayangs')
                            ->select('tanggal_tayangs.*')
                            ->get();
                        ?>

                        @foreach ($tanggals as $tanggal)
                        @auth
                        <a href="/filmAuth/{{ $film->slug }}/{{ $tanggal->showDateID }}" style="color: black;">

                        @else
                        <a href="/filmGuest/{{ $film->slug }}/{{ $tanggal->showDateID }}" style="color: black;">
                        @endauth
                                <div class="justify-content-start py-2 fs-6 button1"
                                    style="width: 18%; margin-right: 20%; box-shadow: -5px 7px black; font-family: 'Poppins', sans-serif; border: 2px solid black;  border-radius: 4px; float: none; display:inline-block;position: relative;">
                                    {{ $tanggal->showDateStr }}
                                </div>
                            </a>
                        @endforeach
                    </div>
                    {{-- MULAI FOREACH --}}
                    @foreach ($loopCinemas as $loopCinema)
                        {{-- LOOP CINEMA --}}
                        <div class="col-sm-12 mt-2 fw-bold" style="padding-left: 5%; font-size: 14pt;">
                            {{ $loopCinema->cinema }}
                        </div>
                        {{-- LOOP BIOSKOP --}}
                        <?php $loopBioskops = DB::table('lokasis')
                            ->join('cinemas', 'lokasis.lokasiID', '=', 'cinemas.lokasiID')
                            ->join('bioskops', 'cinemas.cinemaID', '=', 'bioskops.cinemaID')
                            ->join('jadwal_films', 'bioskops.bioskopID', '=', 'jadwal_films.bioskopID')
                            ->join('films', 'jadwal_films.filmID', '=', 'films.filmID')
                            ->join('waktu_tayangs', 'jadwal_films.startTimeID', '=', 'waktu_tayangs.startTimeID')
                            ->join('tanggal_tayangs', 'jadwal_films.showDateID', '=', 'tanggal_tayangs.showDateID')
                            ->join('studios', 'jadwal_films.studioID', '=', 'studios.studioID')
                            ->distinct()
                            ->select('bioskops.bioskop')
                            ->where('jadwal_films.showDateID', '=', $min_tanggal_tayangs)
                            ->where('lokasis.city', '=', $lokasi->lokasi)
                            ->where('cinemas.cinema', '=', $loopCinema->cinema)
                            ->where('jadwal_films.filmID', '=', $film->filmID)
                            ->get(); ?>
                        @foreach ($loopBioskops as $loopBioskop)
                            <div class="col-sm-12 mt-2">
                                <div class="row">
                                    <div class="col-sm-6 text-start" style="padding-left: 5%; font-size: 13pt;">
                                        {{ $loopBioskop->bioskop }}
                                    </div>
                                    {{-- LOOP HARGA --}}
                                    <div class="col-sm-6 text-end fw-bold" style="padding-right: 6%; color: #A89797">
                                        <?php $hargas = DB::table('lokasis')
                                            ->join('cinemas', 'lokasis.lokasiID', '=', 'cinemas.lokasiID')
                                            ->join('bioskops', 'cinemas.cinemaID', '=', 'bioskops.cinemaID')
                                            ->join('jadwal_films', 'bioskops.bioskopID', '=', 'jadwal_films.bioskopID')
                                            ->join('films', 'jadwal_films.filmID', '=', 'films.filmID')
                                            ->join('waktu_tayangs', 'jadwal_films.startTimeID', '=', 'waktu_tayangs.startTimeID')
                                            ->join('tanggal_tayangs', 'jadwal_films.showDateID', '=', 'tanggal_tayangs.showDateID')
                                            ->join('studios', 'jadwal_films.studioID', '=', 'studios.studioID')
                                            ->distinct()
                                            ->select('jadwal_films.price')
                                            ->where('jadwal_films.showDateID', '=', $min_tanggal_tayangs)
                                            ->where('lokasis.city', '=', $lokasi->lokasi)
                                            ->where('bioskops.bioskop', '=', $loopBioskop->bioskop)
                                            ->get();
                                        ?>

                                        @foreach ($hargas as $harga)
                                            Rp{{ $harga->price }}
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            {{-- HARGA --}}
                            <div class="col-sm-12">
                                <div class="row justify-content-between text-center mt-2 mb-4 px-3" style="">
                                    <?php $loopStartTimes = DB::table('lokasis')
                                        ->join('cinemas', 'lokasis.lokasiID', '=', 'cinemas.lokasiID')
                                        ->join('bioskops', 'cinemas.cinemaID', '=', 'bioskops.cinemaID')
                                        ->join('jadwal_films', 'bioskops.bioskopID', '=', 'jadwal_films.bioskopID')
                                        ->join('films', 'jadwal_films.filmID', '=', 'films.filmID')
                                        ->join('waktu_tayangs', 'jadwal_films.startTimeID', '=', 'waktu_tayangs.startTimeID')
                                        ->join('tanggal_tayangs', 'jadwal_films.showDateID', '=', 'tanggal_tayangs.showDateID')
                                        ->join('studios', 'jadwal_films.studioID', '=', 'studios.studioID')
                                        ->select('waktu_tayangs.startTime','jadwal_films.*')
                                        ->where('jadwal_films.showDateID', '=', $min_tanggal_tayangs)
                                        ->where('lokasis.city', '=', $lokasi->lokasi)
                                        ->where('bioskops.bioskop', '=', $loopBioskop->bioskop)
                                        ->where('jadwal_films.filmID', '=', $film->filmID)
                                        ->get();
                                    ?>
                                    @foreach ($loopStartTimes as $loopStartTime)
                                        <a href="/pilihKursi/{{ $loopStartTime->showID }}" class="d-flex"
                                            style="text-decoration: none; z-index: 30; color: black; width: 22%; ">
                                            <div class="py-2 fs-6 button1"
                                                style="box-shadow: -5px 7px black; font-family: 'Poppins', sans-serif; border: 2px solid black;  border-radius: 4px; width: 100%;">
                                                {{ $loopStartTime->startTime }}
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
