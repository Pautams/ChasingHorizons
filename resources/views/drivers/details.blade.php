@extends('layouts.layout')

@section('content')

<div class="container">
    <br><br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a class="btn btn-secondary float-left" href="{{ route('drivers.index') }}">drivers list</a>
            <br><br>
            <div class="card">
                <div class="card-header modal-title text-secondary"><h5>{{ $user[0]->name }}'s details</h5></div>

                <div class="card-body">
                    <table class="table">
                        <tbody>
                        
                            <tr>
                                <td>Age: {{ $driver[0]->age }}</td>
                            </tr>
                            <tr>
                                <td>Gender: {{ $driver[0]->gender }}</td>
                            </tr>
                            <tr>
                                <td>Birthdate: {{ $driver[0]->birthdate }}</td>
                            </tr>
                            <tr>
                               <td> Address: {{ $driver[0]->address }}</td>
                            </tr>
                            <tr>
                                <td>License No: {{ $driver[0]->license }}</td>
                            </tr>
                            <tr>
                                <td>Contact No: 0{{ $driver[0]->contact }}</td>
                            </tr>
                        </tbody>
                      </table>  <hr>
                      <footer>
                        <button type="button" class="btn btn-light btn-link float-right" data-toggle="modal" data-target="#exampleModal">
                            Edit
                        </button>
                        
                          <!-- Modal -->
                          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title text-secondary" id="exampleModalLabel">Edit {{ $user[0]->name  }}'s details</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group text-center edit ">
                                    <form action="{{ route('drivers.update', $driver[0]->id) }}" method="POST">
                                        @csrf
                                            <label class="col-form-label" for="age">Age:</label>
                                            <input class="list form-control form-group col-md-2" type="int" name="age" id="age" value="{{ $driver[0]->age }}">
                                            <label class="col-form-label" for="contact">Contact Number:</label>
                                            <input class="list form-control form-group col-md-6" type="int" name="contact" id="contact" value="{{ $driver[0]->contact }}">
                                            <label class="col-form-label" for="address">Address:</label>
                                            <input class="list form-control form-group col-md-6 " type="text" name="address" id="address" value="{{ $driver[0]->address }}">
                                            <label class="col-form-label" for="license">License:</label>
                                            <input class="list form-control form-group col-md-8 " type="text" name="license" id="license" value="{{ $driver[0]->license }}">
                                            <label class="col-form-label" for="gender">Gender:</label>
                                            <select name="gender" id="gender"  value=" {{ $driver[0]->gender }}">
                                                <option value="female">female</option>
                                                <option value="male">male</option>
                                            </select>
                                            <br>
                                            <label class="col-form-label" for="birthdate">Birthdate:</label>
                                            <input type="date" name="birthdate"  value="{{ $driver[0]->birthdate }}">
                                            
                                            {{ method_field('PUT') }}
                                          <br>
                                                <button type="submit" class="btn btn-primary float-right">Save changes</button>
                                              
                                          </form>
                                    </div>
                                  
                                </div>
                              
                              </div>
                            </div>
                          </div>
                       
                      </footer>
                                      
                </div>
            </div>
        </div>
    </div>
</div>
{{-- 
    Details for 
    {{ $user[0]->name }}
    {{ $user[0]->email }}

    {{ $details[0]->id }} --}}
    {{-- {{ $details[0]->user_id }} --}}
   {{-- // {{ $details[0]->name}} --}}
    {{-- {{ $details[0]->age }}
    {{ $details[0]->birthdate }}
    {{ $details[0]->address }}
    {{ $details[0]->license }} --}}

@endsection