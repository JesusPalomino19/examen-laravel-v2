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
        Schema::create('_cuidador', function (Blueprint $table) {
            $table->id('CuidadorID');
            $table->string('nombre');
            $table->integer('edad');
            $table->string('genero');
            $table->string('especialidad');
            $table->text('animales');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_cuidador');
    }
};
