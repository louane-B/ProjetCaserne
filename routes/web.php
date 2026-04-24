<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FireStationController;

Route::get('/', [FireStationController::class, 'index'])->name('home');
Route::get('/FireStations', [FireStationController::class, 'index'])->name('firestations.index');
