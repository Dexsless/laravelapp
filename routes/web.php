<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\PenulisController;
use App\Models\Film;
use App\Models\Artikel;
use App\Models\Siswa;
use App\Models\Sekolah;
use Illuminate\Database\Query\IndexHint;
use Illuminate\Support\Facades\Auth;
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
Route::get('/movie', [MovieController::class, 'getMovie'])->middleware('auth');
Route::get('/movie/{id}', [MovieController::class, 'getMovieById']);
Route::get('/artikel', [ArtikelController::class, 'getArtikel']);
Route::get('/artikel/id/{id}', [ArtikelController::class, 'getArtikelById']);
Route::get('/artikel/kategori/{kategori}', [ArtikelController::class, 'getArtikelByKategori']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// route crud
Route::resource('penulis', PenulisController::class);
Route::resource('genre', GenreController::class);
Route::get('nav', function() {
    return view('layout/navs');
});
Route::resource('buku', BukuController::class);
