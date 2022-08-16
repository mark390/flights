@extends('layout')

@section('content')

<h1 class="text-center">Mark's Simulated Flight LogBook</h1>


<form action="/adds" method="POST" class="row g-3">
    <div class="col-md-2">
      <label for="date" class="form-label">Date:</label>
      <input type="date" name="date" class="form-control" id="date">
    </div>
    <div class="col-md-2">
      <label for="aircraft" class="form-label">Aircraft:</label>
      <input type="text" name="aircraft" class="form-control" id="aircraft">
    </div>
    <div class="col-md-2">
      <label for="type" class="form-label">Aircraft Type:</label>
      <input type="text" name="type" class="form-control" id="type">
    </div>
    <div class="col-md-2">
      <label for="dep" class="form-label">Departure:</label>
      <input type="text" name="dep" class="form-control" id="dep">
    </div>
    <div class="col-md-2">
      <label for="arr" class="form-label">Arrival:</label>
      <input type="text" name="arr" class="form-control" id="arr">
    </div>
    <div class="col-md-2">
      <label for="day" class="form-label">Day Hours:</label>
      <input type="text" name="day" class="form-control" id="day">
    </div>
    <div class="col-md-2">
      <label for="night" class="form-label">Night Hours:</label>
      <input type="number" min="0" step=".01" name="night" class="form-control" id="night">
    </div>
    <div class="col-md-2">
      <label for="inst" class="form-label">Instrument Hours:</label>
      <input type="number" min="0" step=".01" name="inst" class="form-control" id="inst">
    </div>
    <div class="col-md-2">
      <label for="pic" class="form-label">Pilot in Command Hours:</label>
      <input type="number" min="0" step=".01" name="pic" class="form-control" id="pic">
    </div>
    <div class="col-md-2">
      <label for="total" class="form-label">Total Hours:</label>
      <input type="number" min="0" step=".01" name="total" class="form-control" id="total">
    </div>
    <div class="col-md-8">
      <label for="comments" class="form-label">Comments:</label>
      <input type="text" name="comments" class="form-control" id="comments">
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Add</button>
    </div>
  </form><br><br>

    <div class="table" style="table, th, td { border: 1px solid black; }">
      <table id="publictable">
        <tr>
          <th scope="col">Flight Number</th>
          <th scope="col">Date</th>
          <th scope="col">Aircraft</th>
          <th scope="col">Aircraft Type</th>
          <th scope="col">Departure</th>
          <th scope="col">Arrival</th>
          <th scope="col">Day Hours</th>
          <th scope="col">Night Hours</th>
          <th scope="col">Instument Hours</th>
          <th scope="col">Pilot in Command Hours</th>
          <th scope="col">Comments</th>
        </tr>
        @foreach($simulated as $fa )
        <tr>
          <td style="text-align: center;"><?php echo $fa['id']; ?></td>
          <td style="text-align: center;"><?php echo $fa['date']; ?></td>
          <td style="text-align: center;"><?php echo $fa['aircraft']; ?></td>
          <td style="text-align: center;"><?php echo $fa['aircraft_type']; ?></td>
          <td style="text-align: center;"><?php echo $fa['departure']; ?></td>
          <td style="text-align: center;"><?php echo $fa['arrival']; ?></td>
          <td style="text-align: center;"><?php echo $fa['day']; ?></td>
          <td style="text-align: center;"><?php echo $fa['night']; ?></td>
          <td style="text-align: center;"><?php echo $fa['instrument']; ?></td>
          <td style="text-align: center;"><?php echo $fa['pic']; ?></td>
          <td style="text-align: center;"><?php echo $fa['comments']; ?></td>
          <form action="/removes" method="POST">
          <td><input type="submit" class="btn btn-danger" value="Delete">
          <input type="hidden" name="id" value="<?php echo $fa['id'] ?>">
          <input type="hidden" name="selector" value="1">
          </td></form>
        </tr>
        </form>
        @endforeach
      </table>
      <h3>Total Actual Flight Hours: {{ \App\Models\SimulatedFlight::sum('total_hours') }}</h3><br>
      <h3>Total Actual Day Hours: {{ \App\Models\SimulatedFlight::sum('day') }}</h3><br>
      <h3>Total Actual Night Hours: {{ \App\Models\SimulatedFlight::sum('night') }}</h3><br>
      <h3>Total Actual Instrument Hours: {{ \App\Models\SimulatedFlight::sum('instrument') }}</h3><br>
      <h3>Total Actual Pilot in Command Hours: {{ \App\Models\SimulatedFlight::sum('pic') }}</h3>
    </div>
  <br><br>

  @endsection