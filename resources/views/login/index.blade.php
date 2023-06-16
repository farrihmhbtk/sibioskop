<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.111.3">
    <title>Masuk · SiBioskop</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


    {{-- link font --}}
    <link href="https://fonts.cdnfonts.com/css/chunkfive" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <main class="form-signin w-100 h-75 card-center m-auto border border-dark border-3 rounded-2">

        <form action="/login" method="post">
            @csrf

            <h1 class="h3 mb-3 mt-5 fw-normal" style="font-family: 'ChunkFive', sans-serif;">SI BIOSKOP</h1>
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session()->has('loginSuccess'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('loginSuccess') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <div class="form-floating my-2">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                    id="email" placeholder="Email" autofocus required value="{{ old('email') }}">
                <label for="email" style="font-family: 'Poppins', sans-serif;">Email</label>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password"
                    required>
                <label for="password" style="font-family: 'Poppins', sans-serif;">Password</label>
            </div>
            <div class="d-flex justify-content-between">
                <small class="d-block mt-3 mb-3" style="font-family: 'Poppins', sans-serif;">Belum memiliki akun? <a
                        href="/register">Daftar!</a></small>
                <small class="d-block mt-3 mb-3" style="font-family: 'Poppins', sans-serif;"><a
                        href="/forgot-password">Lupa
                        Password</a></small>
            </div>
            <button class="w-20 mb-5 btn btn-lg btn-primary border border-dark border-2" type="submit"
                style="font-family: 'Poppins', sans-serif; background-color: #EEC921; color:black">Masuk</button>

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
