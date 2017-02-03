@extends('layout')

@section('content')
    <h1 align="center">Airports</h1>

    <table align="center" border="1px" bgcolor=#696969>
        <tr>
            <th>Identifier</th>
            <th>Name</th>

        </tr>
    @foreach($airports as $airport)
        <tr>
            <td><a href="/airports/{{$airport->id}}"> {{$airport->identifier}}</a></td>
            <td>{{$airport->name}}</td>
            <td align="center"><form action="/airports/{{$airport->id}}"method="POST">
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
   <a href="/airports/create">Add Airport</a>
      <a href="/">home</a>
@stop