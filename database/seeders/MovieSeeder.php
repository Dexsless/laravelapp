<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::insert([
            'title' => 'Jumanji',
            'description' => 'lorem ipsum dolor sit amit....',
            'coverUrl' => 'https://m.media-amazon.com/images/M/MV5BOTM5ZjA2YWMtYjY3Ny00ZDU1LTk1NjYtMzhjMGY5ZmZkMzgwL2ltYWdlL2ltYWdlXkEyXkFqcGdeQXVyNTAyODkwOQ@@._V1_QL75_UY562_CR9,0,380,562_.jpg',
            'trailerUrl' => 'https://www.imdb.com/video/vi1721939225/?playlistId=tt3741634&ref_=ext_shr_lnk',
            'viewer' => 100
        ]);
    }
}
