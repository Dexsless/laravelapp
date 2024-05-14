<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MovieController;
use App\Models\Film;
use App\Models\Artikel;
use App\Models\Siswa;
use App\Models\Sekolah;
use Illuminate\Database\Query\IndexHint;
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
Route::get('/perkenalan', [IndexController::class, 'introduce']);
Route::get('/hewan', [IndexController::class, 'animals']);
Route::get('/movie', [MovieController::class, 'getMovie']);
Route::get('/movie/{id}', [MovieController::class, 'getMovieById']);
Route::get('/artikel', [ArtikelController::class, 'getArtikel']);
Route::get('/artikel/id/{id}', [ArtikelController::class, 'getArtikelById']);
Route::get('/artikel/kategori/{kategori}', [ArtikelController::class, 'getArtikelByKategori']);
