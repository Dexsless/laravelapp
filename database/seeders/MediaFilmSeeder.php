<?php

namespace Database\Seeders;

use App\Models\MediaFilm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MediaFilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MediaFilm::insert([
            'film_id' => 1,
            'tipeMedia' => 1,
            'title' => 'Bapakku Paawang Ruok',
            'urlMedia' => 'https://www.youtube.com/watch?v=a01Jdnn46VI'
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'tipeMedia' => 0,
            'title' => 'Belajar LUA',
            'urlMedia' => 'https://www.youtube.com/watch?v=a01Jdnn46VI'
        ]);
                MediaFilm::insert([
            'film_id' => 1,
            'tipeMedia' => 1,
            'title' => 'film apa',
            'urlMedia' => 'https: //www.youtube.com/watch?v=qPN5Zqx6k8E',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'tipeMedia' => 0,
            'title' => 'miami',
            'urlMedia' => 'https: //www.youtube.com/watch?v=hMkMwG5O-9w',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'tipeMedia' => 2,
            'title' => 'media A',
            'urlMedia' => 'https: //www.youtube.com/watch?v=V_gLHxkgeqE',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'tipeMedia' => 0,
            'title' => 'media B',
            'urlMedia' => 'https: //www.youtube.com/@GamingMobileGM',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'tipeMedia' => 1,
            'title' => 'media C',
            'urlMedia' => 'https: //www.youtube.com/watch?v=zoH4zizjLhI',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'tipeMedia' => 1,
            'title' => 'media D',
            'urlMedia' => 'https: //www.youtube.com/watch?v=BVa3ZpofFCM',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'tipeMedia' => 0,
            'title' => 'media E',
            'urlMedia' => 'https: //www.youtube.com/watch?v=A5FGq1ClUzE',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'tipeMedia' => 2,
            'title' => 'media F',
            'urlMedia' => 'https: //www.youtube.com/watch?v=0p64GBZDHwE',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'tipeMedia' => 0,
            'title' => 'media G',
            'urlMedia' => 'https: //www.youtube.com/watch?v=WrtoAkI9mRg',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'tipeMedia' => 1,
            'title' => 'media H',
            'urlMedia' => 'https: //www.youtube.com/watch?v=grFElvr5Nrs&t=80s',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'tipeMedia' => 1,
            'title' => 'media I',
            'urlMedia' => 'https: //www.youtube.com/watch?v=wmwOv3qR4VA',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'tipeMedia' => 0,
            'title' => 'media J',
            'urlMedia' => 'https: //www.youtube.com/watch?v=nmqe9XQuUcA',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'tipeMedia' => 2,
            'title' => 'media K',
            'urlMedia' => 'https: //www.youtube.com/watch?v=0szpRuVjIGU',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'tipeMedia' => 0,
            'title' => 'media L',
            'urlMedia' => 'https: //www.youtube.com/watch?v=eR0rAhutERg',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'tipeMedia' => 1,
            'title' => 'media M',
            'urlMedia' => 'https: //www.youtube.com/watch?v=Xu6M236qX6g',
        ]);
    }
}
