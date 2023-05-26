@extends('layouts.main')

@section('container')

    <div class="d-flex justify-content-start mb-4" style="box-shadow: -8px 10px black; width:97%; background-color: #EEC921; font-family: 'Poppins', sans-serif; border: 2px solid black; border-radius: 5px;">

        <ul class="mx-3 my-4" style="list-style-type: none;  width: 93%;">
            @foreach ($bioskops as $bioskop)
            <li class="fs-5 my-4" style="">
                <a href="/filmBB" style="text-decoration: none; color:black;"> {{ $bioskop->bioskop }} </a>
                <hr style="border-color: solid black; border-width: 3px">
            </li>
            @endforeach
        </ul>
        
        

        

    </div>

@endsection