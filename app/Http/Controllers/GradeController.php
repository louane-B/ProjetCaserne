<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Display the list of Grade
    |--------------------------------------------------------------------------
    | Otherwise, load the main Grades page.
    */
    public function index()
    {
        // Load all Grade 
        $grades = Grade::all();
        
        // Otherwise, show the FireStations list page
        return view('grade', compact('grades'));
    }

    /*
    |--------------------------------------------------------------------------
    | Add a new grade
    |--------------------------------------------------------------------------
    | Validates the form, creates a new record, then redirects with a success message.
    */
    public function add(Request $request)
    {
        // Validate form inputs
        $request->validate([
            'description' => 'required',
            'symbol' => 'required',
        ]);

        // Create the new grade
        Grade::create([
            'description' => $request->description,
            'symbol' => $request->symbol,
        ]);

        // Redirect with success message
        return redirect('/grade')->with('success', 'Grade successfully added');
    }
}
