<?php

namespace Database\Seeders;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Film::insert([
            'Judul' => 'Jumanji',
            'Deskripsi' => 'lorem ipsum dolor sit amit....'
        ]);
        Film::insert([
            'Judul' => 'Spider Man',
            'Deskripsi' => 'lorem ipsum dolor sit amit....'
        ]);
        Film::insert([
            'Judul' => 'Super Man',
            'Deskripsi' => 'lorem ipsum dolor sit amit....'
        ]);
        Film::insert([
            'Judul' => 'Batman',
            'Deskripsi' => 'lorem ipsum dolor sit amit....'
        ]);
        Film::insert([
            'Judul' => 'Iron Man',
            'Deskripsi' => 'lorem ipsum dolor sit amit....'
        ]);
    }
}
