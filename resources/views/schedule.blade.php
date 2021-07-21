@extends('layouts.layout')

@section('content')
   @foreach ($drivers as $driver)
      <td> </td> <br>

       <td>{{ $driver->users->id}}</td> <br>
       <td>{{ $driver->users->name}}</td><br>
       {{-- <td>{{ $driver->gender}}</td><br>
       <td>{{$driver->address}}</td><br>
       <td>{{ $driver->license}}</td><br>
       <td>0{{ $driver->contact}}</td><br> --}}
       @endforeach
    
@endsection