<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TypeVehicleController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Display the list of TypeVehicle
    |---------------------------------------------------------------------------
    | Otherwise, load the main TypeVehicle page.
    */
    public function index()
    {
        // Load all type vehicles with their associated state
        $typeVehicles = TypeVehicle::all();
        
        // Otherwise, show the TypeVehicle list page
        return view('typeVehicle', compact('typeVehicles'));
    }
}
