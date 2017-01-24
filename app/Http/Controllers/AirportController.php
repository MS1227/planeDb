<?php

namespace App\Http\Controllers;
use App\Airport;
use Illuminate\Http\Request;

class AirportController extends Controller
{
    public function index() {
        $airports=Airport::all();
        return(view('airports.index')->with('airports',$airports));
    }
}
