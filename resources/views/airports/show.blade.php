@extends('layout')

@section('content')

<h1>Airport Information</h1>
<table border="1px" bgcolor=#696969>
    <tr>
        <th>Identifier</th>
        <th>Name</th>
        <th>Controlled?</th>
        <th>No. of Runways</th>
    </tr>

        <tr>
            <td>{{$airport->identifier}}</td>
            <td>{{$airport->name}}</td>
            <td align="center">{{$airport->controlled}}</td>
            <td align="center">{{$airport->num_runways}}</td>
        </tr>

</table>

    @stop