@extends('layout')

@section('content')
 <h1>Flights</h1>
 Click tail number to see more.
 <table border="1px" bgcolor="#696969">
     <th>Tail Number</th>
     <th>Departure Airport</th>
     <th>Destination Airport</th>
     <th></th>



    @foreach($flights as $flight)
        <tr>
            <td align="center"><a href="/flights/{{$flight->id}}">{{$flight->tail}}</a></td>
            <td align="center">{{$flight->departure}}</td>
            <td align="center">{{$flight->destination}}</td>
            <td align="center"> <form action="/flights/{{$flight->id}}" method="POST">
                    {{method_field('DELETE')}}
                    {{csrf_field()}}
                    <input type="submit" value="delete">
                </form>
            </td>

        </tr>
    @endforeach
 </table>


@stop
 @section('links')
    <a href="/flights/create">Add</a>
    <a href="/">Home</a> </p>

     @stop

