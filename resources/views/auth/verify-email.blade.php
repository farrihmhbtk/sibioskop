<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.111.3">
    <title>Verifikasi · SiBioskop</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


    {{-- link font --}}
    <link href="https://fonts.cdnfonts.com/css/chunkfive" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>

</head>

<body>

    <main class="form-signin w-100 m-auto border border-dark border-3 rounded-2 card-center mb-5">
        <form action="{{ route('verification.send') }}" method="post" style="margin-bottom: 10%; ">
            @csrf
            <h1 class="h3 mt-5 mb-4 fw-normal text-center" style="font-family: 'ChunkFive', sans-serif;">VERIFIKASI
                EMAIL
            </h1>
            <div class="row">
                <p class="mb-4 text-justify text-center" style="margin-bottom: 0; padding-bottom: 0; padding-top: 5%">Kami telah
                    mengirimkan link verifikasi ke email anda.<br>Cek kotak inbox atau kotak spam. Kemudian, klik link
                    yang tertera pada email</p>
            </div>

            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif

            <div class="form-floating" style="width: 100%;">
                <label for="email"></label>
                <input class="text-center" id="email" name="email" value="{{ auth()->user()->email }}" readonly
                    style="width: 100%; border-radius: 7px; border: 1px solid black; padding-left: 2%;">
                @error('email')
                    <span class="success">{{ $message }}</span>
                @enderror
            </div>
            <div class="row mb-0 pb-0" style="margin-top: 10%; padding-bottom: 0px; height: 7%; font-size: 12pt">
                <p style="">Belum mendapatkan email verifikasi?</p>
            </div>
            <button class="mt-0 px-4 btn btn-lg btn-primary border border-dark border-2" type="submit"
                style="font-family: 'Poppins', sans-serif; background-color: #EEC921; color:black; font-size: 14pt;">Kirim
                Ulang Email Verikasi</button>
        </form>

    </main>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>

</body>

</html>
