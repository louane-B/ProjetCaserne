<?php

namespace App\Http\Controllers;

use App\Models\Firefighter;
use Illuminate\Http\Request;

class FirefighterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Display the list of firefighter
    |---------------------------------------------------------------------------
    | Otherwise, load the main FireStations page.
    */
    public function index()
    {
        // Load all fire stations with their associated state
        $firefighters = Firefighter::with(['grade', 'station'])->get();
        
        // Otherwise, show the FireStations list page
        return view('firefighter', compact('firefighters'));
    }

     /*
    |--------------------------------------------------------------------------
    | Add a new Firefighter
    |--------------------------------------------------------------------------
    | Validates the form, creates a new record, then redirects with a success message.
    */
    public function add(Request $request)
    {
        //validate form inputs
        $request->validate([
            'matricule' => 'required',
            'grade_id' => 'required|exists:grade,id',
            'nom' => 'required',
            'prenom' => 'required',
            'fire_station_id' => 'required|exists:station,id',
        ]);

        //Create the new Type Intervention
        Firefighter::create([
            'matricule'=>$request->matricule,
            'grade_id'=>$request->grade_id,
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'fire_station_id'=>$request->fire_station,
        ]);

        //Redirect with success message
        return redirect('/firefighters')->with('success', 'firefighter successfully added');
    }
}
