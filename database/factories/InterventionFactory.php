<?php

namespace Database\Factories;

use App\Models\Intervention;
use App\Models\TypeIntervention;
use App\Models\FireStation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Intervention>
 */
class InterventionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Intervention::class;

    public function definition(): array
    {
        return [
            'DateTempsDebut' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'Adresse' => $this->faker->address,
            'Resume' => $this->faker->sentence(12),
            'IdTypeIntervention' => TypeIntervention::inRandomOrder()->first()->id,
            'IdCaserne' => FireStation::inRandomOrder()->first()->id,
        ];
    }
}
