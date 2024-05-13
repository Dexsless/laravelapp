<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    // kolom mana saja yang boleh di isi
    public $fillable = [
        'title','description', 'coverUrl', 'trailerUrl', 'viewer'
    ];
    public $visible = [
        'title','description', 'coverUrl', 'trailerUrl', 'viewer'
    ];
}
