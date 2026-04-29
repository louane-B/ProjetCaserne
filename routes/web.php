<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FireStationController;
use App\Http\Controllers\TypeInterventionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| These routes handle all Fire Station CRUD operations.
| Each route points to a specific controller method.
*/

/* Home page (also displays the list of fire stations) */
Route::get('/', [FireStationController::class, 'index'])->name('home');
/* Display list of fire stations */
Route::get('/FireStations', [FireStationController::class, 'index'])->name('firestations.index');

/* Add a new fire station */
Route::post('/FireStation/add', [FireStationController::class, 'add'])->name('firestations.add');

/* Display the edit form for a specific fire station */
Route::get('/FireStations/{id}/edit', [FireStationController::class, 'formModifyFireStation'])->name('firestations.edit');
/* Update a specific fire station */
Route::put('/FireStations/{id}/update', [FireStationController::class, 'update'])->name('firestations.update');

/* Delete a specific fire station */
Route::delete('/FireStations/{id}/delete', [FireStationController::class, 'delete'])->name('firestations.delete');

/* Delete ALL fire stations (clear the table) */
Route::delete('/FireStations/clear', [FireStationController::class, 'clear'])->name('firestations.clear');

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| These routes handle all Type Intervention CRUD operations.
| Each route points to a specific controller method.
*/

/* Display list of type interventions */
Route::get('/TypeInterventions', [TypeInterventionController::class, 'index'])->name('typeIntervention.index');
