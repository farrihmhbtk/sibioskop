<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Film;
use App\Models\User;
use App\Models\Kursi;
use App\Models\Cinema;
use App\Models\Lokasi;
use App\Models\Studio;
use App\Models\Bioskop;
use App\Models\Pesanan;
use App\Models\JadwalFilm;
use App\Models\temp_lokasi;
use App\Models\WaktuTayang;
use App\Models\KursiPesanan;
use App\Models\TanggalTayang;
use App\Models\cinema_bioskop;
use Illuminate\Database\Seeder;
use App\Models\HistoryLokasiGuest;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'John Doe',
            'password' => bcrypt('john'),
            'phoneNumber' => '08123456789',
            'email' => 'johndoe@gmail.com'
        ]);


        Film::create([
            'title' => 'John Wick Chapter 4',
            'slug' => 'john-wick-chapter-4',
            'linkPoster' => 'https://pics.filmaffinity.com/John_Wick_Chapter_4-101402041-large.jpg',
            'linkTrailerID' => 'yjRHZEUamCc',
            'linkCoverTrailer' => 'https://i.ytimg.com/vi/yjRHZEUamCc/maxresdefault.jpg',
            'skorFilm' => '5',
            'genre' => 'Action, Neon-noir, Crime film, Thriller',
            'durasi' => '2 Jam 49 Menit',
            'sutradara' => 'Chad Stahelski',
            'ratingUsia' => 'D 17+',
            'sinopsis' => 'With the price on his head ever increasing, legendary hit man John Wick takes his fight against the High Table global as he seeks out the most powerful players in the underworld, from New York to Paris to Japan to Berlin.'
        ]);

        Film::create([
            'title' => 'Ant Man : Quantumania',
            'slug' => 'ant-man-quantumania',
            'linkPoster' => 'https://images.thedirect.com/media/photos/4am_screenx.jpg',
            'linkTrailerID' => '5WfTEZJnv_8',
            'linkCoverTrailer' => 'https://i.ytimg.com/vi/QbZqS2pvEmQ/maxresdefault.jpg',
            'skorFilm' => '5',
            'genre' => 'Action, Comedy, Superhero, Science fiction',
            'durasi' => '2 Jam 4 Menit',
            'sutradara' => 'Peyton Reed',
            'ratingUsia' => 'R 13+',
            'sinopsis' => 'Pada suatu hari'
        ]);

        Film::create([
            'title' => 'Avatar: The Way of Water',
            'slug' => 'avatar-the-way-of-water',
            'linkPoster' => 'https://i.kinja-img.com/gawker-media/image/upload/c_fit,f_auto,g_center,q_60,w_645/eb4a61461794d426df55290532e15503.jpg',
            'linkTrailerID' => 'o5F8MOz_IDw',
            'linkCoverTrailer' => 'https://i.ytimg.com/vi/o5F8MOz_IDw/hq720.jpg?sqp=-oaymwEcCNAFEJQDSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLC6EfY_-phwEFh_PGn7lQo_4gi6Pg',
            'skorFilm' => '5',
            'genre' => 'Action',
            'durasi' => '3 Jam 12 Menit',
            'sutradara' => 'James Cameron',
            'ratingUsia' => 'PG 13+',
            'sinopsis' => 'Pada suatu hari'
        ]);

        Film::create([
            'title' => 'Guardian of The Galaxy Vol 3',
            'slug' => 'guardian-of-the-galaxy-vol-3',
            'linkPoster' => 'https://www.themoviedb.org/t/p/original/r2J02Z2OpNTctfOSN1Ydgii51I3.jpg',
            'linkTrailerID' => 'u3V5KDHRQvk',
            'linkCoverTrailer' => 'https://i.ytimg.com/vi/u3V5KDHRQvk/hq720.jpg?sqp=-oaymwEcCNAFEJQDSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLCPjju4861mrOfgN9gsO8r90BYcEg',
            'skorFilm' => '5',
            'genre' => 'Action, Drama, Fantasy, Adventure',
            'durasi' => '2 Jam 29 Menit',
            'sutradara' => 'James Gunn',
            'ratingUsia' => 'PG 13+',
            'sinopsis' => 'Pada suatu hari'
        ]);

        Film::create([
            'title' => 'Oppenheimer',
            'slug' => 'oppenheimer',
            'linkPoster' => 'https://assets-a1.kompasiana.com/items/album/2023/05/08/poster-film-oppenheimer-2023-foto-dari-rotten-tomatoes-6458adb408a8b57cba48adb3.jpg',
            'linkTrailerID' => 'uYPbbksJxIg',
            'linkCoverTrailer' => 'https://i.ytimg.com/vi/uYPbbksJxIg/hq720.jpg?sqp=-oaymwEcCNAFEJQDSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLA2M_LSAVX5C1yeaypLoWxlz78y5Q',
            'skorFilm' => '5',
            'genre' => 'History, War, Mystery, Drama, Thriller',
            'durasi' => '2 Jam 30 Menit',
            'sutradara' => 'Christopher Nolan',
            'ratingUsia' => 'R 13+',
            'sinopsis' => 'Pada suatu hari'
        ]);

        Film::create([
            'title' => 'Buya Hamka',
            'slug' => 'buya-hamka',
            'linkPoster' => 'https://cdn.gramedia.com/uploads/picture_meta/2023/4/10/n2wfjd2hadzvmcyqhrjugo.jpg',
            'linkTrailerID' => 'fAQnkdaGisM',
            'linkCoverTrailer' => 'https://i.ytimg.com/vi/fAQnkdaGisM/hq720.jpg?sqp=-oaymwEcCNAFEJQDSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLC1DjtaaWcAXTdYBR7OJgZMehgiHA',
            'skorFilm' => '5',
            'genre' => 'Drama, Biografi, Sejarah',
            'durasi' => '1 Jam 46 Menit',
            'sutradara' => 'Fajar Bustomi',
            'ratingUsia' => 'SU',
            'sinopsis' => 'Pada suatu hari'
        ]);

        Film::create([
            'title' => 'The Super Mario Bros. Movie',
            'slug' => 'the-super-mario-bros.-movie',
            'linkPoster' => 'https://upload.wikimedia.org/wikipedia/en/4/44/The_Super_Mario_Bros._Movie_poster.jpg',
            'linkTrailerID' => 'DUnQcJz76Ck',
            'linkCoverTrailer' => 'https://i.ytimg.com/vi/DUnQcJz76Ck/hq720.jpg?sqp=-oaymwEcCNAFEJQDSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLApZDekbvN2Quai5HqyzHMFcSy3xw',
            'skorFilm' => '5',
            'genre' => 'Animation, Family film, Fantasy, Adventure',
            'durasi' => '1 Jam 32 Menit',
            'sutradara' => 'Aaron Horvath, Michael Jelenic',
            'ratingUsia' => 'SU',
            'sinopsis' => 'Pada suatu hari'
        ]);

        // Film::create([
        //     'title' => 'FAST X',
        //     'slug' => 'fast-x',
        //     'linkPoster' => 'https://i.dailymail.co.uk/1s/2023/02/01/02/67189525-11699313-image-m-28_1675219232984.jpg',
        //     'linkTrailerID' => 'aOb15GVFZxU',
        //     'linkCoverTrailer' => 'https://i.ytimg.com/vi/aOb15GVFZxU/hq720.jpg?sqp=-oaymwEcCNAFEJQDSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLAcUVGjd6SxEFI8foHSNHYBRJ4arA',
        //     'skorFilm' => '5',
        //     'genre' => 'Action',
        //     'durasi' => '2 Jam 21 Menit',
        //     'sutradara' => 'Louis Leterrier',
        //     'ratingUsia' => 'R 13+',
        //     'sinopsis' => 'Pada suatu hari'
        // ]);

        // Film::create([
        //     'title' => 'GUY RITCHIES THE COVENANT',
        //     'slug' => 'guy-ritchies-the-covenant',
        //     'linkPoster' => 'https://asset.tix.id/wp-content/uploads/2023/04/dee6c5d6-25a0-4750-976e-07601e52bd6b.jpeg',
        //     'linkTrailerID' => '02PPMPArNEQ',
        //     'linkCoverTrailer' => 'https://i.ytimg.com/vi/02PPMPArNEQ/hq720.jpg?sqp=-oaymwEcCNAFEJQDSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLDvWGrxU50BeDsi_-BD-UMcrcLm8w',
        //     'skorFilm' => '5',
        //     'genre' => 'Action',
        //     'durasi' => '2 Jam 3 Menit',
        //     'sutradara' => 'Guy Ritchie',
        //     'ratingUsia' => 'R 13+',
        //     'sinopsis' => 'Pada suatu hari'
        // ]);

        Lokasi::create([
            'lokasi' => 'silahkanPilihLokasi',
        ]);

        Lokasi::create([
            'lokasi' => 'Surabaya',
        ]);

        Lokasi::create([
            'lokasi' => 'Semarang',
        ]);

        Cinema::create([
            'lokasiID' => 1,
            'cinema' => 'Silahkan Pilih Lokasi',
            'slug' => 'silahkan-pilih-lokasi',
            'linkGMaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.634549007205!2d112.79235037465187!3d-7.282355992724917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa1323221a93%3A0x306c3c99adedb258!2sSepuluh%20Nopember%20Institute%20of%20Technology!5e0!3m2!1sen!2sid!4v1685464476580!5m2!1sen!2sid'
        ]);

        Cinema::create([
            'lokasiID' => 2,
            'cinema' => 'BG Junction CGV',
            'slug' => 'bg-junction-cgv',
            'linkGMaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.8724376321243!2d112.73121817465156!3d-7.255355892751291!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f944808906ff%3A0xb49024a3b07c8918!2sBG%20Junction%20Surabaya!5e0!3m2!1sen!2sid!4v1685463805048!5m2!1sen!2sid'
        ]);

        Cinema::create([
            'lokasiID' => 2,
            'cinema' => 'Ciputra World Premiere',
            'slug' => 'ciputra-world-premiere',
            'linkGMaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.5433961682493!2d112.71671087465181!3d-7.292675392714824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb8af981617d%3A0xd85ddf73b988ae56!2sCiputra%20World%20XXI!5e0!3m2!1sen!2sid!4v1685463871140!5m2!1sen!2sid'
        ]);

        Cinema::create([
            'lokasiID' => 2,
            'cinema' => 'CITO 21',
            'slug' => 'cito-21',
            'linkGMaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.0772373127397!2d112.72531137465242!3d-7.34522374266348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fca9c2171c9f%3A0xefadbc76ce524bdc!2sCity%20of%20Tomorrow%20Mall!5e0!3m2!1sen!2sid!4v1685463962291!5m2!1sen!2sid'
        ]);

        // Cinema::create([
        //     'lokasiID' => 3,
        //     'cinema' => 'Kediri Mall CGV',
        //     'slug' => 'kediri-mall-cgv',
        //     'linkGMaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.7533892099436!2d112.01683757465761!3d-7.815908292204723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7857eba9ef7827%3A0xd081dd0fb60b6fed!2sCGV%20Cinemas%20Kediri%20Mall!5e0!3m2!1sen!2sid!4v1685463999119!5m2!1sen!2sid'
        // ]);

        // Cinema::create([
        //     'lokasiID' => 3,
        //     'cinema' => 'Kediri XXI',
        //     'slug' => 'kediri-xxi',
        //     'linkGMaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.7533892099436!2d112.01683757465761!3d-7.815908292204723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7857eba9ef7827%3A0xd081dd0fb60b6fed!2sCGV%20Cinemas%20Kediri%20Mall!5e0!3m2!1sen!2sid!4v1685463999119!5m2!1sen!2sid'
        // ]);

        Cinema::create([
            'lokasiID' => 3,
            'cinema' => 'Citra XXI Semarang',
            'slug' => 'citra-xxi-semarang',
            'linkGMaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.1726456064807!2d110.42081127464874!3d-6.988935293012059!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6371dc7edbf%3A0xc09f7d0520aaaf90!2sCitra%20XXI!5e0!3m2!1sen!2sid!4v1685464026127!5m2!1sen!2sid'
        ]);

        Cinema::create([
            'lokasiID' => 3,
            'cinema' => 'Tentrem Mall XXI',
            'slug' => 'tentrem-mall-xxi',
            'linkGMaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.1913232761726!2d110.41927637464876!3d-6.986730593014224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708ba5eccf390f%3A0xcb6b2ed622293930!2sTentrem%20Mall!5e0!3m2!1sen!2sid!4v1685464074989!5m2!1sen!2sid'
        ]);

        Cinema::create([
            'lokasiID' => 3,
            'cinema' => 'Paragon XXI',
            'slug' => 'paragon-xxi',
            'linkGMaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.2551965757298!2d110.41340207464866!3d-6.979185793021598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b5242b2daf9%3A0x590ece08d249b4e3!2sMall%20Paragon%20City%20Semarang!5e0!3m2!1sen!2sid!4v1685464143416!5m2!1sen!2sid'
        ]);

        Bioskop::create([
            'cinemaID' => 2,
            'bioskop' => '2D'
        ]);

        Bioskop::create([
            'cinemaID' => 2,
            'bioskop' => '3D'
        ]);

        Bioskop::create([
            'cinemaID' => 3,
            'bioskop' => 'REGULAR 2D'
        ]);

        Bioskop::create([
            'cinemaID' => 3,
            'bioskop' => 'STARIUM ATMOS 2D'
        ]);

        Bioskop::create([
            'cinemaID' => 4,
            'bioskop' => '4DX2D'
        ]);

        Bioskop::create([
            'cinemaID' => 4,
            'bioskop' => 'SPHEREX 2D'
        ]);


        Bioskop::create([
            'cinemaID' => 5,
            'bioskop' => '2D'
        ]);

        Bioskop::create([
            'cinemaID' => 5,
            'bioskop' => 'REGULAR 3D'
        ]);

        Bioskop::create([
            'cinemaID' => 6,
            'bioskop' => '4DX3D'
        ]);


        Bioskop::create([
            'cinemaID' => 6,
            'bioskop' => '3D'
        ]);

        Bioskop::create([
            'cinemaID' => 7,
            'bioskop' => '2D'
        ]);


        Bioskop::create([
            'cinemaID' => 7,
            'bioskop' => 'STARIUM ATMOS 2D'
        ]);

        HistoryLokasiGuest::create([
            'lokasi' => 'silahkanPilihLokasi'
        ]);

        WaktuTayang::create(['startTime' => '10:30']);
        WaktuTayang::create(['startTime' => '10:45']);
        WaktuTayang::create(['startTime' => '11:00']);
        WaktuTayang::create(['startTime' => '11:15']);
        WaktuTayang::create(['startTime' => '11:30']);
        WaktuTayang::create(['startTime' => '11:45']);
        WaktuTayang::create(['startTime' => '12:00']);
        WaktuTayang::create(['startTime' => '12:15']);
        WaktuTayang::create(['startTime' => '12:30']);
        WaktuTayang::create(['startTime' => '12:45']);
        WaktuTayang::create(['startTime' => '12:00']);
        WaktuTayang::create(['startTime' => '13:15']);
        WaktuTayang::create(['startTime' => '13:20']);
        WaktuTayang::create(['startTime' => '14:30']);
        WaktuTayang::create(['startTime' => '14:40']);
        WaktuTayang::create(['startTime' => '14:45']);
        WaktuTayang::create(['startTime' => '14:55']);
        WaktuTayang::create(['startTime' => '15:00']);
        WaktuTayang::create(['startTime' => '15:15']);
        WaktuTayang::create(['startTime' => '15:25']);
        WaktuTayang::create(['startTime' => '15:30']);
        WaktuTayang::create(['startTime' => '15:45']);
        WaktuTayang::create(['startTime' => '15:55']);
        WaktuTayang::create(['startTime' => '15:00']);
        WaktuTayang::create(['startTime' => '15:10']);
        WaktuTayang::create(['startTime' => '15:15']);
        WaktuTayang::create(['startTime' => '15:30']);
        WaktuTayang::create(['startTime' => '15:40']);
        WaktuTayang::create(['startTime' => '15:45']);
        WaktuTayang::create(['startTime' => '16:00']);
        WaktuTayang::create(['startTime' => '16:10']);
        WaktuTayang::create(['startTime' => '16:15']);
        WaktuTayang::create(['startTime' => '16:30']);
        WaktuTayang::create(['startTime' => '16:45']);
        WaktuTayang::create(['startTime' => '17:00']);
        WaktuTayang::create(['startTime' => '17:15']);
        WaktuTayang::create(['startTime' => '17:30']);
        WaktuTayang::create(['startTime' => '17:35']);
        WaktuTayang::create(['startTime' => '17:45']);
        WaktuTayang::create(['startTime' => '17:50']);
        WaktuTayang::create(['startTime' => '18:00']);
        WaktuTayang::create(['startTime' => '18:05']);
        WaktuTayang::create(['startTime' => '18:15']);
        WaktuTayang::create(['startTime' => '18:20']);
        WaktuTayang::create(['startTime' => '18:30']);
        WaktuTayang::create(['startTime' => '18:35']);
        WaktuTayang::create(['startTime' => '18:45']);
        WaktuTayang::create(['startTime' => '19:00']);
        WaktuTayang::create(['startTime' => '19:15']);
        WaktuTayang::create(['startTime' => '19:30']);
        WaktuTayang::create(['startTime' => '19:45']);
        WaktuTayang::create(['startTime' => '20:00']);
        WaktuTayang::create(['startTime' => '20:15']);
        WaktuTayang::create(['startTime' => '20:30']);
        WaktuTayang::create(['startTime' => '20:45']);
        WaktuTayang::create(['startTime' => '21:00']);
        WaktuTayang::create(['startTime' => '21:15']);
        WaktuTayang::create(['startTime' => '21:30']);
        WaktuTayang::create(['startTime' => '21:45']);
        WaktuTayang::create(['startTime' => '21:50']);

        TanggalTayang::create([
            'showDate' => '2023-06-14',
            'showDateStr' => '14 Jun'
        ]);

        TanggalTayang::create([
            'showDate' => '2023-06-15',
            'showDateStr' => '15 Jun'
        ]);

        TanggalTayang::create([
            'showDate' => '2023-06-16',
            'showDateStr' => '16 Jun'
        ]);

        TanggalTayang::create([
            'showDate' => '2023-06-17',
            'showDateStr' => '17 Jun'
        ]);

        TanggalTayang::create([
            'showDate' => '2023-06-18',
            'showDateStr' => '18 Jun'
        ]);

        Studio::create([
            'studioID' => 1
        ]);

        Studio::create([
            'studioID' => 2
        ]);

        Studio::create([
            'studioID' => 3
        ]);

        Studio::create([
            'studioID' => 4
        ]);

        Studio::create([
            'studioID' => 5
        ]);

        JadwalFilm::create([
            'bioskopID' => 1,
            'startTimeID' => 1,
            'filmID' => 1,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 25000,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 1,
            'startTimeID' => 8,
            'filmID' => 1,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 25000,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 1,
            'startTimeID' => 42,
            'filmID' => 1,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 25000,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 2,
            'startTimeID' => 6,
            'filmID' => 1,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 32500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 2,
            'startTimeID' => 19,
            'filmID' => 1,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 32500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 2,
            'startTimeID' => 26,
            'filmID' => 1,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 32500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 2,
            'startTimeID' => 57,
            'filmID' => 1,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 32500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 3,
            'startTimeID' => 4,
            'filmID' => 1,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 32500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 3,
            'startTimeID' => 25,
            'filmID' => 1,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 32500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 3,
            'startTimeID' => 56,
            'filmID' => 1,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 32500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 3,
            'startTimeID' => 60,
            'filmID' => 1,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 32500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 5,
            'startTimeID' => 7,
            'filmID' => 1,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 35500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 5,
            'startTimeID' => 19,
            'filmID' => 1,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 35500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 5,
            'startTimeID' => 36,
            'filmID' => 1,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 35500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 5,
            'startTimeID' => 40,
            'filmID' => 1,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 35500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 6,
            'startTimeID' => 10,
            'filmID' => 1,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 32500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 6,
            'startTimeID' => 50,
            'filmID' => 1,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 32500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 6,
            'startTimeID' => 60,
            'filmID' => 1,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 32500,
            'endTime' => '00:00'
        ]);

        // RILL 15 JUNI JOHN WICK

        JadwalFilm::create([
            'bioskopID' => 5,
            'startTimeID' => 7,
            'filmID' => 1,
            'showDateID' => 2,
            'studioID' => 1,
            'price' => 35500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 5,
            'startTimeID' => 19,
            'filmID' => 1,
            'showDateID' => 2,
            'studioID' => 1,
            'price' => 35500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 5,
            'startTimeID' => 36,
            'filmID' => 1,
            'showDateID' => 2,
            'studioID' => 1,
            'price' => 35500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 6,
            'startTimeID' => 10,
            'filmID' => 1,
            'showDateID' => 2,
            'studioID' => 1,
            'price' => 32500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 6,
            'startTimeID' => 50,
            'filmID' => 1,
            'showDateID' => 2,
            'studioID' => 1,
            'price' => 32500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 6,
            'startTimeID' => 60,
            'filmID' => 1,
            'showDateID' => 2,
            'studioID' => 1,
            'price' => 32500,
            'endTime' => '00:00'
        ]);

        // 

        JadwalFilm::create([
            'bioskopID' => 4,
            'startTimeID' => 7,
            'filmID' => 1,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 35500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 4,
            'startTimeID' => 19,
            'filmID' => 1,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 35500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 4,
            'startTimeID' => 36,
            'filmID' => 1,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 35500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 3,
            'startTimeID' => 4,
            'filmID' => 2,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 28500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 3,
            'startTimeID' => 25,
            'filmID' => 2,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 28500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 3,
            'startTimeID' => 56,
            'filmID' => 2,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 28500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 3,
            'startTimeID' => 59,
            'filmID' => 2,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 28500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 4,
            'startTimeID' => 11,
            'filmID' => 2,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 28500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 4,
            'startTimeID' => 33,
            'filmID' => 2,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 28500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 4,
            'startTimeID' => 51,
            'filmID' => 2,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 28500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 5,
            'startTimeID' => 13,
            'filmID' => 2,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 28500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 5,
            'startTimeID' => 35,
            'filmID' => 2,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 28500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 5,
            'startTimeID' => 48,
            'filmID' => 2,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 28500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 2,
            'startTimeID' => 13,
            'filmID' => 3,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 28500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 2,
            'startTimeID' => 35,
            'filmID' => 3,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 28500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 2,
            'startTimeID' => 48,
            'filmID' => 3,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 28500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 3,
            'startTimeID' => 3,
            'filmID' => 4,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 27500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 3,
            'startTimeID' => 12,
            'filmID' => 4,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 27500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 3,
            'startTimeID' => 36,
            'filmID' => 4,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 27500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 3,
            'startTimeID' => 51,
            'filmID' => 4,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 27500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 4,
            'startTimeID' => 9,
            'filmID' => 4,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 32000,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 4,
            'startTimeID' => 17,
            'filmID' => 4,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 32000,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 4,
            'startTimeID' => 29,
            'filmID' => 4,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 32000,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 5,
            'startTimeID' => 21,
            'filmID' => 4,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 32500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 5,
            'startTimeID' => 44,
            'filmID' => 4,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 32500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 5,
            'startTimeID' => 55,
            'filmID' => 4,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 32500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 6,
            'startTimeID' => 13,
            'filmID' => 4,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 30000,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 6,
            'startTimeID' => 34,
            'filmID' => 4,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 30000,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 6,
            'startTimeID' => 47,
            'filmID' => 4,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 30000,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 5,
            'startTimeID' => 10,
            'filmID' => 5,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 37000,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 5,
            'startTimeID' => 20,
            'filmID' => 5,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 37000,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 5,
            'startTimeID' => 30,
            'filmID' => 5,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 37000,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 6,
            'startTimeID' => 20,
            'filmID' => 5,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 35500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 6,
            'startTimeID' => 30,
            'filmID' => 5,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 35500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 6,
            'startTimeID' => 40,
            'filmID' => 5,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 35500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 1,
            'startTimeID' => 19,
            'filmID' => 6,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 35000,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 1,
            'startTimeID' => 29,
            'filmID' => 6,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 35000,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 1,
            'startTimeID' => 39,
            'filmID' => 6,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 35000,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 2,
            'startTimeID' => 7,
            'filmID' => 6,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 33500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 2,
            'startTimeID' => 23,
            'filmID' => 6,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 33500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 2,
            'startTimeID' => 45,
            'filmID' => 6,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 33500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 2,
            'startTimeID' => 56,
            'filmID' => 6,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 33500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 3,
            'startTimeID' => 8,
            'filmID' => 6,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 32000,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 3,
            'startTimeID' => 17,
            'filmID' => 6,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 32000,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 3,
            'startTimeID' => 26,
            'filmID' => 6,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 32000,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 3,
            'startTimeID' => 49,
            'filmID' => 6,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 32000,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 4,
            'startTimeID' => 19,
            'filmID' => 6,
            'showDateID' => 1,
            'studioID' => 2,
            'price' => 37500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 4,
            'startTimeID' => 36,
            'filmID' => 6,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 37500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 4,
            'startTimeID' => 46,
            'filmID' => 6,
            'showDateID' => 1,
            'studioID' => 3,
            'price' => 37500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 1,
            'startTimeID' => 19,
            'filmID' => 7,
            'showDateID' => 1,
            'studioID' => 2,
            'price' => 36000,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 1,
            'startTimeID' => 36,
            'filmID' => 7,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 36000,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 1,
            'startTimeID' => 46,
            'filmID' => 7,
            'showDateID' => 1,
            'studioID' => 3,
            'price' => 36000,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 2,
            'startTimeID' => 13,
            'filmID' => 7,
            'showDateID' => 1,
            'studioID' => 2,
            'price' => 34500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 2,
            'startTimeID' => 24,
            'filmID' => 7,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 34500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 2,
            'startTimeID' => 53,
            'filmID' => 7,
            'showDateID' => 1,
            'studioID' => 3,
            'price' => 34500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 5,
            'startTimeID' => 17,
            'filmID' => 7,
            'showDateID' => 1,
            'studioID' => 2,
            'price' => 49000,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 5,
            'startTimeID' => 28,
            'filmID' => 7,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 49000,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 5,
            'startTimeID' => 41,
            'filmID' => 7,
            'showDateID' => 1,
            'studioID' => 3,
            'price' => 49000,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 6,
            'startTimeID' => 2,
            'filmID' => 7,
            'showDateID' => 1,
            'studioID' => 2,
            'price' => 47000,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 6,
            'startTimeID' => 19,
            'filmID' => 7,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 47000,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 6,
            'startTimeID' => 31,
            'filmID' => 7,
            'showDateID' => 1,
            'studioID' => 3,
            'price' => 47000,
            'endTime' => '00:00'
        ]);






        // JADWAL FILM FOR SEMARANG

        JadwalFilm::create([
            'bioskopID' => 7,
            'startTimeID' => 1,
            'filmID' => 1,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 25000,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 7,
            'startTimeID' => 8,
            'filmID' => 1,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 25000,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 7,
            'startTimeID' => 42,
            'filmID' => 1,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 25000,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 8,
            'startTimeID' => 6,
            'filmID' => 1,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 32500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 8,
            'startTimeID' => 19,
            'filmID' => 1,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 32500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 8,
            'startTimeID' => 26,
            'filmID' => 1,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 32500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 8,
            'startTimeID' => 57,
            'filmID' => 1,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 32500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 9,
            'startTimeID' => 4,
            'filmID' => 1,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 32500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 9,
            'startTimeID' => 25,
            'filmID' => 1,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 32500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 9,
            'startTimeID' => 56,
            'filmID' => 1,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 32500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 9,
            'startTimeID' => 60,
            'filmID' => 1,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 32500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 12,
            'startTimeID' => 10,
            'filmID' => 1,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 32500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 12,
            'startTimeID' => 50,
            'filmID' => 1,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 32500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 12,
            'startTimeID' => 60,
            'filmID' => 1,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 32500,
            'endTime' => '00:00'
        ]);

        // RILL 15 JUNI JOHN WICK

        JadwalFilm::create([
            'bioskopID' => 11,
            'startTimeID' => 7,
            'filmID' => 1,
            'showDateID' => 2,
            'studioID' => 1,
            'price' => 35500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 11,
            'startTimeID' => 19,
            'filmID' => 1,
            'showDateID' => 2,
            'studioID' => 1,
            'price' => 35500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 11,
            'startTimeID' => 36,
            'filmID' => 1,
            'showDateID' => 2,
            'studioID' => 1,
            'price' => 35500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 12,
            'startTimeID' => 10,
            'filmID' => 1,
            'showDateID' => 2,
            'studioID' => 1,
            'price' => 32500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 12,
            'startTimeID' => 50,
            'filmID' => 1,
            'showDateID' => 2,
            'studioID' => 1,
            'price' => 32500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 12,
            'startTimeID' => 60,
            'filmID' => 1,
            'showDateID' => 2,
            'studioID' => 1,
            'price' => 32500,
            'endTime' => '00:00'
        ]);

        // 

        JadwalFilm::create([
            'bioskopID' => 10,
            'startTimeID' => 7,
            'filmID' => 1,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 35500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 10,
            'startTimeID' => 19,
            'filmID' => 1,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 35500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 10,
            'startTimeID' => 36,
            'filmID' => 1,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 35500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 9,
            'startTimeID' => 4,
            'filmID' => 2,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 28500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 9,
            'startTimeID' => 25,
            'filmID' => 2,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 28500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 9,
            'startTimeID' => 56,
            'filmID' => 2,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 28500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 9,
            'startTimeID' => 59,
            'filmID' => 2,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 28500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 10,
            'startTimeID' => 11,
            'filmID' => 2,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 28500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 10,
            'startTimeID' => 33,
            'filmID' => 2,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 28500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 10,
            'startTimeID' => 51,
            'filmID' => 2,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 28500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 11,
            'startTimeID' => 13,
            'filmID' => 2,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 28500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 11,
            'startTimeID' => 35,
            'filmID' => 2,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 28500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 11,
            'startTimeID' => 48,
            'filmID' => 2,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 28500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 8,
            'startTimeID' => 13,
            'filmID' => 3,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 28500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 8,
            'startTimeID' => 35,
            'filmID' => 3,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 28500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 8,
            'startTimeID' => 48,
            'filmID' => 3,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 28500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 9,
            'startTimeID' => 3,
            'filmID' => 4,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 27500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 9,
            'startTimeID' => 12,
            'filmID' => 4,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 27500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 9,
            'startTimeID' => 36,
            'filmID' => 4,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 27500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 9,
            'startTimeID' => 51,
            'filmID' => 4,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 27500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 10,
            'startTimeID' => 9,
            'filmID' => 4,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 32000,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 10,
            'startTimeID' => 17,
            'filmID' => 4,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 32000,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 10,
            'startTimeID' => 29,
            'filmID' => 4,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 32000,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 11,
            'startTimeID' => 21,
            'filmID' => 4,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 32500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 11,
            'startTimeID' => 44,
            'filmID' => 4,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 32500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 11,
            'startTimeID' => 55,
            'filmID' => 4,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 32500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 12,
            'startTimeID' => 13,
            'filmID' => 4,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 30000,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 12,
            'startTimeID' => 34,
            'filmID' => 4,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 30000,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 12,
            'startTimeID' => 47,
            'filmID' => 4,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 30000,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 11,
            'startTimeID' => 10,
            'filmID' => 5,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 37000,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 11,
            'startTimeID' => 20,
            'filmID' => 5,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 37000,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 11,
            'startTimeID' => 30,
            'filmID' => 5,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 37000,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 12,
            'startTimeID' => 20,
            'filmID' => 5,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 35500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 12,
            'startTimeID' => 30,
            'filmID' => 5,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 35500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 12,
            'startTimeID' => 40,
            'filmID' => 5,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 35500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 7,
            'startTimeID' => 19,
            'filmID' => 6,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 35000,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 7,
            'startTimeID' => 29,
            'filmID' => 6,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 35000,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 7,
            'startTimeID' => 39,
            'filmID' => 6,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 35000,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 8,
            'startTimeID' => 7,
            'filmID' => 6,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 33500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 8,
            'startTimeID' => 23,
            'filmID' => 6,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 33500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 8,
            'startTimeID' => 45,
            'filmID' => 6,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 33500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 8,
            'startTimeID' => 56,
            'filmID' => 6,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 33500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 9,
            'startTimeID' => 8,
            'filmID' => 6,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 32000,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 9,
            'startTimeID' => 17,
            'filmID' => 6,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 32000,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 9,
            'startTimeID' => 26,
            'filmID' => 6,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 32000,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 9,
            'startTimeID' => 49,
            'filmID' => 6,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 32000,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 10,
            'startTimeID' => 19,
            'filmID' => 6,
            'showDateID' => 1,
            'studioID' => 2,
            'price' => 37500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 10,
            'startTimeID' => 36,
            'filmID' => 6,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 37500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 10,
            'startTimeID' => 46,
            'filmID' => 6,
            'showDateID' => 1,
            'studioID' => 3,
            'price' => 37500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 7,
            'startTimeID' => 19,
            'filmID' => 7,
            'showDateID' => 1,
            'studioID' => 2,
            'price' => 36000,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 7,
            'startTimeID' => 36,
            'filmID' => 7,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 36000,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 7,
            'startTimeID' => 46,
            'filmID' => 7,
            'showDateID' => 1,
            'studioID' => 3,
            'price' => 36000,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 8,
            'startTimeID' => 13,
            'filmID' => 7,
            'showDateID' => 1,
            'studioID' => 2,
            'price' => 34500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 8,
            'startTimeID' => 24,
            'filmID' => 7,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 34500,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 8,
            'startTimeID' => 53,
            'filmID' => 7,
            'showDateID' => 1,
            'studioID' => 3,
            'price' => 34500,
            'endTime' => '00:00'
        ]);

        // JadwalFilm::create([
        //     'bioskopID' => 11,
        //     'startTimeID' => 17,
        //     'filmID' => 7,
        //     'showDateID' => 1,
        //     'studioID' => 2,
        //     'price' => 49000,
        //     'endTime' => '00:00'
        // ]);

        // JadwalFilm::create([
        //     'bioskopID' => 11,
        //     'startTimeID' => 28,
        //     'filmID' => 7,
        //     'showDateID' => 1,
        //     'studioID' => 1,
        //     'price' => 49000,
        //     'endTime' => '00:00'
        // ]);

        // JadwalFilm::create([
        //     'bioskopID' => 11,
        //     'startTimeID' => 41,
        //     'filmID' => 7,
        //     'showDateID' => 1,
        //     'studioID' => 3,
        //     'price' => 49000,
        //     'endTime' => '00:00'
        // ]);

        JadwalFilm::create([
            'bioskopID' => 12,
            'startTimeID' => 2,
            'filmID' => 7,
            'showDateID' => 1,
            'studioID' => 2,
            'price' => 47000,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 12,
            'startTimeID' => 19,
            'filmID' => 7,
            'showDateID' => 1,
            'studioID' => 1,
            'price' => 47000,
            'endTime' => '00:00'
        ]);

        JadwalFilm::create([
            'bioskopID' => 12,
            'startTimeID' => 31,
            'filmID' => 7,
            'showDateID' => 1,
            'studioID' => 3,
            'price' => 47000,
            'endTime' => '00:00'
        ]);

        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'A1']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'A2']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'A3']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'A4']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'A5']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'A6']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'A7']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'A8']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'B1']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'B2']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'B3']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'B4']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'B5']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'B6']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'B7']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'B8']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'C1']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'C2']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'C3']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'C4']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'C5']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'C6']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'C7']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'C8']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'D1']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'D2']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'D3']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'D4']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'D5']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'D6']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'D7']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'D8']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'E1']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'E2']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'E3']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'E4']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'E5']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'E6']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'E7']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'E8']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'F1']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'F2']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'F3']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'F4']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'F5']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'F6']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'F7']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'F8']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'G1']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'G2']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'G3']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'G4']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'G5']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'G6']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'G7']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'G8']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'H1']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'H2']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'H3']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'H4']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'H5']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'H6']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'H7']);
        Kursi::create(['bioskopID' => 1, 'seatNumber' => 'H8']);

        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'A1']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'A2']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'A3']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'A4']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'A5']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'A6']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'A7']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'A8']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'B1']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'B2']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'B3']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'B4']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'B5']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'B6']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'B7']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'B8']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'C1']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'C2']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'C3']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'C4']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'C5']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'C6']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'C7']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'C8']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'D1']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'D2']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'D3']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'D4']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'D5']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'D6']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'D7']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'D8']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'E1']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'E2']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'E3']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'E4']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'E5']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'E6']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'E7']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'E8']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'F1']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'F2']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'F3']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'F4']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'F5']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'F6']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'F7']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'F8']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'G1']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'G2']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'G3']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'G4']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'G5']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'G6']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'G7']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'G8']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'H1']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'H2']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'H3']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'H4']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'H5']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'H6']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'H7']);
        Kursi::create(['bioskopID' => 2, 'seatNumber' => 'H8']);

        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'A1']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'A2']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'A3']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'A4']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'A5']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'A6']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'A7']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'A8']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'B1']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'B2']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'B3']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'B4']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'B5']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'B6']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'B7']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'B8']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'C1']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'C2']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'C3']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'C4']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'C5']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'C6']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'C7']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'C8']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'D1']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'D2']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'D3']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'D4']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'D5']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'D6']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'D7']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'D8']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'E1']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'E2']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'E3']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'E4']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'E5']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'E6']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'E7']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'E8']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'F1']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'F2']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'F3']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'F4']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'F5']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'F6']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'F7']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'F8']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'G1']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'G2']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'G3']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'G4']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'G5']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'G6']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'G7']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'G8']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'H1']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'H2']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'H3']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'H4']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'H5']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'H6']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'H7']);
        Kursi::create(['bioskopID' => 3, 'seatNumber' => 'H8']);

        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'A1']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'A2']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'A3']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'A4']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'A5']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'A6']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'A7']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'A8']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'B1']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'B2']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'B3']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'B4']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'B5']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'B6']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'B7']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'B8']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'C1']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'C2']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'C3']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'C4']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'C5']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'C6']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'C7']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'C8']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'D1']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'D2']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'D3']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'D4']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'D5']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'D6']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'D7']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'D8']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'E1']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'E2']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'E3']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'E4']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'E5']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'E6']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'E7']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'E8']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'F1']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'F2']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'F3']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'F4']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'F5']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'F6']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'F7']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'F8']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'G1']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'G2']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'G3']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'G4']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'G5']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'G6']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'G7']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'G8']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'H1']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'H2']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'H3']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'H4']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'H5']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'H6']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'H7']);
        Kursi::create(['bioskopID' => 4, 'seatNumber' => 'H8']);

        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'A1']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'A2']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'A3']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'A4']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'A5']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'A6']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'A7']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'A8']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'B1']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'B2']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'B3']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'B4']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'B5']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'B6']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'B7']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'B8']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'C1']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'C2']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'C3']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'C4']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'C5']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'C6']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'C7']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'C8']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'D1']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'D2']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'D3']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'D4']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'D5']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'D6']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'D7']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'D8']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'E1']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'E2']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'E3']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'E4']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'E5']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'E6']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'E7']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'E8']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'F1']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'F2']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'F3']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'F4']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'F5']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'F6']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'F7']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'F8']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'G1']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'G2']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'G3']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'G4']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'G5']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'G6']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'G7']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'G8']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'H1']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'H2']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'H3']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'H4']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'H5']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'H6']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'H7']);
        Kursi::create(['bioskopID' => 5, 'seatNumber' => 'H8']);

        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'A1']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'A2']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'A3']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'A4']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'A5']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'A6']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'A7']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'A8']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'B1']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'B2']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'B3']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'B4']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'B5']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'B6']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'B7']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'B8']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'C1']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'C2']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'C3']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'C4']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'C5']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'C6']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'C7']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'C8']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'D1']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'D2']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'D3']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'D4']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'D5']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'D6']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'D7']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'D8']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'E1']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'E2']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'E3']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'E4']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'E5']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'E6']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'E7']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'E8']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'F1']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'F2']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'F3']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'F4']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'F5']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'F6']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'F7']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'F8']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'G1']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'G2']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'G3']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'G4']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'G5']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'G6']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'G7']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'G8']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'H1']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'H2']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'H3']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'H4']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'H5']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'H6']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'H7']);
        Kursi::create(['bioskopID' => 6, 'seatNumber' => 'H8']);

        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'A1']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'A2']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'A3']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'A4']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'A5']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'A6']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'A7']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'A8']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'B1']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'B2']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'B3']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'B4']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'B5']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'B6']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'B7']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'B8']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'C1']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'C2']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'C3']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'C4']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'C5']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'C6']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'C7']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'C8']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'D1']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'D2']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'D3']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'D4']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'D5']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'D6']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'D7']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'D8']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'E1']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'E2']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'E3']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'E4']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'E5']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'E6']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'E7']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'E8']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'F1']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'F2']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'F3']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'F4']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'F5']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'F6']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'F7']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'F8']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'G1']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'G2']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'G3']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'G4']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'G5']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'G6']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'G7']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'G8']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'H1']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'H2']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'H3']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'H4']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'H5']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'H6']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'H7']);
        Kursi::create(['bioskopID' => 7, 'seatNumber' => 'H8']);

        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'A1']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'A2']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'A3']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'A4']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'A5']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'A6']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'A7']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'A8']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'B1']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'B2']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'B3']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'B4']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'B5']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'B6']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'B7']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'B8']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'C1']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'C2']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'C3']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'C4']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'C5']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'C6']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'C7']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'C8']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'D1']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'D2']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'D3']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'D4']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'D5']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'D6']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'D7']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'D8']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'E1']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'E2']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'E3']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'E4']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'E5']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'E6']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'E7']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'E8']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'F1']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'F2']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'F3']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'F4']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'F5']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'F6']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'F7']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'F8']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'G1']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'G2']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'G3']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'G4']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'G5']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'G6']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'G7']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'G8']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'H1']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'H2']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'H3']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'H4']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'H5']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'H6']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'H7']);
        Kursi::create(['bioskopID' => 8, 'seatNumber' => 'H8']);

        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'A1']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'A2']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'A3']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'A4']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'A5']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'A6']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'A7']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'A8']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'B1']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'B2']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'B3']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'B4']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'B5']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'B6']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'B7']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'B8']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'C1']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'C2']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'C3']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'C4']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'C5']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'C6']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'C7']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'C8']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'D1']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'D2']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'D3']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'D4']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'D5']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'D6']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'D7']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'D8']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'E1']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'E2']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'E3']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'E4']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'E5']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'E6']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'E7']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'E8']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'F1']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'F2']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'F3']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'F4']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'F5']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'F6']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'F7']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'F8']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'G1']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'G2']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'G3']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'G4']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'G5']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'G6']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'G7']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'G8']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'H1']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'H2']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'H3']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'H4']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'H5']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'H6']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'H7']);
        Kursi::create(['bioskopID' => 9, 'seatNumber' => 'H8']);

        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'A1']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'A2']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'A3']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'A4']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'A5']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'A6']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'A7']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'A8']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'B1']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'B2']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'B3']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'B4']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'B5']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'B6']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'B7']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'B8']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'C1']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'C2']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'C3']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'C4']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'C5']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'C6']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'C7']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'C8']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'D1']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'D2']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'D3']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'D4']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'D5']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'D6']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'D7']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'D8']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'E1']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'E2']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'E3']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'E4']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'E5']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'E6']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'E7']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'E8']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'F1']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'F2']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'F3']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'F4']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'F5']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'F6']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'F7']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'F8']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'G1']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'G2']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'G3']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'G4']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'G5']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'G6']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'G7']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'G8']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'H1']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'H2']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'H3']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'H4']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'H5']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'H6']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'H7']);
        Kursi::create(['bioskopID' => 10, 'seatNumber' => 'H8']);

        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'A1']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'A2']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'A3']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'A4']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'A5']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'A6']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'A7']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'A8']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'B1']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'B2']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'B3']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'B4']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'B5']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'B6']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'B7']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'B8']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'C1']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'C2']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'C3']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'C4']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'C5']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'C6']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'C7']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'C8']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'D1']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'D2']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'D3']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'D4']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'D5']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'D6']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'D7']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'D8']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'E1']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'E2']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'E3']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'E4']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'E5']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'E6']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'E7']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'E8']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'F1']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'F2']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'F3']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'F4']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'F5']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'F6']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'F7']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'F8']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'G1']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'G2']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'G3']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'G4']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'G5']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'G6']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'G7']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'G8']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'H1']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'H2']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'H3']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'H4']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'H5']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'H6']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'H7']);
        Kursi::create(['bioskopID' => 11, 'seatNumber' => 'H8']);

        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'A1']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'A2']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'A3']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'A4']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'A5']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'A6']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'A7']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'A8']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'B1']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'B2']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'B3']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'B4']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'B5']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'B6']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'B7']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'B8']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'C1']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'C2']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'C3']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'C4']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'C5']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'C6']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'C7']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'C8']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'D1']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'D2']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'D3']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'D4']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'D5']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'D6']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'D7']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'D8']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'E1']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'E2']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'E3']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'E4']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'E5']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'E6']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'E7']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'E8']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'F1']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'F2']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'F3']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'F4']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'F5']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'F6']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'F7']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'F8']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'G1']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'G2']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'G3']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'G4']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'G5']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'G6']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'G7']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'G8']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'H1']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'H2']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'H3']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'H4']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'H5']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'H6']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'H7']);
        Kursi::create(['bioskopID' => 12, 'seatNumber' => 'H8']);

        Pesanan::create([
            'showID' => 1,
            'user_id' => 1,
            'bookingCode' => '2106547',
            'totalPembayaran' => '100000',
            'user_id' => 1,
            'bookingCode' => '2106547',
            'totalPembayaran' => '100000'
        ]);

        KursiPesanan::create([
            'seatID' => 1,
            'orderNumber' => 1
        ]);
    }
}
