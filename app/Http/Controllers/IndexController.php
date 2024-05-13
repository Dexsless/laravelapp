<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function introduce(){
        $data = [
            'nama' => 'Dani Firmansah',
            'alamat' => 'Tarate 5',
            'agama' => 'Islam',
            'jk' => 'Laki-laki',
            'hoby' => ['Membaca', 'Menyanyi', 'Mengaji']
        ];
        return view('latihan/perkenalan', compact('data'));
    }
}
