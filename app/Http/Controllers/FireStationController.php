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
}
