<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * This method creates the "fire_stations" table.
     * It includes:
     *  - an auto-incrementing ID
     *  - basic information about the fire station
     *  - a foreign key referencing the "states" table
     *  - timestamps (created_at, updated_at)
     */
    public function up(): void
    {
        Schema::create('fire_stations', function (Blueprint $table) {
            $table->id();                                           // Primary key
            $table->string('name');                                 // Fire station name
            $table->string('adress');                               // Address (typo kept to match your model)
            $table->string('city');                                 // City
            $table->string('phone');                                // Phone number
            $table->foreignId('state_id')                           // Foreign key to states table
                ->constrained();                                    // Automatically references "id" on "states"
            $table->timestamps();                                   // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * This method deletes the "fire_stations" table
     * when the migration is rolled back.
     */
    public function down(): void
    {
        Schema::dropIfExists('fire_stations');              // Safely remove the table if it exists
    }
};
