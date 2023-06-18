<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.111.3">
    <title>Lupa Password · SiBioskop</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


    {{-- link font --}}
    <link href="https://fonts.cdnfonts.com/css/chunkfive" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">

</head>

<body>

    <main class="form-signin w-100 card-center m-auto border border-dark border-3 rounded-2">
        <form action="{{ route('password.update') }}" method="post">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">

            <h1 class="h3 mb-4 mt-5 fw-normal" style="font-family: 'ChunkFive', sans-serif;">SI BIOSKOP | <span style="font-family: 'Poppins', sans-serif; font-size: 21pt;">Reset Password</span></h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <div class="form-floating my-2">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                    id="email" placeholder="email" autofocus required value="{{ old('email') }}">
                <label for="email" style="font-family: 'Poppins', sans-serif;">Email</label>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating my-2">

                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                    id="password" placeholder="password" autofocus required value="{{ old('password') }}">
                <label for="password" style="font-family: 'Poppins', sans-serif;">Password</label>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-floating my-2">
                <input type="password" name="password_confirmation"
                    class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation"
                    placeholder="password_confirmation" autofocus required value="{{ old('password_confirmation') }}">
                <label for="password_confirmation" style="font-family: 'Poppins', sans-serif;">Konfirmasi
                    Password</label>
                @error('password_confirmation')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

                <small class="d-block mt-3 mb-3" style="font-family: 'Poppins', sans-serif;">Setel password untuk akses
                    masuk ke akun SIBioskop Anda</small>

                <button class="w-20 mb-5 px-5 btn btn-lg btn-primary border border-dark border-2" type="submit"
                    style="font-family: 'Poppins', sans-serif; background-color: #EEC921; color:black">Simpan</button>
            </div>

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
