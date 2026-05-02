<?php

namespace App\Http\Controllers;

use App\Models\FireStation;
use Illuminate\Http\Request;

class InterventionController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Display the list of intervention
    |--------------------------------------------------------------------------
    | If the user is on "/Intervention/{id}/index".
    | Otherwise, load the main interventions page.
    */
    public function index($id)
    {
        // Charger la caserne + ses interventions + le type de chaque intervention
        $caserne = FireStation::with(['interventions.type'])->findOrFail($id);

        return view('intervention.index', compact('caserne'));
    }
}
