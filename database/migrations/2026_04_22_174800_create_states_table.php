<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * This method creates the "states" table.
     * It contains:
     *  - an auto‑incrementing ID
     *  - a description field
     *  - timestamps (created_at, updated_at)
     */
    public function up(): void
    {
        Schema::create('states', function (Blueprint $table) {
            $table->id();                       // Primary key
            $table->string('description');      // State description (ex: Active, Inactive)
            $table->timestamps();               // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * This method deletes the "states" table
     * if the migration is rolled back.
     */
    public function down(): void
    {
        Schema::dropIfExists('states');
    }
};
