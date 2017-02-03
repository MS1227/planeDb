@extends('layout');

@section('content')
    <h1>Create New Airport Record</h1>
    <form action="/airports" method="post">
        {{csrf_field()}}
        Name:<input type="text" name="name" value="{{old('name')}}"><br>
        Identifier:<input type="text" name="identifier" value="{{old('identifier')}}"><br>
        Controlled?:<input type="checkbox" value="1" name="isControlled"><br>
        No. of Runways:<input type="text" name="num_runways" value="{{old('num_runways')}}"><br>
        <input type="submit" name="create">

    </form>
    <a href="/airports/">Airports</a>
        @if(count($errors))
         <ul>
             @foreach($errors->all() as $error)
                 <li>{{$error}}</li>
                 @endforeach
         </ul>
        @endif
@stop