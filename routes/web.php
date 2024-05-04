<?php

use App\Models\Film;
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
Route::get('/film/{id}', function (int $id) {
    $film = Film::findOrFail($id);
    return view('detailFilm', ['film' => $film]);
});
Route::get('/layout', function () {
    return view('layout/layout');
    });
