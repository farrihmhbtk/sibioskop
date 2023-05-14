@extends('layouts.main')

@section('container')
<div class="container-fluid" style="padding: 0px;">
    <div class="row">
        <div class="col-sm-12" style="border: 1px solid blue">
            <div class="m-0">
                <div class="wrapper" style="position: relative; width: 500px; ">
                 <img id="video-cover" src="https://i.ytimg.com/vi/QbZqS2pvEmQ/maxresdefault.jpg" alt="Video title" style="max-width: 100%; height:auto; border-radius: 15px; border: 2px solid black; box-shadow: -10px 10px black">
                 <iframe
                  id="video"
                  width="500" height="281"
                  src="https://www.youtube.com/embed/5WfTEZJnv_8"
                  frameborder="0"
                  allow="autoplay; encrypted-media"
                  allowfullscreen style="display: none;">
                </iframe>
                 <button id="playbutton" class="play-btn">
                    <svg width="100" height="103" viewBox="0 0 119 123" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M113.484 65.7418C113.484 96.9896 88.1525 122.321 56.9047 122.321C25.6569 122.321 0.325562 96.9896 0.325562 65.7418C0.325562 34.494 25.6569 9.1627 56.9047 9.1627C88.1525 9.1627 113.484 34.494 113.484 65.7418Z" fill="#222222"/>
                        <circle cx="61.6195" cy="57.255" r="56.5791" fill="#EEC921"/>
                        <path d="M83.3519 52.4533C86.6853 54.3778 86.6853 59.1891 83.3519 61.1136L53.7959 78.1778C50.4625 80.1023 46.2959 77.6967 46.2959 73.8477V39.7193C46.2959 35.8703 50.4625 33.4646 53.7959 35.3891L83.3519 52.4533Z" fill="#222222"/>
                        </svg>
                        
                 </button>
                </div>
              </div>
        </div>
        <div class="col-sm-12" style="border: 1px solid blue">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 mt-3 fs-4" style="font-family: 'ChunkFive', sans-serif; color: #1F1F1F; letter-spacing: 3px; text-align: left; padding-left: 0px;">
                        SEKARANG DI BIOSKOP
                    </div>
                    <div class="col-sm-12">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection