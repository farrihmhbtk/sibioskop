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
                <h1 class="pengaturan" style="font-family:'ChunkFive';">Ubah Nama</h1>
                <br>
                @if (session()->has('editSuccess'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('editSuccess') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if (session()->has('noChange'))
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        {{ session('noChange') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form action="/editName/{{ auth()->user()->id }}" method="post">
                    @csrf
                    <input type="hidden" id="oldName" name="oldName" value="{{ auth()->user()->name }}">
                    <input type="name" name="name" class="form-control @error('name') is-invalid @enderror"
                        id="name" placeholder="Name" required value="{{ auth()->user()->name }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <label for="name" style="font-family: 'Poppins', sans-serif;"></label>


                    <button class="button1 w-20 mt-5 px-5 btn btn-lg btn-primary border border-dark border-2" type="submit"
                        style="
                        font-family: 'Poppins', sans-serif; 
                        ">Simpan</button>
                </form>



            </div>

        </div>

    </div>
@endsection
