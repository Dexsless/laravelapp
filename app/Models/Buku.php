<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    public function Penulis()
    {
        return $this->belongsTo(Penulis::class);
    }
    public function Genre() {
        return $this->belongsTo(Genre::class);
    }
}
