<?php

namespace App\Models;

use App\Models\Firefighter;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    /*
    |--------------------------------------------------------------------------
    | Model Configuration
    |--------------------------------------------------------------------------
    | This model represents the "grades" table.
    | It does not use timestamps and allows mass assignment
    | for the fields listed in $fillable.
    */

    // Disable created_at and updated_at timestamps
    public $timestamps = false;

    // Explicit table name (optional but clear)
    protected $table = 'grades';

    // Fields that can be mass-assigned
    protected $fillable = [
        'description',
        'symbol',
    ];

    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    | A grade can be associated with multiple firefighter.
    | This defines a one-to-many relationship.
    */
    public function firefighters()
    {
        return $this->hasMany(Firefighter::class,'grade_id');
    }
}
