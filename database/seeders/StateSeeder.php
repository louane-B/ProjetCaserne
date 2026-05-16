<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\State;

class StateSeeder extends Seeder
{
    public function run(): void
    {
        $states = [
            ['description' => 'Colombie-Britannique'],
            ['description' => 'Alberta'],
            ['description' => 'Saskatchewan'],
            ['description' => 'Manitoba'],
            ['description' => 'Ontario'],
            ['description' => 'Quebec'],
            ['description' => 'Terre-Neuve-et-Labrador'],
            ['description' => 'Nouveau-Brunswick'],
            ['description' => 'Île-du-Prince-Édouard'],
            ['description' => 'Nouvelle-Écosse'],
        ];

        foreach ($states as $state) {
            State::create($state);
        }
    }
}