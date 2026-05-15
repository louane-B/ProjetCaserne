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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('NoIdentification')->unique();
            $table->string('Immatriculation')->unique();
            $table->year('AnneeMiseEnService');
            $table->string('Marque');
            $table->string('Modele');

            // Foreign keys
            $table->foreignId('type_vehicle_id')->constrained('type_vehicles')->onDelete('cascade');
            $table->foreignId('fire_station_id')->constrained('fire_stations')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
