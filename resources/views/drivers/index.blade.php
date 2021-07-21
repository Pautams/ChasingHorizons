@extends('layouts.layout')
@section('content')

<div class="container">
    <br><br>
    <div class="row justify-content-center">
        <div class="col-md-8">
        <a class="btn btn-info " href="{{ route('drivers.create') }}">ADD NEW DRIVER</a> <br><br>
            <div class="card">
                <div class="card-header modal-title text-secondary"><h5>Drivers</h5></div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr style="text-align: center;">
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Birthdate</th>
                            <th scope="col">Age</th>
                            <th scope="col">Address</th>
                            <th scope="col">License</th>
                            <th scope="col">Contact</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Delete</th>
                            <th scope="col">Edit</th>
                           
                            
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($drivers as $driver)
                
                                <tr class="product-item" >
                                <td>{{$driver->id}}</td>
                                <td>{{$driver->name}}</td>
                                <td>{{$driver->birthdate}}</td>
                                <td>{{$driver->age}}</td>
                                <td>{{$driver->address}}</td>
                                <td>{{$driver->license}}</td>
                                <td>{{$driver->contact}}</td>
                                <td>{{$driver->gender}}</td>

                                <td>
                                <form action="{{ route('drivers.destroy', $driver->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger float-right" onclick="return confirm('Sure Want Delete?')">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </form> 
</td>
<td>

                                    <a class="btn btn-light btn-link float-right" href="{{ route('drivers.edit', $driver->id) }}">Edit</a>   
          
                                </td>
                            
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                    <a class="btn btn-light" href="/main">back to admin</a>
                </div>

                </div>    
            </div>
        </div>
    </div>
</div>





                        
    
@endsection