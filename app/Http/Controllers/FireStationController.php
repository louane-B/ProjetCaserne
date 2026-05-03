<?php

namespace App\Http\Controllers;

use App\Models\FireStation;
use App\Models\State;
use Illuminate\Http\Request;

class FireStationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Display the list of fire stations
    |--------------------------------------------------------------------------
    | If the user is on "/", load the home page (app.blade.php).
    | Otherwise, load the main FireStations page.
    */
    public function index()
    {
        // Load all fire stations with their associated state
        $fireStations = FireStation::with('state')->get();
        
        // If the route is "/", show the home page
        if (request()->path() === '/') {
        return view('app', compact('fireStations'));
        }
        // Otherwise, show the FireStations list page
        return view('fireStation', compact('fireStations'));
    }

    /*
    |--------------------------------------------------------------------------
    | Add a new fire station
    |--------------------------------------------------------------------------
    | Validates the form, creates a new record, then redirects with a success message.
    */
    public function add(Request $request)
    {
        // Validate form inputs
        $request->validate([
            'name' => 'required',
            'adress' => 'required',
            'city' => 'required',
            'phone' => 'required',
            'state_id' => 'required|exists:states,id',
        ]);

        // Create the new fire station
        FireStation::create([
            'name' => $request->name,
            'adress' => $request->adress,
            'city' => $request->city,
            'phone' => $request->phone,
            'state_id' => $request->state_id,
        ]);

        // Redirect with success message
        return redirect('/FireStations')->with('success', 'Fire station successfully added');
    }

    /*
    |--------------------------------------------------------------------------
    | Display the edit form for a fire station
    |--------------------------------------------------------------------------
    */
    public function formModifyFireStation($id)
    {
        // Retrieve the fire station or fail if not found
        $station = FireStation::findOrFail($id);
        // Load all states for the dropdown
        $states = State::all();

        return view('fireStationModify', compact('station', 'states'));
    }

    /*
    |--------------------------------------------------------------------------
    | Update an existing fire station
    |--------------------------------------------------------------------------
    */
    public function update($id, Request $request)
    {
        // Validate form inputs
        $request->validate([
            'name' => 'required',
            'adress' => 'required',
            'city' => 'required',
            'phone' => 'required',
            'state_id' => 'required|exists:states,id',
        ]);

        // Retrieve the fire station
        $station = FireStation::findOrFail($id);

        // Update the fire station
        $station->update([
            'name' => $request->name,
            'adress' => $request->adress,
            'city' => $request->city,
            'phone' => $request->phone,
            'state_id' => $request->state_id,
        ]);

        // Redirect with success message
        return redirect('/FireStations')->with('success', 'Fire station successfully updated');
    }

    /*
    |--------------------------------------------------------------------------
    | Delete a specific fire station
    |--------------------------------------------------------------------------
    */
    public function delete($id)
    {
        // Retrieve and delete the fire station
        $station = FireStation::findOrFail($id);
        $station->delete();

        return redirect('/FireStations')->with('success', 'Fire station successfully deleted');
    }

    /*
    |--------------------------------------------------------------------------
    | Delete ALL fire stations (clear the table)
    |--------------------------------------------------------------------------
    */
    public function clear()
    {
        // Remove all fire station records
        FireStation::truncate();

        return redirect('/FireStations')->with('success', 'All fire stations have been deleted');
    }
}
