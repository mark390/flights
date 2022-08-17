@extends('layout')

@section('content')

<h1 class="text-center">Search Results</h1>

<form class="row g-3" action="/search" method=POST>
  <div class="mb-3">
    <label for="search" class="form-label">Departure Airport Search</label>
    <input type="text" class="form-control" id="search" placeholder="Search" name="search">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Search</button>
    <input type="hidden" name="_token" value="{{csrf_token()}}">
  </div>
</form>

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
          <form action="/remove" method="POST">
          <td><input type="submit" value="Delete" class="btn btn-danger">
          <input type="hidden" name="id" value="<?php echo $fa['id'] ?>">
          </td></form>
        </tr>
        </form>
        @endforeach
      </table>
      <h3>Total Actual Flight Hours: {{ \App\Models\ActualFlight::sum('total_hours') }}</h3><br>
      <h3>Total Actual Day Hours: {{ \App\Models\ActualFlight::sum('day') }}</h3><br>
      <h3>Total Actual Night Hours: {{ \App\Models\ActualFlight::sum('night') }}</h3><br>
      <h3>Total Actual Instrument Hours: {{ \App\Models\ActualFlight::sum('instrument') }}</h3><br>
      <h3>Total Actual Pilot in Command Hours: {{ \App\Models\ActualFlight::sum('pic') }}</h3>
    </div>
  <br><br>
  
{{ $simulated->links() }}
  @endsection