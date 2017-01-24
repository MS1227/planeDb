@extends('layout');

@section('content')
    <h1>Create New Airport Record</h1>
    <form action="/airports" method="post">
        {{csrf_field()}}
        Name:<input type="text" name="name"><br>
        Identifier:<input type="text" name="identifier"><br>
        Controlled?:<input type="checkbox" name="isControlled"><br>
        No. of Runways:<input type="text" name="num_runways"><br>
        <input type="submit" name="create">

    </form>
    @stop