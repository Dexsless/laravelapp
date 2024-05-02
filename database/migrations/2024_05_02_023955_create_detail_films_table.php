<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detail_films', function (Blueprint $table) {
            $table->id();
            $table->foreignId('film_id')->unique()->constrained()->onDelete('cascade');
            $table->string('codeFilm')->unique();
            $table->string('urlImdb')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_films');
    }
};
