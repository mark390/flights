<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;
use Exception;

class External extends Controller
{
    public function metar(Request $request)
  {
    $url= "https://aviationweather.gov/metar/data?$request->input('station')";
    if (empty($request->input('station'))) {
        $station = "KCBE";
    } else {
        $station = $request->input('station');
    }
    $key = env('API_KEY');
    $stat = 'https://avwx.rest/api/station/'.$station.'?token='.$key;
    $met = 'https://avwx.rest/api/metar/'.$station.'?token='.$key;
    $taf = 'https://avwx.rest/api/taf/'.$station.'?token='.$key;
    $json_data_s = file_get_contents($stat);
    $json_data_m = file_get_contents($met);
    $json_data_t = file_get_contents($taf);
    $response_data_m = json_decode($json_data_m);
    $response_data_t = json_decode($json_data_t);
    $response_data_s = json_decode($json_data_s);
    $raw = $response_data_m->raw;
    $flightCondition = $response_data_m->flight_rules;
    $name = $response_data_s->name;
    //TAF may not be available for automated weather observations
    try {
      $future = $response_data_t->raw;
    }
    catch (Exception $e) {
      report($e);
      $future = "No Data Available";
    }
    
    return view('planning', [
        'metar' => $raw, 'condition' => $flightCondition,  'name' => $name, 'forecast' => $future
        //'current_temp' => $temp, 'direction' => $dir, 'speed' => $speed, 'vis' => $vis, 'alt' => $alt, 'condition' => $cond
    ]);
  }
}

