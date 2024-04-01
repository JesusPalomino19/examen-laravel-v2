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
        Schema::create('_animal_recinto', function (Blueprint $table) {
            $table->id('AnimalRecintoID');
            $table->unsignedBigInteger('recinto_id');
            $table->foreign('recinto_id')->references('RecintoID')->on('recinto');
            $table->unsignedBigInteger('animal_id');
            $table->foreign('animal_id')->references('AnimalID')->on('animal');
            $table->string('descripcion');
            $table->string('fechaHora');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_animal_recinto');
    }
};
