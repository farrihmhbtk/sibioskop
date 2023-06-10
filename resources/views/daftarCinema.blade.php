@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-start mb-4"
        style="box-shadow: -8px 10px black; width:97%; background-color: #EEC921; font-family: 'Poppins', sans-serif; border: 2px solid black; border-radius: 5px;">

        <ul class="mx-3 my-4" style="list-style-type: none;  width: 93%;">
            <?php
            $min_tanggal_tayangs = DB::table('tanggal_tayangs')->min('showDateID');
            ?>
            @foreach ($cinemas as $cinema)
                <li class="fs-5 my-4" style="">
                    @auth
                    <a href="/cinemaAuth/{{ $cinema->slug }}/{{ $min_tanggal_tayangs }}"
                        style="text-decoration: none; color:black;">
                    @else
                    <a href="/cinemaGuest/{{ $cinema->slug }}/{{ $min_tanggal_tayangs }}"
                        style="text-decoration: none; color:black;">
                    @endauth

                        {{ $cinema->cinema }} </a>
                    <hr style="border-color: solid black; border-width: 3px">
                </li>
            @endforeach
        </ul>





    </div>
@endsection
