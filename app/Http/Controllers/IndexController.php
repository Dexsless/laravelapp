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
    public function animals(){
        $animal = [
            'kucing', 'anjing', 'kelinci', 'sapi', 'kambing'
        ];
        return view('latihan/animals', compact('animal'));
    }
}
