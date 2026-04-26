<?php

namespace App\Models;

use App\Models\State;
use Illuminate\Database\Eloquent\Model;

class FireStation extends Model
{
    /*
    |--------------------------------------------------------------------------
    | Model Configuration
    |--------------------------------------------------------------------------
    | This model represents the "fire_stations" table.
    | It does not use timestamps and allows mass assignment
    | for the fields listed in $fillable.
    */

    // Disable created_at and updated_at timestamps
    public $timestamps = false;

    // Explicit table name (optional but clear)
    protected $table = 'fire_stations';

    // Fields that can be mass-assigned
    protected $fillable = [
        'name',
        'adress',
        'city',
        'phone',
        'state_id',
    ];
    
    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    | A fire station belongs to a single state.
    | This defines a many-to-one relationship.
    */
    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
