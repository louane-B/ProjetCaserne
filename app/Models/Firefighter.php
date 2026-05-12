<?php

namespace App\Models;

use App\Models\Grade;
use App\Models\FireStation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Firefighter extends Model
{
    /*
    |--------------------------------------------------------------------------
    | Model Configuration
    |--------------------------------------------------------------------------
    | This model represents the "firefighters" table.
    | It does not use timestamps and allows mass assignment
    | for the fields listed in $fillable.
    */

    use HasFactory;

     // Disable created_at and updated_at timestamps
    public $timestamps = false;

    // Explicit table name (optional but clear)
    protected $table = 'firefighters';

    // Fields that can be mass-assigned
    protected $fillable = [
        'matricule',
        'grade_id',
        'nom',
        'prenom',
        'fire_station_id',
    ];
    
    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    | A fire station belongs to a single grade.
    | This defines a many-to-one relationship.
    */
    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    | A fire station belongs to a single station.
    | This defines a many-to-one relationship.
    */
    public function station()
    {
        return $this->belongsTo(FireStation::class, 'fire_station_id');
    }

    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    | A Firefighter can be associated with multiple Intervention .
    | This defines a one-to-many relationship.
    */
    public function interventionsAsCaptain()
    {
        return $this->hasMany(Intervention::class, 'captain_id');
    }
}
