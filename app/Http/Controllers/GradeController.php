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
        return redirect('/grades')->with('success', 'Grade successfully added');
    }

    /*
    |--------------------------------------------------------------------------
    | Delete a specific grade
    |--------------------------------------------------------------------------
    */
    public function delete($id)
    {
        // Retrieve and delete the fire station
        $grade = Grade::findOrFail($id);
        $grade->delete();

        return redirect('/grades')->with('success', 'Fire station successfully deleted');
    }

    /*
    |--------------------------------------------------------------------------
    | Delete ALL Intervention (clear the table)
    |--------------------------------------------------------------------------
    */
    public function clear()
    {
        // Remove all  intervention records
        Grade::truncate();

        return redirect('/grades')->with('success', 'All Grade have been deleted');
    }

}
