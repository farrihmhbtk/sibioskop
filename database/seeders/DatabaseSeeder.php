<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Film;
use App\Models\User;
use App\Models\Lokasi;
use App\Models\Bioskop;
use App\Models\temp_lokasi;
use Illuminate\Database\Seeder;

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
            'name' => 'Admin',
            'password' => bcrypt(123),
            'phoneNumber' => '08123456789',
            'email' => 'halowow@gmail.com'
        ]);


        Film::create([
            'title' => 'John Wick Chapter 4',
            'slug' => 'john-wick-chapter-4',
            'linkPoster' => 'https://pics.filmaffinity.com/John_Wick_Chapter_4-101402041-large.jpg',
            'linkTrailerID' => 'yjRHZEUamCc',
            'linkCoverTrailer' => 'https://i.ytimg.com/vi/yjRHZEUamCc/maxresdefault.jpg',
            'skorFilm' => '5',
            'genre' => 'Action',
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
            'genre' => 'Action',
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
            'genre' => 'Action',
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
            'genre' => 'History',
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
            'genre' => 'Drama',
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
            'genre' => 'Animation',
            'durasi' => '1 Jam 32 Menit',
            'sutradara' => 'Aaron Horvath, Michael Jelenic',
            'ratingUsia' => 'SU',
            'sinopsis' => 'Pada suatu hari'
        ]);

        Film::create([
            'title' => 'FAST X',
            'slug' => 'fast-x',
            'linkPoster' => 'https://i.dailymail.co.uk/1s/2023/02/01/02/67189525-11699313-image-m-28_1675219232984.jpg',
            'linkTrailerID' => 'aOb15GVFZxU',
            'linkCoverTrailer' => 'https://i.ytimg.com/vi/aOb15GVFZxU/hq720.jpg?sqp=-oaymwEcCNAFEJQDSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLAcUVGjd6SxEFI8foHSNHYBRJ4arA',
            'skorFilm' => '5',
            'genre' => 'Action',
            'durasi' => '2 Jam 21 Menit',
            'sutradara' => 'Louis Leterrier',
            'ratingUsia' => 'R 13+',
            'sinopsis' => 'Pada suatu hari'
        ]);

        Film::create([
            'title' => 'GUY RITCHIES THE COVENANT',
            'slug' => 'guy-ritchies-the-covenant',
            'linkPoster' => 'https://asset.tix.id/wp-content/uploads/2023/04/dee6c5d6-25a0-4750-976e-07601e52bd6b.jpeg',
            'linkTrailerID' => '02PPMPArNEQ',
            'linkCoverTrailer' => 'https://i.ytimg.com/vi/02PPMPArNEQ/hq720.jpg?sqp=-oaymwEcCNAFEJQDSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLDvWGrxU50BeDsi_-BD-UMcrcLm8w',
            'skorFilm' => '5',
            'genre' => 'Action',
            'durasi' => '2 Jam 3 Menit',
            'sutradara' => 'Guy Ritchie',
            'ratingUsia' => 'R 13+',
            'sinopsis' => 'Pada suatu hari'
        ]);

        Lokasi::create([
            'city' => 'silahkanPilihLokasi',
        ]);

        Lokasi::create([
            'city' => 'Surabaya',
        ]);

        Lokasi::create([
            'city' => 'Kediri',
        ]);

        Lokasi::create([
            'city' => 'Semarang',
        ]);

        Bioskop::create([
            'lokasi_id' => 1,
            'temp_lokasi_id' => 1,
            'bioskop' => 'Silahkan Pilih Lokasi'
        ]);

        Bioskop::create([
            'lokasi_id' => 2,
            'temp_lokasi_id' => 2,
            'bioskop' => 'BG Junction CGV'
        ]);

        Bioskop::create([
            'lokasi_id' => 2,
            'temp_lokasi_id' => 2,
            'bioskop' => 'Ciputra World Premiere'
        ]);

        Bioskop::create([
            'lokasi_id' => 2,
            'temp_lokasi_id' => 2,
            'bioskop' => 'CITO 21'
        ]);

        Bioskop::create([
            'lokasi_id' => 2,
            'temp_lokasi_id' => 2,
            'bioskop' => 'City of Tommorrow Cinepolis'
        ]);

        Bioskop::create([
            'lokasi_id' => 2,
            'temp_lokasi_id' => 2,
            'bioskop' => 'Delta XXI'
        ]);

        Bioskop::create([
            'lokasi_id' => 2,
            'temp_lokasi_id' => 2,
            'bioskop' => 'Galaxy XXI'
        ]);

        Bioskop::create([
            'lokasi_id' => 2,
            'temp_lokasi_id' => 2,
            'bioskop' => 'Grand City Premiere'
        ]);

        Bioskop::create([
            'lokasi_id' => 2,
            'temp_lokasi_id' => 2,
            'bioskop' => 'Pakuwon Mall XXI'
        ]);

        Bioskop::create([
            'lokasi_id' => 2,
            'temp_lokasi_id' => 2,
            'bioskop' => 'PTC XXI'
        ]);

        Bioskop::create([
            'lokasi_id' => 2,
            'temp_lokasi_id' => 2,
            'bioskop' => 'ROYAL XXI'
        ]);

        Bioskop::create([
            'lokasi_id' => 2,
            'temp_lokasi_id' => 2,
            'bioskop' => 'Surabaya Town Square XXI'
        ]);

        Bioskop::create([
            'lokasi_id' => 2,
            'temp_lokasi_id' => 2,
            'bioskop' => 'Trans Icon Mall XXI'
        ]);

        Bioskop::create([
            'lokasi_id' => 2,
            'temp_lokasi_id' => 2,
            'bioskop' => 'Tunjungan 5 Premiere'
        ]);

        Bioskop::create([
            'lokasi_id' => 3,
            'temp_lokasi_id' => 3,
            'bioskop' => 'Kediri Mall CGV'
        ]);

        Bioskop::create([
            'lokasi_id' => 3,
            'temp_lokasi_id' => 3,
            'bioskop' => 'Kediri XXI'
        ]);

        Bioskop::create([
            'lokasi_id' => 4,
            'temp_lokasi_id' => 4,
            'bioskop' => 'Citra XXI Semarang'
        ]);

        Bioskop::create([
            'lokasi_id' => 4,
            'temp_lokasi_id' => 4,
            'bioskop' => 'Tentrem Mall XXI'
        ]);

        Bioskop::create([
            'lokasi_id' => 4,
            'temp_lokasi_id' => 4,
            'bioskop' => 'Tentrem Mall Premiere'
        ]);

        Bioskop::create([
            'lokasi_id' => 4,
            'temp_lokasi_id' => 4,
            'bioskop' => 'Paragon XXI'
        ]);

        Bioskop::create([
            'lokasi_id' => 4,
            'temp_lokasi_id' => 4,
            'bioskop' => 'Tentrem Mall Premiere'
        ]);

        Bioskop::create([
            'lokasi_id' => 4,
            'temp_lokasi_id' => 4,
            'bioskop' => 'Tentrem Mall XXI'
        ]);

        Bioskop::create([
            'lokasi_id' => 4,
            'temp_lokasi_id' => 4,
            'bioskop' => 'The Park Semarang XXI'
        ]);

        Bioskop::create([
            'lokasi_id' => 4,
            'temp_lokasi_id' => 4,
            'bioskop' => 'Uptown Mall BSB City XXI'
        ]);

        temp_lokasi::create([
            'id_temp' => 'pilihLokasi'
        ]);

    }
}
