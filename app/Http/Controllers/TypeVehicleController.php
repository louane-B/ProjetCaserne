<?php

namespace App\Http\Controllers;

use App\Models\TypeVehicle;
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
            'code' => 'required',
            'description' => 'required',
        ]);

        // Create the new grade
        TypeVehicle::create([
            'code' => $request->code,
            'description' => $request->description,
        ]);

        // Redirect with success message
        return redirect('/typeVehicles')->with('success', 'Grade successfully added');
    }

    /*
    |--------------------------------------------------------------------------
    | Display the edit form for type vehicle
    |--------------------------------------------------------------------------
    */
    public function formModifyTypeVehicle($id)
    {
        // Retrieve the fire station or fail if not found
        $vehicle = TypeVehicle::findOrFail($id);

        return view('typeVehicleModify', compact('vehicle'));
    }

     /*
    |--------------------------------------------------------------------------
    | Update an existing type vehicle
    |--------------------------------------------------------------------------
    */
    public function update($id, Request $request)
    {
        // Validate form inputs
        $request->validate([
            'code' => 'required',
            'description' => 'required',
        ]);

        // Retrieve the type vehicle
        $vehicle = TypeVehicle::findOrFail($id);

        // Update the type Intervention
        $vehicle->update([
            'code' => $request->code,
            'description' => $request->description,
        ]);

        // Redirect with success message
        return redirect('/typeVehicles')->with('success', 'Type Intervention successfully updated');
    }

}
