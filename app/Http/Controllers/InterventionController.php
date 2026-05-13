<?php

namespace App\Http\Controllers;

use App\Models\FireStation;
use App\Models\Intervention;
use App\Models\TypeIntervention;
use App\Models\Firefighter;
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
        $intervention = Intervention::with(['type', 'caserne', 'captain'])->findOrFail($id);

        // To display a drop-down list of types
        $types = TypeIntervention::all();

        $captains = Firefighter::where('grade_id', 3)
                            ->where('fire_station_id', $intervention->fire_station_id)
                            ->get();

        return view('interventionModify', compact('intervention', 'types', 'captains'));
    }


     /*
    |--------------------------------------------------------------------------
    | Update an existing Intervention
    |--------------------------------------------------------------------------
    */

    public function update(Request $request, $id)
    {
        // Validate form inputs
        $request->validate([
            'DateTempsDebut' => 'required',
            'Adresse' => 'required',
            'Resume' => 'required',
            'type_intervention_id' => 'required|exists:type_interventions,id',
            'captain_id' => 'required|exists:firefighters,id',
        ]);

        // Retrieve the Intervation
        $intervention = Intervention::findOrFail($id);

        // Update the intervention
        $intervention->update([
            'DateTempsDebut' => $request->DateTempsDebut,
            'Adresse' => $request->Adresse,
            'Resume' => $request->Resume,
            'type_intervention_id' => $request->type_intervention_id,
            'captain_id' => $request->captain_id,
        ]);

        // Redirect with success message
        return redirect()->route('Intervention.index', $intervention->fire_station_id)->with('success', 'Intervention updated successfully.');
    }

    /*
    |--------------------------------------------------------------------------
    | Delete a specific  Intervention
    |--------------------------------------------------------------------------
    */
    public function delete($id)
    {
        // Retrieve and delete the type intervention
        $intervention = Intervention::findOrFail($id);
        $intervention->delete();

        return redirect()->route('Intervention.index', $intervention->fire_station_id)->with('success', 'Intervention successfully deleted');
    }

    /*
    |--------------------------------------------------------------------------
    | Delete ALL Intervention (clear the table)
    |--------------------------------------------------------------------------
    */
    public function clear()
    {
        // Remove all  intervention records
        Intervention::truncate();

        return redirect('/FireStations')->with('success', 'All Intervention have been deleted');
    }
}
