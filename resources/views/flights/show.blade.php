@extends('layout')

@section('content')
    <h1>Flight Information for {{$flight->tail}}</h1>

    <table border="1px" bgcolor="#696969">
        <th>Tail Number</th>
        <th>Departure Airport</th>
        <th>Destination Airport</th>
        <th>Souls on Board</th>
        <th>Departed At</th>



            <tr>
                <td align="center">{{$flight->tail}}</td>
                <td align="center">{{$flight->departure}}</td>
                <td align="center">{{$flight->destination}}</td>
                <td align="center">{{$flight->souls}}</td>
                <td align="center">{{$flight->departed_at->diffForHumans()}}</td>

            </tr>

    </table>
    <form action="/flights/{{$flight->id}}/edit/">
        <input type="submit" value="update" />
    </form>

@stop