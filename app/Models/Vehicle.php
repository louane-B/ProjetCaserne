<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
   /*
    |--------------------------------------------------------------------------
    | Model Configuration
    |--------------------------------------------------------------------------
    | This model represents the "Vehicle" table.
    | It does not use timestamps and allows mass assignment
    | for the fields listed in $fillable.
    */

    use HasFactory;

     // Disable created_at and updated_at timestamps
    public $timestamps = false;

    // Explicit table name (optional but clear)
    protected $table = 'vehicles';

    protected $fillable = [
        'NoIdentification',
        'Immatriculation',
        'AnneeMiseEnService',
        'Marque',
        'Modele',
        'type_vehicle_id',
        'fire_station_id',
    ];

    public function type()
    {
        return $this->belongsTo(TypeVehicle::class, 'type_vehicle_id');
    }

    public function caserne()
    {
        return $this->belongsTo(FireStation::class, 'fire_station_id');
    }
}

