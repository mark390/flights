<?php

use App\Http\Controllers\ActualFlightController;
use App\Http\Controllers\External;
use App\Http\Controllers\SimulatedFlightController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::get('/actual', [ActualFlightController::class,  'index']);

Route::get('/simulated', [SimulatedFlightController::class,  'index']);

Route::post('/remove', [ActualFlightController::class,  'destroy']);

Route::post('/removes', [SimulatedFlightController::class,  'destroy']);

Route::post('/search', [ActualFlightController::class,  'search']);

Route::post('/searchs', [SimulatedFlightController::class,  'search']);

Route::post('/add', [ActualFlightController::class,  'create']);

Route::post('/adds', [SimulatedFlightController::class,  'create']);

Route::get('/metar', [External::class,'metar']);