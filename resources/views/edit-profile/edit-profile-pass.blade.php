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

            @include('edit-profile.partials-photo-profile.photo-profile')


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
                <h1 class="pengaturan" style="font-family:'ChunkFive';">Ubah Password</h1>
                <br>
                @if (session()->has('editSuccess'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('editSuccess') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <form action="/editPass/{{ auth()->user()->id }}" method="post">
                    @csrf

                    <input type="password" name="oldPassword"
                        class="form-control @error('oldPassword') is-invalid @enderror" id="oldPassword"
                        placeholder="Password Lama" autofocus required value="{{ old('email') }}">
                    @error('oldPassword')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <label for="nama" style="font-family: 'Poppins', sans-serif;"></label>


                    <input type="password" name="password" id="password" placeholder="Password Baru"
                        class="form-control @error('password') is-invalid @enderror" autofocus required
                        value="{{ old('email') }}">
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <label for="nama" style="font-family: 'Poppins', sans-serif;"></label>


                    <input type="password" name="confirm_password"
                        class="form-control @error('confirm_password') is-invalid @enderror" id="confirm_password"
                        placeholder="Konfirmasi Password Baru" autofocus required value="{{ old('email') }}">
                    @error('confirm_password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <label for="nama" style="font-family: 'Poppins', sans-serif;"></label>


                    <button class="button1 w-20 mb-5 mt-5 px-5 btn btn-lg btn-primary border border-dark border-2"
                        type="submit"
                        style="
                font-family: 'Poppins', sans-serif; 
                ">Simpan</button>
                </form>



            </div>

        </div>

    </div>
@endsection
