<?php

namespace App\Models;

use App\Models\TypeIntervention;
use App\Models\FireStation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intervention extends Model
{
     /*
    |--------------------------------------------------------------------------
    | Model Configuration
    |--------------------------------------------------------------------------
    | This model represents the "interventions" table.
    | It does not use timestamps and allows mass assignment
    | for the fields listed in $fillable.
    */

    use HasFactory;

    // Disable created_at and updated_at timestamps
    public $timestamps = false;

    // Explicit table name (optional but clear)
    protected $table = 'interventions';

    // Fields that can be mass-assigned
    protected $fillable = [
        'DateTempsDebut',
        'Adresse',
        'Resume',
        'IdTypeIntervention',
        'IdCaserne',
    ];


    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    | A intervention belongs to a single type intervention.
    | This defines a many-to-one relationship.
    */
    public function type()
    {
        return $this->belongTo(TypeIntervention::class, 'IdTypeIntervention');
    }

    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    | A intervention belongs to a single fire station.
    | This defines a many-to-one relationship.
    */
    public function caserne()
    {
        return $this->belongTo(FireStation::class, 'IdCaserne');
    }
}
