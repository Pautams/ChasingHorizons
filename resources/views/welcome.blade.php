@extends('layouts.layout')
@section('content')


<header class="w3-display-container w3-content w3-hide-small" style="max-width:1500px">
    <img class="w3-image" src="{{url('/img/CarBG.jpg')}}" alt="London" width="1500" height="700">
        
 
    <div class="w3-display-middle" style="width:65%">
        <h1 style="text-align: center">CHASING HORIZONS</h1>
      <div class="w3-bar w3-black">
        <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'BookCar');"><i class="far fa-bookmark"></i>BOOK CAR</button>
      </div>
      
      <div id="BookCar" class="w3-container w3-white w3-padding-16 myLink">
        <h3>Book a ride!</h3>
        <form action="" class="form-group">
            <div class="w3-row-padding" style="margin:0 -16px;">
                <div class="w3-half">
                  <label>From</label>
                  <input class="w3-input w3-border" type="text" placeholder="Departing from">
                </div>
                <div class="w3-half">
                  <label>To</label>
                  <input class="w3-input w3-border" type="text" placeholder="Arriving at">
                </div>
                <div class="w3-half">
                  <label>Number of Passengers</label>
                  <input class="w3-input w3-border" type="text" placeholder="How many are you?">
                </div>
                <div class="w3-half">
                  <label>Contact Number</label>
                  <input class="w3-input w3-border" type="text" placeholder="Contact Number">
                </div>
                <div class="w3-half">
                  <input type="radio" id="One" name="Mode" value="OneWay">
                  <label>One way</label>
                  <input type="radio" id="Round" name="Mode" value="Roundtrip">
                  <label>Rent for the Day</label>
              </div>
            </div>
              <p><button class="w3-button w3-dark-grey">Book Ride</button></p>
            </div>
        </form>
        

@endsection


