<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TypeIntervention;

class TypeInterventionSeeder extends Seeder
{
    public function run(): void
    {
        $types = [
            ['NoIntervention' => '51', 'description' => 'Urgence Aéronef'],
            ['NoIntervention' => '52', 'description' => 'Alarmes'],
            ['NoIntervention' => '53', 'description' => 'Assistance au citoyen / Appels de Service'],
            ['NoIntervention' => '54', 'description' => 'Espace Clos / Effondrement de Structure / Batiment'],
            ['NoIntervention' => '55', 'description' => 'Risque Electrique'],
            ['NoIntervention' => '56', 'description' => 'Sauvetage D\'ascenseur / Escalier Roulant'],
            ['NoIntervention' => '57', 'description' => 'Explosion'],
            ['NoIntervention' => '58', 'description' => 'Désincarcération / Personne Coincée (Machinerie, Véhicule, Pas AVM)'],
            ['NoIntervention' => '59', 'description' => 'Déversement / Fuite / Odeur de Carburant'],
            ['NoIntervention' => '60', 'description' => 'Fuite de Gaz / Odeur de Gaz (Gaz Naturel et PL)'],
            ['NoIntervention' => '61', 'description' => 'Produits Dangereux'],
            ['NoIntervention' => '62', 'description' => 'Sauvetage en Hauteur (Au-Dessus ou En Dessous du Niveau du Sol)'],
            ['NoIntervention' => '63', 'description' => 'Foudre (Investigation)'],
            ['NoIntervention' => '64', 'description' => 'Incendie Maritime / de Bateau'],
            ['NoIntervention' => '65', 'description' => 'Aide Mutuelle / Assistance Autre Service'],
            ['NoIntervention' => '66', 'description' => 'Odeaur (Etrange / Inconnue)'],
            ['NoIntervention' => '67', 'description' => 'Incendie Extérieur'],
            ['NoIntervention' => '68', 'description' => 'Investigation de Fumée (Extérieur)'],
            ['NoIntervention' => '69', 'description' => 'Incendie de Structure / Batiment'],
            ['NoIntervention' => '70', 'description' => 'Collision / Déraillement de Train / Métro'],
            ['NoIntervention' => '71', 'description' => 'Incendie de Véhicule'],
            ['NoIntervention' => '72', 'description' => 'Sauvetage Nautique / Véhicule qui Coule (Immersion) / Véhicule dans un Courant d\'Eau'],
            ['NoIntervention' => '73', 'description' => 'Embarcation en Détresse / Collision'],
            ['NoIntervention' => '74', 'description' => 'Colis Suspect (Lettre, Object, Substance) / Explosifs'],
            ['NoIntervention' => '75', 'description' => 'Incendie de Train'],
            ['NoIntervention' => '76', 'description' => 'Alerte à la Bombe'],
            ['NoIntervention' => '77', 'description' => 'Collision de Véhicule Moteur'],
        ];

        foreach ($types as $type) {
            TypeIntervention::create($type);
        }
    }
}