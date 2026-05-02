<?php

namespace App\Models;

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

    public function type()
    {
        return $this->belongTo(TypeIntervention::class, 'IdTypeIntervention');
    }

    public function caserne()
    {
        return $this->belongTo(FireStation::class, 'IdCaserne');
    }
}
