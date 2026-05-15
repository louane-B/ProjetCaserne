<?php

namespace Database\Factories;

use App\Models\Vehicle;
use App\Models\TypeVehicle;
use App\Models\FireStation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Vehicle>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Vehicle::class;

    public function definition(): array
    {
        return [
            'NoIdentification' => strtoupper($this->faker->bothify('VEH-###')),  /* The strtoupper() function is used to convert a string to uppercase.*/
            'Immatriculation' => strtoupper($this->faker->bothify('ABC-###')),
            'AnneeMiseEnService' => $this->faker->year(),
            'Marque' => $this->faker->randomElement(['Renault', 'Mercedes', 'Iveco', 'MAN']),
            'Modele' => $this->faker->word(),

            'type_vehicle_id' => TypeVehicle::inRandomOrder()->first()->id,
            'fire_station_id' => FireStation::inRandomOrder()->first()->id,
        ];
    }
}
