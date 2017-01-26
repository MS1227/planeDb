@extends('layout')

@section('content')
 <h1>Flights</h1>
 <table border="1px" bgcolor="#696969">
     <th>Tail Number</th>
     <th>Departure Airport</th>
     <th>Destination Airport</th>
     <th>Souls on Board</th>
     <th>Departed At</th>


    @foreach($flights as $flight)
        <tr>
            <td align="center"> {{$flight->tail}}</td>
            <td align="center">{{$flight->departure}}</td>
            <td align="center">{{$flight->destination}}</td>
            <td align="center">{{$flight->souls}}</td>
            <td align="center">{{$flight->departed_at->diffForHumans()}}</td>
        </tr>
    @endforeach
 </table>
 @section('links')
    <a href="/flights/create">Add</a>
    <a href="/">Home</a> </p>

     @stop
@stop
