<?php

namespace Database\Factories;

use App\Models\Grade;
use App\Models\FireStation;
use App\Models\Firefighter;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Firefighter>
 */
class FirefighterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'matricule' => $this->faker->unique()->numerify('FF-###'),
            'nom' => $this->faker->lastName(),
            'prenom' => $this->faker->firstName(),

            // Relations
            'grade_id' => Grade::inRandomOrder()->first()->id,
            'fire_station_id' => FireStation::inRandomOrder()->first()->id,
        ];
    }
}
