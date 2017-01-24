@extends('layout')

@section('content')
    <h1>Create New Flight</h1>
    <form action="/flights" method="post">
        {{csrf_field()}}
        tail: <input type="text" name="tail"> <br>
        departure: <input type="text" name="departure"> <br>
        destination: <input type="text" name="destination"> <br>
        souls: <input type="text" name="souls"> <br>
        departed at: <input type="text" name="departed_at"> <br>
        <input type="submit" name="create">

    </form>
@stop