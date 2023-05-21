<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Film;
use App\Models\User;

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
            'linkPoster' => 'https://pics.filmaffinity.com/John_Wick_Chapter_4-101402041-large.jpg',
            'linkTrailerID' => 'yjRHZEUamCc',
            'linkCoverTrailer' => 'https://i.ytimg.com/vi/yjRHZEUamCc/maxresdefault.jpg',
            'skorFilm' => '5',
            'genre' => 'Action',
            'sutradara' => 'John',
            'ratingUsia' => 'SU',
            'sinopsis' => 'Pada suatu hari'
        ]);

        Film::create([
            'title' => 'Ant Man : Quantumania',
            'linkPoster' => 'https://images.thedirect.com/media/photos/4am_screenx.jpg',
            'linkTrailerID' => '5WfTEZJnv_8',
            'linkCoverTrailer' => 'https://i.ytimg.com/vi/QbZqS2pvEmQ/maxresdefault.jpg',
            'skorFilm' => '5',
            'genre' => 'Action',
            'sutradara' => 'John',
            'ratingUsia' => 'SU',
            'sinopsis' => 'Pada suatu hari'
        ]);

        Film::create([
            'title' => 'Avatar: The Way of Water',
            'linkPoster' => 'https://i.kinja-img.com/gawker-media/image/upload/c_fit,f_auto,g_center,q_60,w_645/eb4a61461794d426df55290532e15503.jpg',
            'linkTrailerID' => 'o5F8MOz_IDw',
            'linkCoverTrailer' => 'https://i.ytimg.com/vi/o5F8MOz_IDw/hq720.jpg?sqp=-oaymwEcCNAFEJQDSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLC6EfY_-phwEFh_PGn7lQo_4gi6Pg',
            'skorFilm' => '5',
            'genre' => 'Action',
            'sutradara' => 'John',
            'ratingUsia' => 'SU',
            'sinopsis' => 'Pada suatu hari'
        ]);

        Film::create([
            'title' => 'Guardian of The Galaxy Vol 3',
            'linkPoster' => 'https://www.themoviedb.org/t/p/original/r2J02Z2OpNTctfOSN1Ydgii51I3.jpg',
            'linkTrailerID' => 'u3V5KDHRQvk',
            'linkCoverTrailer' => 'https://i.ytimg.com/vi/u3V5KDHRQvk/hq720.jpg?sqp=-oaymwEcCNAFEJQDSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLCPjju4861mrOfgN9gsO8r90BYcEg',
            'skorFilm' => '5',
            'genre' => 'Action',
            'sutradara' => 'John',
            'ratingUsia' => 'SU',
            'sinopsis' => 'Pada suatu hari'
        ]);

        Film::create([
            'title' => 'Oppenheimer',
            'linkPoster' => 'https://assets-a1.kompasiana.com/items/album/2023/05/08/poster-film-oppenheimer-2023-foto-dari-rotten-tomatoes-6458adb408a8b57cba48adb3.jpg',
            'linkTrailerID' => 'uYPbbksJxIg',
            'linkCoverTrailer' => 'https://i.ytimg.com/vi/uYPbbksJxIg/hq720.jpg?sqp=-oaymwEcCNAFEJQDSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLA2M_LSAVX5C1yeaypLoWxlz78y5Q',
            'skorFilm' => '5',
            'genre' => 'Action',
            'sutradara' => 'John',
            'ratingUsia' => 'SU',
            'sinopsis' => 'Pada suatu hari'
        ]);

        Film::create([
            'title' => 'Buya Hamka',
            'linkPoster' => 'https://cdn.gramedia.com/uploads/picture_meta/2023/4/10/n2wfjd2hadzvmcyqhrjugo.jpg',
            'linkTrailerID' => 'fAQnkdaGisM',
            'linkCoverTrailer' => 'https://i.ytimg.com/vi/fAQnkdaGisM/hq720.jpg?sqp=-oaymwEcCNAFEJQDSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLC1DjtaaWcAXTdYBR7OJgZMehgiHA',
            'skorFilm' => '5',
            'genre' => 'Action',
            'sutradara' => 'John',
            'ratingUsia' => 'SU',
            'sinopsis' => 'Pada suatu hari'
        ]);

        Film::create([
            'title' => 'The Super Mario Bros. Movie',
            'linkPoster' => 'https://upload.wikimedia.org/wikipedia/en/4/44/The_Super_Mario_Bros._Movie_poster.jpg',
            'linkTrailerID' => 'TnGl01FkMMo',
            'linkCoverTrailer' => 'https://i.ytimg.com/an_webp/TnGl01FkMMo/mqdefault_6s.webp?du=3000&sqp=CIqRqaMG&rs=AOn4CLDribO2IiGPtIOehxpMp_UdH5LRkQ',
            'skorFilm' => '5',
            'genre' => 'Action',
            'sutradara' => 'John',
            'ratingUsia' => 'SU',
            'sinopsis' => 'Pada suatu hari'
        ]);
    }
}
