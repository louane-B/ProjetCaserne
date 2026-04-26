<?php

namespace App\Models;

use App\Models\State;
use Illuminate\Database\Eloquent\Model;

class FireStation extends Model
{
    //
    public $timestamps = false;

    protected $table = 'fire_stations';

    protected $fillable = [
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
