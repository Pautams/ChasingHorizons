@extends('layouts.layout')
@section('content')

<div class="container">
    <br><br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-group create-product shadow p-3 mb-5 rounded">
                <div class="card-body">
                    
                <h3>Fill up information</h3>
                    <br>
                    <form  action="{{ route('drivers.store') }}" method="POST">
                        @csrf

                            <div class="form-row">
                              <div class="col">
                                <label for="contact">Contact Number:</label><br>
                                <input class="form-control" type="int" name="contact" id="contact"><br> 
                              </div>
                              <div class="col">
                                <label for="name">Full Name:</label><br>
                                <input class="form-control" type="text" name="name" id="name"><br> 
                              </div>
                              <div class="col">
                                <label for="birthdate">Birthdate:</label><br>
                                    <input class="form-control" type="date" name="birthdate">  
                              </div>

                            </div> 
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="license">License No:</label>
                                    <input class=" form-control " type="text" name="license" id="license"><br>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="gender">Gender:</label><br>
                                    <select class="form-control " name="gender" id="gender">
                                        <option value="female">female</option>
                                        <option value="male">male</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="Age">Age:</label><br>
                                    <input class="form-control" type="int" name="age" id="age">
                                </div>
                              </div>
                              
                                <label for="address">Address:</label>
                                <input class="col-md-12 form-control" type="text" name="address" id="address"><br>  

                            <div class="form-row">
                                <div class="col">
                                <input type="hidden" name="user_id" value="{{ $user ?? '' ?? '' }}">
                                </div>
                                <div class="col">

                                    <a class="btn btn-secondary float-right" href="{{ route('drivers.index') }}">drivers list</a>
                                    <a  href=""><input type="submit" class=" btn btn-primary float-right" value="save"></a>

                                </div>   
                            </div>  

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>







  
  
    

    
@endsection