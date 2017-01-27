@extends('layout')

@section('content')
    <h1>Edit Flight</h1>
    <form action="/flights/{{$flight->id}}" method="POST">
        {{method_field('PATCH')}}
        {{csrf_field()}}
        tail: <input type="text" name="tail" >{{$flight->tail}} <br>
        departure: <input type="text" name="departure">{{$flight->departure}} <br>
        destination: <input type="text" name="destination"> {{$flight->destination}}<br>
        souls: <input type="text" name="souls"> {{$flight->souls}}<br>
        departed at: <input type="text" name="departed_at"> {{$flight->departed_at}}<br>
        <input type="submit" value="update">

    </form>
    @stop