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
    public function create() {
        return view('airports.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $airport=Airport::create($request->toArray());
        $airport->save();
        return redirect('airports');
    }
}
