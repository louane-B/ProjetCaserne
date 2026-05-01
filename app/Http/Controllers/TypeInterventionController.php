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
    | If the user is on "/", load the home page (app.blade.php).
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
}
