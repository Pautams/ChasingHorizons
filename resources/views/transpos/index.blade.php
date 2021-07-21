@extends('layouts.layout')

@section('content')
<div class="row justify-content-center wrapper">
    <div class="col-md-11">
    <br><br>
    <a class="btn btn-info " href="{{ route('transpos.create') }}">ADD NEW TRANSPO</a> <br><br>
    </div>

    <div class="card" style="width:1000px">
        <div class="card-header"><h3>Transpos</h3></div>

        <div class="card-body">
        
            <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Model</th>
                <th scope="col">Color</th>
                <th scope="col">Plate No.</th>
                <th scope="col">Registration No.</th>
                <th scope="col">Capacity</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
                            
                </tr>
            </thead>
            <tbody>
                @foreach ($transpos as $transpo)

                <tr class="product-item">
                <td>{{ $transpo->id}}</td>
                <td>{{ $transpo->model}}</td>
                <td>{{ $transpo->color}}</td>
                <td>{{ $transpo->plate}}</td>
                <td>{{ $transpo->registration}}</td>
                <td>{{ $transpo->capacity}}</td>
                <td>
                    
                <a class="btn btn-light btn-link" href="{{ route('transpos.edit', $transpo->id) }}">edit</a> 
                </td>
                <td>
                       <form action="{{ route('transpos.destroy', $transpo->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Sure Want Delete?')">Delete</button>
                </form> 
                
                </td>
                
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
        <a class="btn btn-light" href="/main">back to admin</a>
    </div>
</div>


    
@endsection