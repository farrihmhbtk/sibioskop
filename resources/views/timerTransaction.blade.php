@extends('layouts.main')

@section('container')
    <style>
        body {
            font-family: system-ui;
            background: #fff;
            text-align: center;
        }

        .timer {
            margin-top: 10px;
        }

        .timer>svg {
            width: 200px;
            height: 200px;
        }

        .timer>svg>circle {
            fill: none;
            stroke-opacity: 0.3;
            stroke: #0d6efd;
            stroke-width: 10;
            transform-origin: center center;
            transform: rotate(-90deg);
        }

        .timer>svg>circle+circle {
            stroke-dasharray: 1;
            stroke-dashoffset: 1;
            stroke-linecap: round;
            stroke-opacity: 1;
        }

        .timer.animatable>svg>circle+circle {
            transition: stroke-dashoffset 0.3s ease;
        }

        .timer>svg>text {
            font-size: 2rem;
        }

        .timer>svg>text+text {
            font-size: 1rem;
        }
    </style>
    <span id="showID" style="display:none">{{ $showID }}</span>
    <span id="seats" style="display:none">{{ $seats }}</span>
    <span id="totBay" style="display:none">{{ $totBay }}</span>
    <div class="container mb-4"
        style="padding-top: 6%; padding-bottom: 6%; box-shadow: -8px 10px #EEC921; width:97%; background-color: white; font-family: 'Poppins', sans-serif; border: 2px solid black; border-radius: 5px; margin-left: 0px;">
        <div class="row justify-content-center mb-4">
            <div class="container"
                style="width: 80%; border: 2px solid black; border-radius: 5px; padding-top: 1.5%; padding-bottom: 4%; padding-left: 2%;">
                <div class="row mb-4 mt-2">
                    <p class="text-center" style="margin-bottom: 0;">SIBioskop sedang memproses</p>
                    <p class="text-center" style="margin-bottom: 0;">transaksi kamu</p>
                </div>
                <div class="row">
                    <h3>Time Left</h3>
                    <div class="timer animatable">
                        <svg>
                            <circle cx="50%" cy="50%" r="90" />
                            <circle cx="50%" cy="50%" r="90" pathLength="1" />
                            <text x="100" y="100" text-anchor="middle">
                                <tspan id="timeLeft"></tspan>
                            </text>
                            <text x="100" y="120" text-anchor="middle">seconds</text>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{ URL::asset('js/timer.js') }}"></script>

@endsection
