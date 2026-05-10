<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FireStationController;
use App\Http\Controllers\TypeInterventionController;
use App\Http\Controllers\InterventionController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\FirefighterController;

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

/* Add a new TypeIntervention */
Route::post('/TypeIntervention/add', [TypeInterventionController::class, 'add'])->name('typeIntervention.add');

/* Display the edit form for a specific Type Intervention */
Route::get('/TypeIntervention/{id}/edit', [TypeInterventionController::class, 'formModifyTypeIntervention'])->name('typeIntervention.edit');

/* Update a specific Type Intervention */
Route::put('/TypeIntervention/{id}/update', [TypeInterventionController::class, 'update'])->name('typeIntervention.update');

/* Delete a specific Type Intervention */
Route::delete('/TypeIntervention/{id}/delete', [TypeInterventionController::class, 'delete'])->name('typeIntervention.delete');

/* Delete ALL type intervention (clear the table) */
Route::delete('/TypeIntervention/clear', [TypeInterventionController::class, 'clear'])->name('typeIntervention.clear');

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| These routes handle all Intervention CRUD operations.
| Each route points to a specific controller method.
*/

/* Display the index form for a specific Intervention */
Route::get('/Intervention/{id}/index', [InterventionController::class, 'index'])->name('Intervention.index');

/* Display the show form for a specific Intervention */
Route::get('/Intervention/{id}/show', [InterventionController::class, 'show'])->name('Intervention.show');

/* Display the edit form for a specific  Intervention */
Route::get('/Intervention/{id}/edit', [InterventionController::class, 'formModifyIntervention'])->name('Intervention.edit');

/* Update a specific  Intervention */
Route::put('/Intervention/{id}/update', [InterventionController::class, 'update'])->name('Intervention.update');

/* Delete a specific  Intervention */
Route::delete('/Intervention/{id}/delete', [InterventionController::class, 'delete'])->name('Intervention.delete');

/* Delete ALL Intervention (clear the table) */
Route::delete('/Intervention/clear', [InterventionController::class, 'clear'])->name('Intervention.clear');

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| These routes handle all Grade CRUD operations.
| Each route points to a specific controller method.
*/

/* Display list of Grade */
Route::get('/grades', [GradeController::class, 'index'])->name('grade.index');

/* Add a new Grade */
Route::post('/grades/add', [GradeController::class, 'add'])->name('grade.add');

/* Delete a specific grade */
Route::delete('/gradess/{id}/delete', [GradeController::class, 'delete'])->name('grade.delete');

/* Delete ALL fire stations (clear the table) */
Route::delete('/grades/clear', [GradeController::class, 'clear'])->name('grade.clear');

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| These routes handle all firefighter CRUD operations.
| Each route points to a specific controller method.
*/

/* Display list of firefighter */
Route::get('/firefighters', [FirefighterController::class, 'index'])->name('firefighter.index');

/* Add a new Firefighter */
Route::post('/firefighters/add', [FirefighterController::class, 'add'])->name('firefighter.add');
