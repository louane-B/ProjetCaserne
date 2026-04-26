<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FireStationController;

Route::get('/', [FireStationController::class, 'index'])->name('home');
Route::get('/FireStations', [FireStationController::class, 'index'])->name('firestations.index');

Route::post('/FireStation/add', [FireStationController::class, 'add'])->name('firestations.add');

Route::get('/FireStations/{id}/edit', [FireStationController::class, 'formModifyFireStation'])->name('firestations.edit');
Route::put('/FireStations/{id}/update', [FireStationController::class, 'update'])->name('firestations.update');

Route::delete('/FireStations/{id}/delete', [FireStationController::class, 'delete'])->name('firestations.delete');

Route::delete('/FireStations/clear', [FireStationController::class, 'clear'])->name('firestations.clear');