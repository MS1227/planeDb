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
    public function store(Request $request) {

        $this->validate($request, [

            'name' => 'required | unique:airports',
            'identifier' => 'required | unique:airports',
            'num_runways' =>'required',
        ]);
        $airport=Airport::create($request->toArray());
        $airport->save();
        return redirect('airports');
    }
    /**
     * Display the specified resource.
     *
     * @param  Airport $airport
     * @return \Illuminate\Http\Response
     */
    public function show(Airport $airport) {

        return view('airports.show')->with('airport',$airport);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Airport $airport){
        $airport->update($request->all());
        return redirect('airports');
    }
    public  function destroy(Airport $airport){
        $airport->delete();
        return redirect('airports');
    }
}
