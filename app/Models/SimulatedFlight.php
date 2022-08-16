<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SimulatedFlight extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'simulated';
    protected $fillable = [
        'userID',
        'date',
        'departure',
        'arrival',
        'aircraft',
        'aircraft_type',
        'day',
        'night',
        'instrument',
        'pic',
        'total_hours',
        'comments'
    ];
}
