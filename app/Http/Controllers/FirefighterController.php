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

}
