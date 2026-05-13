<?php

namespace Database\Seeders;

use App\Models\Grade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $grades = [
            ['description' => 'Directeur', 'symbol' => '&#9937;&#9937;&#9937;'],
            ['description' => 'Directeur adjoint', 'symbol' => '&#9937;&#9937;' ],
            ['description' => 'Capitaine', 'symbol' => '&#11088;&#11088;'],
            ['description' => 'Lieutenant', 'symbol' => '&#9876;&#9876;'],
            ['description' => 'Lieutenant substitut','symbol' => '&#9876;'],
            ['description' => 'Pompier', 'symbol' => '&#128658;'],
            ['description' => 'Pompier recrue', 'symbol' => '&#128680;'],
        ];

        foreach ($grades as $grade)
        {
            Grade::create($grade);
        }
    }
}
