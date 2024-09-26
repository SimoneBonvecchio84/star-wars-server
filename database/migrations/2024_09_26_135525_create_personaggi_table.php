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
        Schema::create('personaggi', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('specie');
            $table->integer('pianeta');
            $table->integer('fazione');
            $table->integer('forza');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personaggi');
    }
};
