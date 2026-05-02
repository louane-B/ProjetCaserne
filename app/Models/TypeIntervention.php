<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class TypeIntervention extends Model
{
     /*
    |--------------------------------------------------------------------------
    | Model Configuration
    |--------------------------------------------------------------------------
    | This model represents the "type_interventions" table.
    | It does not use timestamps and allows mass assignment
    | for the fields listed in $fillable.
    */

    // Disable created_at and updated_at timestamps
    public $timestamps = false;

    // Explicit table name (optional but clear)
    protected $table = 'type_interventions';

    // Fields that can be mass-assigned
    protected $fillable = [
        'NoIntervention',
        'description',
    ];

     /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    | A type intervention can be associated with multiple interventions.
    | This defines a one-to-many relationship.
    */
    public function interventions()
    {
        return $this->hasMany(Intervention::class, 'IdTypeIntervention');
    }

}
