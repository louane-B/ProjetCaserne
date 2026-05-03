<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\State;

class StateSeeder extends Seeder
{
    public function run(): void
    {
        $states = [
            ['description' => 'Active'],
            ['description' => 'Inactive'],
            ['description' => 'Under Maintenance'],
            ['description' => 'Closed'],
        ];

        foreach ($states as $state) {
            State::create($state);
        }
    }
}