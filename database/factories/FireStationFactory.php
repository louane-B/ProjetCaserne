<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\State;

class FireStationFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->company . 'Fire Station',
            'adress' => $this->faker->streetAddress,
            'city' => $this->faker->city,
            'phone' => $this->faker->phoneNumber,
            'state_id' => State::inRandomOrder()->first()->id,
        ];
    }
}