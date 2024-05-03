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
        Schema::create('media_films', function (Blueprint $table) {
            $table->id();
            $table->foreignid('film_id')->unsigned()->onDelete('cascade');
            $table->boolean('tipeMedia')->default(0);
            $table->string('title')->default('-');
            $table->text('urlMedia')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media_films');
    }
};
