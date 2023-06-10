@php
    $tickets = DB::table('jadwal_films')
        ->join('bioskops', 'jadwal_films.bioskopID', '=', 'bioskops.bioskopID')
        ->join('cinemas', 'bioskops.cinemaID', '=', 'cinemas.cinemaID')
        ->join('tanggal_tayangs', 'jadwal_films.showDateID', '=', 'tanggal_tayangs.showDateID')
        ->join('waktu_tayangs', 'jadwal_films.startTimeID', '=', 'waktu_tayangs.startTimeID')
        ->join('pesanans', 'jadwal_films.showID', '=', 'pesanans.showID')
        ->join('films', 'jadwal_films.filmID', '=', 'films.filmID')
        ->select('jadwal_films.*', 'tanggal_tayangs.*', 'waktu_tayangs.*', 'cinemas.cinema', 'pesanans.*', 'films.*')
        ->where('pesanans.user_id', '=', auth()->user()->id)
        ->get();
@endphp
@foreach ($tickets as $ticket)
    @php
        $seats = DB::table('pesanans')
            ->join('kursi_pesanans', 'pesanans.orderNumber', '=', 'kursi_pesanans.orderNumber')
            ->join('kursis', 'kursi_pesanans.seatID', '=', 'kursis.seatID')
            ->select('kursis.*')
            ->where('kursi_pesanans.orderNumber', '=', $ticket->orderNumber)
            ->get();
        
        $lengthSeats = count($seats);
        $temp = 0;
    @endphp
    <div class="row item mb-5 mt-3">
        <div class="col text-center">
            <img src="{{ $ticket->linkPoster }}" alt=""
                style="max-width: 80%; height:auto; border-radius: 8px; box-shadow: -8px 10px black;">
        </div>


        <div class="col justify-content-start mt-3" style="font-size: 10pt;">
            <p class="" style="font-family: 'ChunkFive', sans-serif; color: #1F1F1F">
                {{ $ticket->title }}</p>
            <P>DETAIL TRANSAKSI</P>
            <div class="data" style="display: flex; flex-direction: column">
                <style>
                    .data .d-flex.justify-content-between:not(:last-child) {
                        margin-bottom: -.4rem;
                        /* Adjust the value as needed */
                    }
                </style>
                <div class="d-flex justify-content-between">
                    <p><b>{{ $lengthSeats }} TIKET</b></p>
                    <p>
                        @foreach ($seats as $seat)
                            @php
                                $temp++;
                            @endphp
                            @if ($temp == $lengthSeats)
                                {{ $seat->seatNumber }}
                                @php
                                    break;
                                @endphp
                            @endif
                            {{ $seat->seatNumber }},
                        @endforeach
                    </p>
                </div>
                <div class="d-flex justify-content-between">
                    <p><b>Bioskop</b></p>
                    <p>{{ $ticket->cinema }}</p>
                </div>
                <div class="d-flex justify-content-between">
                    <p><b>Tanggal</b></p>
                    <p>{{ $ticket->showDate }}</p>
                </div>
                <div class="d-flex justify-content-between">
                    <p><b>Jam</b></p>
                    <p>{{ $ticket->startTime }}</p>
                </div>
                <div class="d-flex justify-content-between">
                    <p><b>Kode Booking</b></p>
                    <p>{{ $ticket->bookingCode }}</p>
                </div>
            </div>
        </div>
    </div>
    <hr>
@endforeach
