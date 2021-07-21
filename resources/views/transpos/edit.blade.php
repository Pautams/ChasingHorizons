@extends('layouts.layout')
@section('content')
<div class="wrapper create-product shadow p-3 mb-5 rounded">
    <h1 >Edit transpo</h1>
    
<form  action="{{ route('transpos.update', $transpo->id) }}" method="POST">
        @csrf
        <div>
            <label for="model">Model:</label>
            <input class="list form-control form-group col-md-4" value="{{ $transpo->model }}" type="text" name="model" id="model"><br>
            <label for="color">Color:</label>
            <input class="list form-control form-group col-md-2" value="{{ $transpo->color }}" type="text" name="color" id="color"><br>
            <label for="plate">Plate Number:</label>
            <input class="list form-control form-group col-md-2" value="{{ $transpo->plate }}" type="text" name="plate" id="plate"><br>
            <label for="registration">Registration Number:</label>
            <input class="list form-control form-group col-md-2" value="{{ $transpo->registration }}" type="text" name="registration" id="registration"><br>
            <label for="capacity">Capacity:</label>
            <input class="list form-control form-group col-md-2" value="{{ $transpo->capacity }}" type="int" name="capacity" id="capacity"><br>
            
        </div>
        {{ method_field('PUT') }}
    <a  href=""><input type="submit" style="margin-left: 620px" type="submit" class=" btn btn-info" value="update transpo"></a>
    <a  class="btn btn-secondary float-right" href="{{ route('transpos.index') }}">back to transporations list</a>
    </form>
    
</div>
    
@endsection