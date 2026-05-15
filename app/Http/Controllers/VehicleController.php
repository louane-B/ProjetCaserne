<?php

namespace App\Http\Controllers;

use App\Models\TypeVehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Display the list of Vehicle
    |---------------------------------------------------------------------------
    | Otherwise, load the main TypeVehicle page.
    */
    public function index()
    {
        // Load all type vehicles with their associated state
        $Vehicles = Vehicle::with(['type', 'caserne'])->get();
        
        // Otherwise, show the TypeVehicle list page
        return view('vehicle', compact('Vehicles'));
    }
}
