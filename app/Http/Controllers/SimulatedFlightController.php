<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SimulatedFlight;

class SimulatedFlightController extends Controller
{
    public function index () {
        return view('simulated', [
            'simulated' => SimulatedFlight::all()
        ]);
    }

    public function destroy(Request $request) {
        $id = $request->input('id');
        SimulatedFlight::find($id)->delete();
        return redirect()->action([SimulatedFlightController::class, 'index']);;
}
    public function create(Request $request) {
        $flight = new SimulatedFlight();
        $flight->userID = 1;
        $flight->date = $request->input('date');
        $flight->departure = $request->input('dep');
        $flight->arrival = $request->input('arr');
        $flight->aircraft = $request->input('aircraft');
        $flight->aircraft_type = $request->input('type');
        $flight->day = $request->input('day');
        $flight->night = $request->input('night');
        $flight->instrument = $request->input('inst');
        $flight->pic = $request->input('pic');
        $flight->total_hours = $request->input('total');
        $flight->comments = $request->input('comments');
        $flight->save();
        return redirect()->action([SimulatedFlightController::class, 'index']);;
    }
}
