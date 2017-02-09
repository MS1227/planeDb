<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tail',
        'departure',
        'destination',
        'souls',
        'departed_at',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'departed_at',
    ];

    public function departureAirport()
    {
        return $this->hasOne(Airport::class, 'id', 'departure_airport_id');
    }

    public function destinationAirport()
    {
        return $this->hasOne(Airport::class, 'id', 'destination_airport_id');
    }
}
