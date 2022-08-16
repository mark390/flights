<?php

namespace App\Http\Controllers;

use App\Models\ActualFlight;

use Illuminate\Http\Request;

class ActualFlightController extends Controller
{
    public function index () {
        return view('actual', [
            'actual' => ActualFlight::all()
        ]);
    }

    public function destroy(Request $request) {
            $id = $request->input('id');
            ActualFlight::find($id)->delete();
            return redirect()->action([ActualFlightController::class, 'index']);;
    }

    public function create(Request $request) {
        $flight = new ActualFlight();
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
        return redirect()->action([ActualFlightController::class, 'index']);;
    }
}