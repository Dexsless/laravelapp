<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penulis extends Model
{
    use HasFactory;
    //Kolom(field) mana saja yang boleh di isi
    public $fillable = ['nama_penulis', 'bio'];

    //Kolom(field) mana saja yang boleh di perlihatkan
    public $visible = ['nama_penulis', 'bio'];
    public $timestamps = true;

    public function buku()
    {
        return $this->hasMany(Buku::class, 'id_penulis');
    }
}
