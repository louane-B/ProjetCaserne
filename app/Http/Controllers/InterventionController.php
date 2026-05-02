<?php

namespace App\Http\Controllers;

use App\Models\FireStation;
use App\Models\Intervention;
use App\Models\TypeIntervention;
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

        return view('intervention', compact('caserne'));
    }

    /*
    |--------------------------------------------------------------------------
    | Display the intervention
    |--------------------------------------------------------------------------
    | If the user is on "/Intervention/{id}/show".
    | Otherwise, load the main interventions page.
    */
    public function show($id)
    {
        $intervention = Intervention::with(['type', 'caserne'])->findOrFail($id);

        return view('interventionShow', compact('intervention'));
    }

    /*
    |--------------------------------------------------------------------------
    | Display the edit form for a Intervention
    |--------------------------------------------------------------------------
    */

    public function formModifyIntervention($id)
    {
        $intervention = Intervention::with(['type', 'caserne'])->findOrFail($id);

        // To display a drop-down list of types
        $types = TypeIntervention::all();

        return view('interventionModify', compact('intervention', 'types'));
    }


     /*
    |--------------------------------------------------------------------------
    | Update an existing Intervention
    |--------------------------------------------------------------------------
    */

    
}
