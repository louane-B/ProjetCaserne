<?php

namespace App\Http\Controllers;

use App\Models\TypeIntervention;
use Illuminate\Http\Request;

class TypeInterventionController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Display the list of fire stations
    |--------------------------------------------------------------------------
    | If the user is on "/TypeInterventions".
    | Otherwise, load the main TypeIntervention page.
    */
    public function index()
    {
        // Load all Type intervention
        $typeInterventions = TypeIntervention::all();
        
        // Otherwise, show the Type intervention list page
        return view('typeIntervention', compact('typeInterventions'));
    }

     /*
    |--------------------------------------------------------------------------
    | Add a new type intervention
    |--------------------------------------------------------------------------
    | Validates the form, creates a new record, then redirects with a success message.
    */
    public function add(Request $request)
    {
        //validate form inputs
        $request->validate([
            'NoIntervention' => 'required',
            'description' => 'required',
        ]);

        //Create the new Type Intervention
        TypeIntervention::create([
            'NoIntervention'=>$request->NoIntervention,
            'description'=>$request->description,
        ]);

        //Redirect with success message
        return redirect('/TypeInterventions')->with('success', 'Type Intervention successfully added');
    }

    /*
    |--------------------------------------------------------------------------
    | Display the edit form for type intervention
    |--------------------------------------------------------------------------
    */
    public function formModifyTypeIntervention($id)
    {
        // Retrieve the fire station or fail if not found
        $intervention = TypeIntervention::findOrFail($id);

        return view('typeInterventionModify', compact('intervention'));
    }

     /*
    |--------------------------------------------------------------------------
    | Update an existing type Intervention
    |--------------------------------------------------------------------------
    */
    public function update($id, Request $request)
    {
        // Validate form inputs
        $request->validate([
            'NoIntervention' => 'required',
            'description' => 'required',
        ]);

        // Retrieve the fire station
        $intervention = TypeIntervention::findOrFail($id);

        // Update the type Intervention
        $intervention->update([
            'NoIntervention' => $request->NoIntervention,
            'description' => $request->description,
        ]);

        // Redirect with success message
        return redirect('/TypeInterventions')->with('success', 'Type Intervention successfully updated');
    }

     /*
    |--------------------------------------------------------------------------
    | Delete a specific Type Intervention
    |--------------------------------------------------------------------------
    */
    public function delete($id)
    {
        // Retrieve and delete the type intervention
        $intervention = TypeIntervention::findOrFail($id);
        $intervention->delete();

        return redirect('/TypeInterventions')->with('success', 'Type Intervention successfully deleted');
    }

    /*
    |--------------------------------------------------------------------------
    | Delete ALL type Intervention (clear the table)
    |--------------------------------------------------------------------------
    */
    public function clear()
    {
        // Remove all type intervention records
        TypeIntervention::truncate();

        return redirect('/TypeInterventions')->with('success', 'All fire stations have been deleted');
    }
}
