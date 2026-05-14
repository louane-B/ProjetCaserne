<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TypeVehicle;

class TypeVehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vehicles = [
            ['code' => 'FPT', 'description' => 'Fourgon Pompe Tonne'],
            ['code' => 'FPTL', 'description' => 'Fourgon Pompe Tonne Léger'],
            ['code' => 'CCF', 'description' => 'Camion Citerne Feux de Forêts'],
            ['code' => 'CCFM', 'description' => 'Camion Citerne Feux de Forêts Moyen'],
            ['code' => 'VSAV', 'description' => 'Véhicule de Secours et d\'Assistance aux Victimes'],
            ['code' => 'VLM', 'description' => 'Véhicule Léger Médicalisé'],
            ['code' => 'VLCG', 'description' => 'Véhicule de Liaison Chef de Groupe'],
            ['code' => 'PC', 'description' => 'Poste de Commandement Mobile'],
            ['code' => 'VSR', 'description' => 'Véhicule de Secours Routier'],
            ['code' => 'VIRT', 'description' => 'Véhicule d\'Intervention Risques Technologiques'],
            ['code' => 'EPA', 'description' => 'Échelle Pivotante Automatique'],
            ['code' => 'BEA', 'description' => 'Bras Élévateur Articulé'],
            ['code' => 'VIR', 'description' => 'Véhicule d\'Intervention Risques'],
            ['code' => 'VNRBC', 'description' => 'Véhicule Risques Nucléaires, Radiologiques, Biologiques et Chimiques'],
        ];

        foreach ($vehicles as $vehicle) {
            TypeVehicle::create($vehicle);
        }
    }
}
