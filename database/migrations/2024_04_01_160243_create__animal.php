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
        Schema::create('_animal', function (Blueprint $table) {
            $table->id('AnimalID');
            $table->string('nombre');
            $table->unsignedBigInteger('especie_id');
            $table->foreign('especie_id')->references('EspecieID')->on('especie');
            $table->unsignedBigInteger('cuidador_id');
            $table->foreign('cuidador_id')->references('CuidadorID')->on('cuidador');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_animal');
    }
};
