<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FireStationController extends Controller
{
    //
    public function index()
    {
        $fireStations = FireStation::width('state')->get();

        if (request()->routeIs('home'))
        {
            return view('app', compact('fireStations'));
        }

        return view('fireStation', compact('fireStation'));
    }
}
