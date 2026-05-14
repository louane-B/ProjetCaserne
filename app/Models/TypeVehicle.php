<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeVehicle extends Model
{
    /*
    |--------------------------------------------------------------------------
    | Model Configuration
    |--------------------------------------------------------------------------
    | This model represents the "TypeVehicle" table.
    | It does not use timestamps and allows mass assignment
    | for the fields listed in $fillable.
    */

     // Disable created_at and updated_at timestamps
    public $timestamps = false;

    // Explicit table name (optional but clear)
    protected $table = 'type_vehicles';

    // Fields that can be mass-assigned
    protected $fillable = [
        'code',
        'description',
    ];
    
}
