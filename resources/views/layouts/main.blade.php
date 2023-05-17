<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SI BIOSKOP</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">




    {{-- link font --}}
    <link href="https://fonts.cdnfonts.com/css/chunkfive" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">

    <style>
        .play-btn {
  position:absolute;
  z-index:666;
  top:50%;
  left:50%;
  transform:translate(-50%, -50%);
  background-color:transparent;
  border:0;
}

.play-btn:hover {
  cursor:pointer;
}

.play-btn:focus {
  outline:0;
}


    </style>

</head>

<body>
        <div class="container-fluid">
            {{-- row pertama --}}

           @include('partials.navbar')

            {{-- row kedua --}}
                <div class="row" style="height: 87vh;  ">
                    {{-- column kiri --}}

                    @include('partials.sidebar')

                    {{-- column kanan (ISI KONTEN) --}}
                    <div class="col" style="z-index: 10; padding: 0; margin-left: 16.5%; ">
                        @yield('container')
                    </div>
                </div>

        </div>


    <script src="js/style.js"></script>
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
    integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
    integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
</script>

</html>
