@extends('layout')

@section('content')
    <h1>Airports</h1>

    <table border="1px" bgcolor=#696969>
        <tr>
            <th>Identifier</th>
            <th>Name</th>

        </tr>
    @foreach($airports as $airport)
        <tr>
            <td><a href="/airports/{{$airport->id}}"> {{$airport->identifier}}</a></td>
            <td>{{$airport->name}}</td>

        </tr>
    @endforeach
    </table>
   <p>Click <a href="/airports/create">here</a> to add an airport
      <a href="/">home</a> </p>
@stop