<?php

namespace App\Http\Controllers;

use App\Models\FireStation;
use Illuminate\Http\Request;

class FireStationController extends Controller
{
    //
    public function index()
    {
        $fireStations = FireStation::with('state')->get();
        
        if (request()->path() === '/') {
        return view('app', compact('fireStations'));
    }
        return view('fireStation', compact('fireStations'));
    }

    public function add(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'adress' => 'required',
            'city' => 'required',
            'phone' => 'required',
            'state_id' => 'required|exists:states,id',
        ]);

        FireStation::create([
            'name' => $request->name,
            'adress' => $request->adress,
            'city' => $request->city,
            'phone' => $request->phone,
            'state_id' => $request->state_id,
        ]);

        return redirect('/FireStations')->with('success', 'Caserne ajoutée avec succès');
    }
}
