@extends('layout')

@section('content')
    <h1>Flights</h1>

        {{$flight->tail}}
        {{$flight->departed_at->diffForHumans()}}


@stop