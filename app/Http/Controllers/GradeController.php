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
}
