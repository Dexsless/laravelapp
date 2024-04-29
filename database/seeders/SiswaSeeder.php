<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Siswa::insert([
            'nama' => 'Dani Firmansah',
            'kelas' => 'XI RPL 2',
            'jenisKelamin' => 1,
            'alamat' => 'Tarate 5'
        ]);
        Siswa::insert([
            'nama' => 'Ryan Gosling',
            'kelas' => 'XI RPL 3',
            'jenisKelamin' => 1,
            'alamat' => 'Jl. Cibay'
        ]);
        Siswa::insert([
            'nama' => 'Fajar SateBoi',
            'kelas' => 'XI RPL 1',
            'jenisKelamin' => 1,
            'alamat' => 'Jl. Madura'
        ]);
    }
}
