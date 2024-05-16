<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    public $fillable = ['namaGenre'];
    public $visible = ['namaGenre'];

    public function buku() {
        return $this->hasMany(Buku::class);
    }
}
