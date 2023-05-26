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
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <main class="form-signin h-75 w-100 m-auto border border-dark border-3 rounded-2 card-center">
        <form action="/" method="post">
            @csrf
            <h1 class="h3 mt-5 mb-4 fw-normal text-center" style="font-family: 'ChunkFive', sans-serif;">KODE VERIFIKASI
            </h1>
            <p class="mb-4 text-justify text-center">Kami telah mengirimkan kode verifikasi ke email anda
            </p>
            <div class="form-floating my-2">
                <input type="kodeVerifikasi" name="kodeVerifikasi"
                    class="form-control @error('kodeVerifikasi') is-invalid @enderror" id="kodeVerifikasi"
                    placeholder="kodeVerifikasi" autofocus required value="{{ old('kodeVerifikasi') }}">
                <label for="kodeVerifikasi" style="font-family: 'Poppins', sans-serif;">Kode verifikasi</label>
                @error('kodeVerifikasi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button class="w-20 mt-4 mb-5 px-5 btn btn-lg btn-primary border border-dark border-2" type="submit"
                style="font-family: 'Poppins', sans-serif; background-color: #EEC921; color:black">Kirim</button>

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
