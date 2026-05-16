<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\TypeVehicle;
use App\Models\FireStation;
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

    /*
    |--------------------------------------------------------------------------
    | Add a new vehicle
    |--------------------------------------------------------------------------
    | Validates the form, creates a new record, then redirects with a success message.
    */
    public function add(Request $request)
    {
        // Validate form inputs
        $request->validate([
            'NoIdentification' => 'required',
            'Immatriculation' => 'required',
            'AnneeMiseEnService' => 'required',
            'Marque' => 'required',
            'Modele' => 'required',
            'type_vehicle_id' => 'required|exists:type_vehicles,id',
            'fire_station_id' => 'required|exists:fire_stations,id',

        ]);

        // Create the new grade
        Vehicle::create([
            'NoIdentification' => $request->NoIdentification,
            'Immatriculation' => $request->Immatriculation,
            'AnneeMiseEnService' => $request->AnneeMiseEnService,
            'Marque' => $request->Marque,
            'Modele' => $request->Modele,
            'type_vehicle_id' => $request->type_vehicle_id,
            'fire_station_id' => $request->fire_station_id,
        ]);

        // Redirect with success message
        return redirect('/vehicles')->with('success', 'Vehicle successfully added');
    }

     /*
    |--------------------------------------------------------------------------
    | Display the edit form for type vehicle
    |--------------------------------------------------------------------------
    */
    public function formModifyVehicle($id)
    {
        // Retrieve the fire station or fail if not found
        $vehicle = Vehicle::findOrFail($id);

        // Charger les types de véhicules
        $types = TypeVehicle::all();

        // Charger les casernes
        $casernes = FireStation::all();

        return view('VehicleModify', compact('vehicle', 'types', 'casernes'));
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
            'NoIdentification' => 'required',
            'Immatriculation' => 'required',
            'AnneeMiseEnService' => 'required',
            'Marque' => 'required',
            'Modele' => 'required',
            'type_vehicle_id' => 'required|exists:type_vehicles,id',
            'fire_station_id' => 'required|exists:fire_stations,id',
        ]);

        // Retrieve the type vehicle
        $vehicle = Vehicle::findOrFail($id);

        // Update the type Intervention
        $vehicle->update([
            'NoIdentification' => $request->NoIdentification,
            'Immatriculation' => $request->Immatriculation,
            'AnneeMiseEnService' => $request->AnneeMiseEnService,
            'Marque' => $request->Marque,
            'Modele' => $request->Modele,
            'type_vehicle_id' => $request->type_vehicle_id,
            'fire_station_id' => $request->fire_station_id,
        ]);

        // Redirect with success message
        return redirect('/vehicles')->with('success', 'Vehicle successfully updated');
    }

    /*
    |--------------------------------------------------------------------------
    | Delete a specific Vehicle
    |--------------------------------------------------------------------------
    */
    public function delete($id)
    {
        // Retrieve and delete the type intervention
        $vehicle = Vehicle::findOrFail($id);
        $vehicle->delete();

        return redirect('/vehicles')->with('success', ' Vehicle successfully deleted');
    }

    /*
    |--------------------------------------------------------------------------
    | Delete ALL Vehicle (clear the table)
    |--------------------------------------------------------------------------
    */
    public function clear()
    {
        // Remove all type intervention records
        Vehicle::query()->delete();

        return redirect('/vehicles')->with('success', 'All vehicle have been deleted');
    }
}
