@extends('layout')

@section('content')
    <h1>Airports</h1>

    <table border="1px" bgcolor=#696969>
        <tr>
            <th>Identifier</th>
            <th>Name</th>
            <th>Controlled?</th>
            <th>No. of Runways</th>
        </tr>
    @foreach($airports as $airport)
        <tr>
            <td>{{$airport->identifier}}</td>
            <td>{{$airport->name}}</td>
            <td align="center">@if($airport->isControlled == 1)
                {{"Yes"}}
                    @else {{"No"}}
                @endif
            </td>
            <td align="center">{{$airport->num_runways}}</td>
        </tr>
    @endforeach
    </table>
   <p>Click <a href="/airports/create">here</a> to add an airport
      <a href="/">home</a> </p>
@stop