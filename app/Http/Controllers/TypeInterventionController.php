<?php

namespace App\Http\Controllers;

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
        $typeIntervention = TypeIntervention::all();
        
        // Otherwise, show the Type intervention list page
        return view('typeIntervention', compact('typeIntervention'));
    }
}
