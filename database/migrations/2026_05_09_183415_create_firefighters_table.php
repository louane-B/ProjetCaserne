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
        Schema::create('firefighters', function (Blueprint $table) {
            $table->id();
            $table->string('matricule');
            $table->foreignId('grade')                           // Foreign key to grades table
                ->constrained('grades')
                ->onDelete('cascade');
            $table->string('nom');
            $table->string('prenom');
            $table->foreignId('IdCaserne')
                ->constraigned('fire_stations')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('firefighters');
    }
};
