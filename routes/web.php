<?php

use App\Http\Controllers\ActualFlightController;
use App\Http\Controllers\External;
use App\Http\Controllers\SimulatedFlightController;
use App\Http\Controllers\UserController;
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

Route::get('/', [UserController::class, 'login']);

Route::get('/actual', [ActualFlightController::class,  'index'])->middleware('auth');

Route::get('/simulated', [SimulatedFlightController::class,  'index'])->middleware('auth');

Route::post('/remove', [ActualFlightController::class,  'destroy'])->middleware('auth');

Route::post('/removes', [SimulatedFlightController::class,  'destroy'])->middleware('auth');

Route::post('/search', [ActualFlightController::class,  'search']);

Route::post('/searchs', [SimulatedFlightController::class,  'search']);

Route::post('/add', [ActualFlightController::class,  'create'])->middleware('auth');

Route::post('/adds', [SimulatedFlightController::class,  'create'])->middleware('auth');

Route::get('/metar', [External::class,'metar'])->middleware('auth');

Route::get('/register', [UserController::class, 'create'])->middleware('guest');

Route::post('/users', [UserController::class, 'store']);

Route::get('/logout', [UserController::class, 'logout'])->middleware('auth');

Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

Route::post('/authenticate', [UserController::class, 'authenticate']);