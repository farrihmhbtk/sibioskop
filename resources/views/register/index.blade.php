<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.111.3">
    <title>Signin Template · Bootstrap v5.3</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


    {{-- link font --}}
    <link href="https://fonts.cdnfonts.com/css/chunkfive" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">



    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    {{-- <div class="row justify-content-center">
        <div class="col-md-3 mt-5">

        </div>
    </div> --}}

    <main class="form-signin w-100 m-auto border border-dark border-3 rounded-2">
        <h1 class="h3 mb-3 mt-5 fw-normal" style="font-family: 'ChunkFive', sans-serif;">SI BIOSKOP</h1>

        <form action="/register" method="post">
            @csrf

            <div class="form-floating mb-2">
                <input type="name" name="name" class="form-control @error('name') is-invalid @enderror"
                    id="name" placeholder="Name" required value="{{ old('name') }}">
                <label for="name" style="font-family: 'Poppins', sans-serif;">Nama</label>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-floating mb-2">
                <input type="text" name="phoneNumber" class="form-control @error('phoneNumber') is-invalid @enderror"
                    id="phoneNumber" placeholder="Hp" required value="{{ old('phoneNumber') }}">
                <label for="phoneNumber" style="font-family: 'Poppins', sans-serif;">Nomor Handphone</label>
                @error('phoneNumber')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-floating mb-2">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                    id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                <label for="email" style="font-family: 'Poppins', sans-serif;">Email</label>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-floating">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                    id="password" placeholder="Password">
                <label for="password" style="font-family: 'Poppins', sans-serif;">Password</label>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <small class="d-block mt-3 mb-3" style="font-family: 'Poppins', sans-serif;">Sudah memiliki akun? <a
                    href="/login">Masuk</a></small>

            <button class="w-20 mb-5 btn btn-lg btn-primary border border-dark border-2" type="submit"
                style="font-family: 'Poppins', sans-serif; background-color: #EEC921; color:black">Daftar</button>

        </form>

    </main>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

</body>

</html>
