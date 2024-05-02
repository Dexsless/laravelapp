<?php

namespace Database\Seeders;

use App\Models\DetailFilm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailFilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DetailFilm::insert([
            'film_id' => 1,
            'codeFilm' => 'tt0113497',
            'urlImdb' => 'https://www.imdb.com/title/tt0113497/?ref_=nv_sr_srsg_0_tt_7_nm_1_q_jumanji'
        ]);
        DetailFilm::insert([
            'film_id' => 2,
            'codeFilm' => 'tt9362722',
            'urlImdb' => 'https://www.imdb.com/title/tt9362722/?ref_=nv_sr_srsg_0_tt_8_nm_0_q_spider'
        ]);
        DetailFilm::insert([
            'film_id' => 3,
            'codeFilm' => 'tt5950044',
            'urlImdb' => 'https://www.imdb.com/title/tt5950044/?ref_=nv_sr_srsg_0_tt_8_nm_0_q_superman'
        ]);
        DetailFilm::insert([
            'film_id' => 4,
            'codeFilm' => 'tt1877830',
            'urlImdb' => 'https://www.imdb.com/title/tt1877830/?ref_=nv_sr_srsg_0_tt_8_nm_0_q_batman'
        ]);
        DetailFilm::insert([
            'film_id' => 5,
            'codeFilm' => 'tt0371746',
            'urlImdb' => 'https://www.imdb.com/title/tt0371746/?ref_=fn_al_tt_1'
        ]);
    }
}
