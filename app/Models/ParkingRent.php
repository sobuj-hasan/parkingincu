<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParkingRent extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'parking_id',
        'uses_duration',
        'uses_time',
        'started_date',
        'end_date',
        'total_cost',
        'status',
    ];
}
