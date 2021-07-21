@extends('layouts.layout')
@section('content')
<div class="wrapper create-product shadow p-3 mb-5 rounded">
    <h1 >Add new driver</h1>
    
<form  action="{{ route('drivers.update', $driver->id) }}" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input class="list form-control form-group col-md-2" value="{{$driver->name}}" type="text" name="name" id="name"><br>
            <label for="birthdate">Birthdate:</label>
            <input class="list form-control form-group col-md-2" value="{{$driver->date}}" type="date" name="birthdate" id="birthdate"><br>
            <label for="age">Age:</label>
            <input class="list form-control form-group col-md-2" value="{{$driver->age}}" type="int" name="age" id="age"><br>
            <label for="contact">Contact Number:</label>
            <input class="list form-control form-group col-md-2" value="{{$driver->contact}}" type="int" name="contact" id="contact"><br>
            <label for="address">Address:</label>
            <input class="list form-control form-group col-md-2" value="{{$driver->address}}" type="text" name="address" id="address"><br>
            <label for="license">License:</label>
            <input class="list form-control form-group col-md-2" value="{{$driver->license}}" type="text" name="license" id="license"><br>
            <label for="gender">Gender:</label>
            <select name="gender" id="gender" value="{{$driver->gender}}">
                <option value="female">female</option>
                <option value="male">male</option>
            </select>
        </div>
        {{ method_field('PUT') }}
    <a  href=""><input type="submit" style="margin-left: 620px" type="submit" class=" btn btn-info" value="update driver"></a>
    <a  class="btn btn-secondary float-right" href="{{ route('drivers.index') }}">back to drivers list</a>
    </form>
    
</div>
    
@endsection