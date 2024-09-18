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
        Schema::create('musics', function (Blueprint $table) {
            $table->id();
            $table->string('albume')->unique();
            $table->string('singers')->nullable();
            $table->string('soundtrackes');
            $table->enum('style',['rap','pop','rock','dj','dance','trans','jazz']);
            $table->date('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('musics');
    }
};
