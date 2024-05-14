<?php

namespace Database\Seeders;

use App\Models\Artikel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Artikel::insert([
            'judul' => 'Pengaruh Teknologi Terhadap Pendidikan',
            'foto' => 'https://th.bing.com/th/id/OIP.NzjzcRtp5_0cwDQWFhy-xAAAAA?w=474&h=592&rs=1&pid=ImgDetMain',
            'kategori' => 'Teknologi',
            'konten' => 'Artikel ini membahas dampak teknologi terbaru dalam meningkatkan efektivitas pendidikan, termasuk penggunaan platform pembelajaran online dan aplikasi mobile',
            'penulis' => 'Amanda Tan'
        ]);
        Artikel::insert([
            'judul' => 'Mengenal Konsep Kecerdasan Buatan',
            'foto' => 'https://th.bing.com/th/id/OIP.r4nj9TRA5zezd8laJfNazQHaJc?w=132&h=180&c=7&r=0&o=5&dpr=1.5&pid=1.7',
            'kategori' => 'Teknologi',
            'konten' => 'Artikel ini menjelaskan konsep kecerdasan buatan (AI), perkembangannya, dan aplikasinya dalam berbagai bidang seperti otomasi, pengolahan bahasa alami, dan pengenalan gambar',
            'penulis' => 'Budi Santoso'
        ]);
        Artikel::insert([
            'judul' => 'Manfaat Olahraga Bagi Kesehatan Mental',
            'foto' => 'https://th.bing.com/th/id/OIP.mKuu-srUYaT439WuggVIOwAAAA?rs=1&pid=ImgDetMain',
            'kategori' => 'Kesehatan',
            'konten' => ' Artikel ini membahas pentingnya olahraga untuk kesehatan mental, termasuk mengurangi stres, meningkatkan suasana hati, dan meningkatkan kualitas tidur.',
            'penulis' => 'Andi Cahaya'
        ]);
        Artikel::insert([
            'judul' => 'Tips Membangun Kebiasaan Membaca yang Baik',
            'foto' => 'https://ppid.bengkaliskab.go.id/asset/banner/45069240960305_Manfaat-Membaca-Buku.png',
            'kategori' => 'Pendidikan',
            'konten' => ' Artikel ini memberikan tips praktis bagi pembaca untuk membentuk kebiasaan membaca yang baik, termasuk menetapkan waktu tetap, memilih bahan bacaan yang menarik, dan mencatat kesan-kesan dari bacaan tersebut.',
            'penulis' => 'Maya Dewi'
        ]);
    }
}
