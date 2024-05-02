<?php

use App\Models\Siswa;
use App\Models\Sekolah;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/siswa', function () {
    // return Siswa::all();
    return view('siswa');
});
Route::get('/sekolah', function () {
    return view('sekolah');
});
Route::get('/album', function () {
    return view('album');
});
Route::get('/film', function () {
    return view('film');
});
