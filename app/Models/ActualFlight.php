<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActualFlight extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'actual';
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