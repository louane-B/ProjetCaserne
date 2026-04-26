<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    /*
    |--------------------------------------------------------------------------
    | Model Configuration
    |--------------------------------------------------------------------------
    | This model represents the "states" table.
    | It does not use timestamps and allows mass assignment
    | for the "description" field.
    */

    // Disable created_at and updated_at timestamps
    public $timestamps = false;

    // Explicitly define the table name (optional but clear)
    protected $table = 'states';

    // Fields that can be mass-assigned
    protected $fillable = ['description'];

    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    | A state can be associated with multiple fire stations.
    | This defines a one-to-many relationship.
    */
    public function fireStations()
    {
        return $this->hasMany(FireStation::class);
    }
}
