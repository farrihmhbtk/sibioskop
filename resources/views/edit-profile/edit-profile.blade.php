@extends('layouts.main')

@section('container')
    <div class="container" style="display: flex;
    column-gap: 1rem;">

        <div class="d-flex mb-4"
            style="border-box-shadow: 1px solid black;
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
                style="
            vertical-align: middle;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            border-style: solid;
            border-width: 2px;
            border-color:black;
        ">

        </div>

        <div class="d-flex mb-4"
            style="border-box-shadow: 1px solid black;
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

            <div class="container-editprofil" style="
        padding:3rem;
        ">

                @auth
                    <h1 class="pengaturan" style="font-family:'ChunkFive';">PENGATURAN AKUN</h1>
                    <br>
                    <form action="">
                        <div class="container justify-content-start" style="padding-left: 0;">

                            <div class="row justify-content-between" style=" padding-inline: 0;">
                                <div class="col-10">
                                    <input type="text" name="text" class="form-control" readonly id="text"
                                        placeholder="Nama" required value="{{ auth()->user()->name }}">
                                    <label for="nama"
                                        style="font-family: 'Poppins', sans-serif; background-color: #EEC921; 
                            color:black;"></label>
                                </div>
                                <div class="col-2">

                                    <a class="d-flex justify-content-center" href="/editName"
                                        style="text-decoration: none; height: 100%">
                                        <div class="button1 text-center"
                                            style="width: 90%; height: 60%; padding-top: 5%; font-family: 'Poppins', sans-serif; border: 2px solid black;  border-radius: 4px;">
                                            Edit
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="row justify-content-between" style=" padding-inline: 0;">
                                <div class="col-10">
                                    <input type="text" name="text" class="form-control" id="text"
                                        placeholder="Nomor Handphone" required value="{{ auth()->user()->phoneNumber }}">
                                    <label for="nama" style="font-family: 'Poppins', sans-serif;"></label>
                                </div>
                                <div class="col-2">

                                    <a class="d-flex justify-content-center" href="/editNoHP"
                                        style="text-decoration: none; height: 100%">
                                        <div class="button1 text-center"
                                            style="width: 90%; height: 60%; padding-top: 5%; font-family: 'Poppins', sans-serif; border: 2px solid black;  border-radius: 4px;">
                                            Edit
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="row justify-content-between" style=" padding-inline: 0;">
                                <div class="col-10">
                                    <input type="text" name="text" class="form-control" id="text" placeholder="Email"
                                        required value="{{ auth()->user()->email }}">
                                    <label for="nama" style="font-family: 'Poppins', sans-serif;"></label>
                                </div>
                                <div class="col-2">

                                    <a class="d-flex justify-content-center" href="/editEmail"
                                        style="text-decoration: none; height: 100%">
                                        <div class="button1 text-center"
                                            style="width: 90%; height: 60%; padding-top: 5%; font-family: 'Poppins', sans-serif; border: 2px solid black;  border-radius: 4px;">
                                            Edit
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="row justify-content-between" style=" padding-inline: 0;">
                                <div class="col-10">
                                    <input type="password" maxlength="10" name="text" class="form-control" id="password"
                                        placeholder="Password" required value="password">
                                    <label for="nama" style="font-family: 'Poppins', sans-serif;"></label>
                                </div>
                                <div class="col-2">

                                    <a class="d-flex justify-content-center" href="/editpass"
                                        style="text-decoration: none; height: 100%">
                                        <div class="button1 text-center"
                                            style="width: 90%; height: 60%; padding-top: 5%; font-family: 'Poppins', sans-serif; border: 2px solid black;  border-radius: 4px;">
                                            Edit
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>





                    </form>
                    <div class="profil-button">
                        <a href="/panduan" style="text-decoration: none;" class="d-inline me-2">
                            <button class="button1 w-20 mb-5 px-5 btn btn-lg btn-primary border border-dark border-2"
                                type="submit" style="font-family: 'Poppins', sans-serif;">Panduan</button>
                        </a>

                        <form action="/logout" method="post" style="" class="d-inline">
                            @csrf
                            <button class="button2 w-20 mb-5 px-5 btn btn-lg btn-primary border border-dark border-2"
                                type="submit"
                                style="font-family: 'Poppins', sans-serif; ">Keluar</button>
                        </form>

                        <style>
                            .button2 {
                                background-color: #EE6B21; color:white;
                            }

                            .button2:hover {
                                background-color: #FDC09E;
                                color: black;
                            }
                        </style>

                    </div>
                @else
                    <a class="d-flex justify-content-center text-center" href="/login" style="text-decoration: none;">
                        <div class="py-2 fs-5 button1"
                            style="width: 80%; box-shadow: -8px 10px black; font-family: 'Poppins', sans-serif; border: 2px solid black;  border-radius: 4px;">
                            Masuk atau Daftar Akun
                        </div>
                    </a>

                @endauth

            </div>
        </div>
    </div>
@endsection
