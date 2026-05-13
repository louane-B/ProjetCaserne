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

            $table->foreignId('grade_id')->constrained('grades')->onDelete('cascade');      // Foreign key to grades table

            $table->string('nom');
            $table->string('prenom');

            $table->foreignId('fire_station_id')->constrained('fire_stations')->onDelete('cascade');   // Foreign key to fireStations table
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
