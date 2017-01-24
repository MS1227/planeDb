@extends('layout')

@section('content')
 <h1>Flights</h1>
    @foreach($flights as $flight)
    {{$flight->tail}}
        {{$flight->departed_at->diffForHumans()}}

    @endforeach
@stop