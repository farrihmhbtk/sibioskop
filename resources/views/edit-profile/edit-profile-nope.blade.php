@extends('layouts.main')

@section('container')

<div class="container" style=
"display: flex;
column-gap: 1rem;">

    <div class="d-flex mb-4" style=
    "border-box-shadow: 1px solid black; 
    box-shadow: -8px 10px #EEC921; 
    width:50%; 
    background-color: white; 
    font-family: 'Poppins', sans-serif; 
    border: 2px solid black; 
    border-radius: 5px; 
    justify-content: center; 
    padding:2rem;
    display:flex;
    flex-direction:column;
    ">

    <img src="/img/maps.png" alt="Avatar" class="avatar" 
    style=
    "
        vertical-align: middle;
        width: 300px;
        height: 300px;
        border-radius: 50%;
        border-style: solid;
        border-width: 2px;
        border-color:black;
    ">

    </div>

    <div class="d-flex mb-4" style=
    "border-box-shadow: 1px solid black; 
    box-shadow: -8px 10px #EEC921; 
    width:90%; 
    background-color: white; 
    font-family: 'Poppins', sans-serif; 
    border: 2px solid black; 
    border-radius: 5px; 
    justify-content: center; 
    padding-top: 1rem;
    display:flex;
    flex-direction:column;
    margin-right:3rem;
    height:40rem">

        <div class="container-editprofil"
        style="
        padding:3rem;
        ">
            <h1 class="pengaturan"
            style="font-family:'ChunkFive';">PENGATURAN AKUN</h1>
            <br>
            <form action="">
                <input type="text" name="text" class="form-control"
                            id="text" placeholder="Nomor Handphone" autofocus required value="{{ old('email') }}">
                        <label for="nama" style="font-family: 'Poppins', sans-serif;"></label>
            </form>


            <button class="w-20 mb-5 px-5 btn btn-lg btn-primary border border-dark border-2" type="submit"
                        style="
                        font-family: 'Poppins', sans-serif; 
                        background-color: #EEC921; 
                        color:black
                        ">Simpan</button>
        </div>

    </div>

</div>



@endsection