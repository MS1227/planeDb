<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'identifier',
        'is_controlled',
        'num_runways',
    ];

    /**
     * Get string version of controlled status
     *
     * @return string
     */
    public function getControlledAttribute()
    {
        return ($this->is_controlled == 1) ? "Yes" : "No";
    }

    /**
     * Get the flights for a departure airport
     */
    public function departureFlights()
    {
        return $this->belongsTo(Flight::class, 'id', 'departure_airport_id');
    }

    /**
     * Get the flights for a destination airport
     */
    public function destinationFlights()
    {
        return $this->belongsTo(Flight::class, 'id', 'destination_airport_id');
    }
}
