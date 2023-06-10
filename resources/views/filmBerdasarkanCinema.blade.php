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
    <div class="d-block justify-content-start" style="width: 97%;  padding: 0px; background-color: white; ">
        {{-- ROW PERTAMA --}}
        <div class="row" style="position:fixed; width: 82%; z-index: 30;">
            <div class="col-sm-12 py-2 px-4 fs-5"
                style="box-shadow: -8px 10px black; background-color: #EEC921; font-family: 'Poppins', sans-serif; border: 2px solid black;  border-radius: 4px;">
                <svg width="27" height="44" viewBox="0 0 38 44" fill="none" xmlns="http://www.w3.org/2000/svg"
                    style="margin-right: 20px;">
                    <path d="M36 41.0526L3 22L36 2.94744L36 41.0526Z" stroke="black" stroke-width="3" />
                </svg>
                {{ $cinemas->cinema }}

            </div>
        </div>
        {{-- ROW KEDUA --}}
        <div class="row justify-content-between my-4" style="font-family: 'Poppins', sans-serif; padding-top: 7%;">
            {{-- KOLOM KIRI (GAMBAR MAPS) --}}
            <div class="col"
                style="width: 32.4%; position: fixed; padding: 0; border: 2px solid black; border-radius: 4px; background-color: #EEC921; height: 65vh; box-shadow: -8px 10px black; ">
                <iframe src="{{ $cinemas->linkGMaps }}" width="100%" height="100%" style="border:0;" allowfullscreen=""
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            {{-- KOLOM KANAN (LIST FILM) --}}
            <div class="col-7"
                style="margin-left: 41.8%; background-color: #EEC921; border-radius: 4px; border: 2px solid black; box-shadow: -8px 10px black;">


                <div class="container" style="">
                    {{-- ROW TANGGAL TAYANG --}}
                    <div class="row mb-3 mt-2"
                        style=" padding-left: 4%; padding-bottom: 2%; white-space: nowrap; position: relative; overflow-x: scroll; -webkit-overflow-scrolling: touch;">
                        {{-- FOREACH TANGGAL TAYANG --}}
                        <?php
                        $tanggals = DB::table('tanggal_tayangs')
                            ->select('tanggal_tayangs.*')
                            ->get();
                        ?>
                        <div class="col-sm-12 text-center mt-3" style="">
                            @foreach ($tanggals as $tanggal)
                            @auth
                            <a href="/cinemaAuth/{{ $cinemas->slug }}/{{ $tanggal->showDateID }}" style="text-decoration: none; color: black; ">

                            @else
                            <a href="/cinemaGuest/{{ $cinemas->slug }}/{{ $tanggal->showDateID }}" style="text-decoration: none; color: black; ">

                            @endauth
                                    <div class="py-2 fs-6 button1"
                                        style="margin-right: 17%; width: 20%; box-shadow: -8px 10px black; font-family: 'Poppins', sans-serif; border: 2px solid black;  border-radius: 4px; float: none; display:inline-block;position: relative;">
                                        {{ $tanggal->showDateStr }}
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>

                    {{-- ROW INFO FILM --}}
                    @foreach ($loopFilms as $loopFilm)
                        <?php
                        $infoFilms = DB::table('lokasis')
                            ->join('cinemas', 'lokasis.lokasiID', '=', 'cinemas.lokasiID')
                            ->join('bioskops', 'cinemas.cinemaID', '=', 'bioskops.cinemaID')
                            ->join('jadwal_films', 'bioskops.bioskopID', '=', 'jadwal_films.bioskopID')
                            ->join('films', 'jadwal_films.filmID', '=', 'films.filmID')
                            ->join('waktu_tayangs', 'jadwal_films.startTimeID', '=', 'waktu_tayangs.startTimeID')
                            ->join('tanggal_tayangs', 'jadwal_films.showDateID', '=', 'tanggal_tayangs.showDateID')
                            ->join('studios', 'jadwal_films.studioID', '=', 'studios.studioID')
                            ->distinct()
                            ->select('films.*')
                            ->where('jadwal_films.showDateID', '=', $min_tanggal_tayangs)
                            
                            ->where('cinemas.slug', '=', $cinemas->slug)
                            ->where('films.filmID', '=', $loopFilm->filmID)
                            ->get();
                        ?>
                        
                            
                        
                        <div class="row justify-content-center text-center mb-2" style="">
                            <hr class="mt-1" style="border-color: solid black; border-width: 3px; width: 90%;">
                            {{-- COLOUMN POSTER DAN RATING FILM --}}
                            @foreach ($infoFilms as $infoFilm)
                            <div class="col-sm-3 mt-2 mb-2" style="margin-left: 0;">
                                <div class="wrapper"
                                    style="width: 160px; float: none; display:inline-block;position: relative; margin-right:30px">
                                    <img src="{{ $infoFilm->linkPoster }}"
                                        alt=""
                                        style="max-width: 100%; height:auto; border-radius: 8px; box-shadow: -8px 10px black;">
                                    <svg class="mt-3" style="text-align: center;" width="150" height="30"
                                        viewBox="0 0 180 36" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                            {{-- COLUMN INFO DETAIL FILM --}}
                            <div class="col-sm-8 mt-2" style="">
                                <ul class="text-start" style="list-style-type: none; font-family: 'Poppins', sans-serif; ">
                                    <li class=""
                                        style="font-family: 'ChunkFive', sans-serif; font-size: 12pt; margin-top: 0;">
                                        {{ $infoFilm->title }}
                                    </li>
                                    <li>
                                        Genre &emsp; &emsp; &emsp;{{ $infoFilm->genre }}
                                    </li>
                                    <li>
                                        Durasi &emsp; &emsp; &emsp;{{ $infoFilm->durasi }}
                                    </li>
                                    <li>
                                        Sutradara &emsp; &nbsp;{{ $infoFilm->sutradara }}
                                    </li>
                                    <li>
                                        Rating Usia &emsp;{{ $infoFilm->ratingUsia }}
                                    </li>
                                </ul>

                            </div>
                            @endforeach
                            <?php
                            $bioskops = DB::table('lokasis')
                            ->join('cinemas', 'lokasis.lokasiID', '=', 'cinemas.lokasiID')
                            ->join('bioskops', 'cinemas.cinemaID', '=', 'bioskops.cinemaID')
                            ->join('jadwal_films', 'bioskops.bioskopID', '=', 'jadwal_films.bioskopID')
                            ->join('films', 'jadwal_films.filmID', '=', 'films.filmID')
                            ->join('waktu_tayangs', 'jadwal_films.startTimeID', '=', 'waktu_tayangs.startTimeID')
                            ->join('tanggal_tayangs', 'jadwal_films.showDateID', '=', 'tanggal_tayangs.showDateID')
                            ->join('studios', 'jadwal_films.studioID', '=', 'studios.studioID')
                            ->distinct()
                            ->select('bioskops.*','jadwal_films.price')
                            ->where('jadwal_films.showDateID', '=', $min_tanggal_tayangs)
                            
                            ->where('cinemas.slug', '=', $cinemas->slug)
                            ->where('films.filmID', '=', $loopFilm->filmID)
                            ->get();
                            ?>
                            @foreach ($bioskops as $bioskop)
                                
                            
                            <div class="row  fw-bold" style="padding-left: 5%; padding-right: 5.5%; ">
                                <div class="col-sm-6 text-start" style="padding-left: 0px; font-size: 14pt; ">
                                    {{ $bioskop->bioskop }}
                                </div>
                                <div class="col-sm-6 text-end" style="padding-right: 0px; ; font-size: 13pt; ">
                                    Rp{{ $bioskop->price }}
                                </div>

                            </div>
                            {{-- ROW JAM TAYANG FILM --}}
                            <div class="row justify-content-between text-center mb-4 mt-1" style="padding-left: 5%; padding-right: 5%;">
                                <?php
                                $waktuTayangs = DB::table('lokasis')
                                ->join('cinemas', 'lokasis.lokasiID', '=', 'cinemas.lokasiID')
                                ->join('bioskops', 'cinemas.cinemaID', '=', 'bioskops.cinemaID')
                                ->join('jadwal_films', 'bioskops.bioskopID', '=', 'jadwal_films.bioskopID')
                                ->join('films', 'jadwal_films.filmID', '=', 'films.filmID')
                                ->join('waktu_tayangs', 'jadwal_films.startTimeID', '=', 'waktu_tayangs.startTimeID')
                                ->join('tanggal_tayangs', 'jadwal_films.showDateID', '=', 'tanggal_tayangs.showDateID')
                                ->join('studios', 'jadwal_films.studioID', '=', 'studios.studioID')
                                ->select('waktu_tayangs.startTime','jadwal_films.*')
                                ->where('jadwal_films.showDateID', '=', $min_tanggal_tayangs)
                                
                                ->where('cinemas.slug', '=', $cinemas->slug)
                                ->where('films.filmID', '=', $loopFilm->filmID)
                                ->where('jadwal_films.bioskopID', '=', $bioskop->bioskopID)
                                ->get();
                                ?>

                                @foreach ($waktuTayangs as $waktuTayang)
                                    
                                

                                    <a href="/pilihKursi/{{ $waktuTayang->showID }}" style="text-decoration: none; width: 20%; padding: 0;">
                                        <div class="py-2 fs-6 button1"
                                        style="width: 100%; box-shadow: -8px 10px black; font-family: 'Poppins', sans-serif; border: 2px solid black;  border-radius: 4px;">
                                        {{ $waktuTayang->startTime }}
                                    </div>
                                    </a>

                                @endforeach

                            </div>
                            @endforeach

                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    @endsection
