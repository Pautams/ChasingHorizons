@extends('layouts.layout')

@section('content')

<div class="container wrapper" style="text-align: center">
   <br><br><br><br>
      <a class="box btn-light rounded-circle" href="">
        <i class="fas fa-list fa-5x" style="text-align: center"></i>
        <br><h5>Pending</h5>
      </a>
     
    <a class="box btn-light rounded-circle" href="{{ route('drivers.index')}}">
        <i class="far fa-address-book fa-5x" style="text-align: center"></i>
        <br><h5>Drivers</h5>
      </a>
          
      <!-- <a class="box btn-light rounded-circle" href="">
        <i class="fas fa-clipboard-list fa-5x" style="text-align: center"></i>
        <br><h5>Lists</h5>
      </a> -->

      <a class="box btn-light rounded-circle" href="{{ route('transpos.index')}}">
        <i class="fas fa-taxi fa-5x" style="text-align: center"></i>
        <br><h5>Transpos</h5>
      </a>
           
  
    
  
</div>

    
@endsection