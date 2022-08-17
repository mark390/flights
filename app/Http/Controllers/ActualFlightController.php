<?php

namespace App\Http\Controllers;

use App\Models\ActualFlight;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActualFlightController extends Controller
{
    public function index () {
        $user = Auth::user();
        return view('actual', [
            'actual' => ActualFlight::where('userID', $user->id)->paginate(2)
        ]);
    }

    public function destroy(Request $request) {
            $id = $request->input('id');
            ActualFlight::find($id)->delete();
            return redirect()->action([ActualFlightController::class, 'index']);;
    }

    public function create(Request $request) {
        $flight = new ActualFlight();
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
        return redirect()->action([ActualFlightController::class, 'index']);;
    }

    public function search(Request $request) {
        $user = Auth::user();
        return view('asearch', [
            'actual' => ActualFlight::where('userID', $user->id)->where('departure', '=', $request->input('search'))->paginate(2)
        ]);
    }
}