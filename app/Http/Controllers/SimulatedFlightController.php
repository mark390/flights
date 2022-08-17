<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SimulatedFlight;
use Illuminate\Support\Facades\Auth;

class SimulatedFlightController extends Controller
{
    public function index () {
        $user = Auth::user();
        return view('simulated', [
            'simulated' => SimulatedFlight::where('userID', $user->id)->paginate(10)
        ]);
    }

    public function destroy(Request $request) {
        $id = $request->input('id');
        SimulatedFlight::find($id)->delete();
        return redirect()->action([SimulatedFlightController::class, 'index']);;
}
    public function create(Request $request) {
        $flight = new SimulatedFlight();
        $user = Auth::user();
        $flight->userID = $user->id;
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

    public function search(Request $request) {
        $user = Auth::user();
        return view('ssearch', [
            'simulated' => SimulatedFlight::where('userID', $user->id)->where('departure', '=', $request->input('search'))->paginate(2)
        ]);
    }
}
