@extends('layouts.main')

@section('container')
    <div class="container" style="">
        {{-- ISI KONTEN --}}
        <div class="row">
            <div class="col-sm-12"
                style="height: 265px; white-space: nowrap; position: relative; overflow-x: scroll; -webkit-overflow-scrolling: touch;">
                @foreach ($trailers as $trailer)
                    <div class="me-4" style="width: 441px; float: none; display:inline-block;position: relative;">

                        <div class="wrapper" style="position: relative; width: 441px; ">
                            <img id="video-cover" src="{{ $trailer->linkCoverTrailer }}" alt="Video title"
                                style="max-width: 100%; height:auto; border-radius: 8px; border: 2px solid black; box-shadow: -10px 12px black">
                            <iframe id="video" width="441" height="247"
                                src="https://www.youtube.com/embed/{{ $trailer->linkTrailerID }}" frameborder="0"
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
                @endforeach
            </div>



            <div class="col-sm-12" style="">

                <div class="container" style="padding: 0;">
                    <div class="row">
                        <div class="col-sm-12 mt-4 mb-2 fs-4"
                            style="font-family: 'ChunkFive', sans-serif; color: #1F1F1F; letter-spacing: 3px; text-align: left; padding-left: 0px;">
                            SEKARANG DI BIOSKOP
                        </div>
                        <div class="col-sm-12 d-flex align-items-start"
                            style="position: relative; overflow-x:hidden; overflow-y:hidden; -webkit-overflow-scrolling: touch;">
                            <div class="container">
                                <div class="row justify-content-start">
                                    @foreach ($films as $film)
                                    <div class="col-sm-2 my-3">
                                        
                                            <div class="wrapper"
                                                style="width: 160px; float: none; display:inline-block;position: relative; margin-right:30px">
                                                <a href="/film/{{ $film->slug }}/{{ $temp_lokasi->id_temp }}" style="text-decoration: none;">
                                                    <img src="{{ $film->linkPoster }}" alt="{{ $film->title }}"
                                                        style="max-width: 100%; height:auto; border-radius: 8px; box-shadow: -8px 10px black;">
                                                    <p class="mt-3 mb-1"
                                                        style="font-family: 'ChunkFive', sans-serif; color: #1F1F1F; text-align:center; font-size: 10pt;">
                                                        {{ $film->title }}</p>
                                                    <svg class="" style="text-align: center;" width="150"
                                                        height="30" viewBox="0 0 180 36" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
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

                                                </a>
                                            </div>
                                        
                                    </div>
                                    @endforeach
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>


    </div>
@endsection
