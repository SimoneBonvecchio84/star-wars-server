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
        Schema::create('astronavi', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('classe');
            $table->string('lunghezza');
            $table->integer('equipaggio');
            $table->integer('passeggeri');
            $table->boolean('velocità_luce');
            $table->integer('personaggio_id')->nullable();
            $table->integer('fazione_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('astronavi');
    }
};
