<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FireStation extends Model
{
    //
    public $timestamps = false;

    protected $table = 'fire_stations';

    protected $filliable = [
        'name',
        'adress',
        'city',
        'phone',
        'state_id',
    ];
    
    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
