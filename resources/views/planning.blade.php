@extends('layout')

@section('content')

<h1 class="text-center">Mark's Flight Planning Page</h1>

<form action="/metar" method="GET" class="row g-3">
  <div class="col-md-2">
    <label for="station" class="form-label">Airport(ICAO Code, i.e. KIAD):</label>
    <input type="text" name="station" class="form-control" id="station">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Search</button>
    <input type="hidden" name="_token" value="{{csrf_token()}}">
  </div>
</form><br><br>

<div class="container-md">

    <h2>Current Weather Information</h2>
    <h3>Airport Name: {{$name}}</h3><h3>Metar: {{$metar}}</h3><h3>Flight Conditions: {{$condition}}</h3><h3>Forecasted Conditions: {{$forecast}}</h3>

</div>

@endsection