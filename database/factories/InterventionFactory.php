<?php

namespace Database\Factories;

use App\Models\Intervention;
use App\Models\TypeIntervention;
use App\Models\FireStation;
use App\Models\Firefighter;
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
        $station = FireStation::inRandomOrder()->first();

        $captain = Firefighter::where('grade_id', 3)
                            ->where('fire_station_id', $station->id)
                            ->inRandomOrder()
                            ->first();
        
        if(!$captain) {
            $captain = Firefighter::factory()->create([
                'grade_id' => 3,
                'fire_station_id' => $station->id,
            ]);
        }

        return [
            'DateTempsDebut' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'Adresse' => $this->faker->address,
            'Resume' => $this->faker->sentence(12),
            'type_intervention_id' => TypeIntervention::inRandomOrder()->first()->id,

            'fire_station_id' => $station->id,
            'captain_id' => $captain->id,
        ];
    }
}
