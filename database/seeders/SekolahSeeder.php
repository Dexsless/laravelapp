<?php

namespace Database\Seeders;

use App\Models\Sekolah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sekolah::insert([
            'namaSekolah' => 'SMK Amal Bakti Bandung',
            'alamat' => 'Jl. AH Nasution Gg Swadaya No. 34, Cipadung, Cibiru, Kota Bandung 40614',
            'email' => 'info@sekolahamalbaktiofficial.sch.id',
            'telepon' => '022-7816162',
            'status' => 1
        ]);
        Sekolah::insert([
            'namaSekolah' => 'SMK Bakti Mandiri Bandung',
            'alamat' => 'Jl. Ciumbuleuit Atas No.48, Ciumbuleuit, Cidadap, Kota Bandung 40142',
            'email' => 'baktimandirismk@yahoo.co.id',
            'telepon' => '022-64401043',
            'status' => 1
        ]);
        Sekolah::insert([
            'namaSekolah' => 'SMK Bhakti Kencana Bandung',
            'alamat' => 'Jl. Sindangsari No. 100 Ujung Berung, Cipadung Kulon, Panyileukan, Kota Bandung 40611',
            'email' => 'admin@smkbkbdg.sch.id',
            'telepon' => '022-70731914',
            'status' => 1
        ]);
        Sekolah::insert([
            'namaSekolah' => 'SMK Bina Sarana Cendekia Bandung',
            'alamat' => 'Jl. PPH. Mustofa No.25, Neglasari, Cibeunying Kaler, Kota Bandung 40124',
            'email' => 'smkbinasaranacendekia@gmail.com',
            'telepon' => '6281322555401',
            'status' => 1
        ]);
        Sekolah::insert([
            'namaSekolah' => 'SMK BPI Bandung',
            'alamat' => 'Jl. Burangrang No.8, Lengkong, Kota Bandung 40262',
            'email' => 'smkbpikotabandung@gmail.com',
            'telepon' => '022-7301739',
            'status' => 1
        ]);
        Sekolah::insert([
            'namaSekolah' => 'SMK BPP Bandung',
            'alamat' => 'Jl. Van Deventer No.14 Kebon Pisang, Sumur Bandung, Kota Bandung 40112',
            'email' => 'smkbppofficial@gmail.com',
            'telepon' => '022-4201674',
            'status' => 1
        ]);
        Sekolah::insert([
            'namaSekolah' => 'SMK Budaya Bangsa Bandung',
            'alamat' => 'Jl. Citarip Raya Barat No.16, Kopo, Bojongloa Kaler, Kota Bandung 40233',
            'email' => 'smkbudayabangsa@gmail.com',
            'telepon' => '022-6029414',
            'status' => 1
        ]);
        Sekolah::insert([
            'namaSekolah' => 'SMK Budhi Cendekia Bandung',
            'alamat' => 'Jl. Raya Cilember Gg. Buni Sugih, Sukaraja, Cicendo, Kota Bandung 40175',
            'email' => 'budhicendekia@gmail.com1',
            'telepon' => '022-61616386',
            'status' => 1
        ]);
        Sekolah::insert([
            'namaSekolah' => 'SMK Cipta Skill Bandung',
            'alamat' => 'Jl. Cikruta Baru Raya No.28, Negla Sari, Cibeunying Kaler, Kota Bandung 40124',
            'email' => 'smkciptaskill@ymail.com1',
            'telepon' => '022-71177364',
            'status' => 1
        ]);
        Sekolah::insert([
            'namaSekolah' => 'SMK Dhyana Sakti Bandung',
            'alamat' => 'Jl. Ahmad Yani 107 A, Kebon Pisang, Sumur Bandung, Kota Bandung 40112',
            'email' => 'smkdhyanasakti@gmail.com1',
            'telepon' => '022-4261984',
            'status' => 1
        ]);
    }
}
