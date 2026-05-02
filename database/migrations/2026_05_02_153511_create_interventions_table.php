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
        Schema::create('interventions', function (Blueprint $table) {
            $table->id();
            $table->dateTime('DateTempsDebut');
            $table->string('Adresse');
            $table->text('Resume')->nullable();

            // Foreign keys
            $table->unsignedBigInteger('IdTypeIntervention');
            $table->unsignedBigInteger('IdCaserne');

            $table->foreign('IdTypeIntervention')->references('id')->on('type_interventions')->onDelete('cascade');
            $table->foreign('IdCaserne')->references('id')->on('fire_stations')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interventions');
    }
};
