<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FireStation;

class FireStationSeeder extends Seeder
{
    public function run(): void 
    {
        FireStation::factory()->count(10)->create();
    }
}