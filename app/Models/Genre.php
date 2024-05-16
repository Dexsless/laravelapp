<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    //Kolom(field) mana saja yang boleh di isi
    public $fillable = ['nama_genre', 'judul'];

    //Kolom(field) mana saja yang boleh di perlihatkan
    public $visible = ['nama_genre', 'judul'];
    public $timestamps = true;

    public function buku()
    {
        return $this->hasMany(Buku::class, 'id_genre');
    }
}
