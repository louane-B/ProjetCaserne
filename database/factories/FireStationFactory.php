<?php

namespace Database\Factories;

use App\Models\FireStation;
use App\Models\State;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<FireStation>
 */
class FireStationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = FireStation::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->company . ' Fire Station',
            'adress' => $this->faker->streetAddress,
            'city' => $this->faker->city,
            'phone' => $this->faker->phoneNumber,
            'state_id' => State::inRandomOrder()->first()->id,
        ];
    }
}
