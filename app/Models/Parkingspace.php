<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parkingspace extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'country',
        'city',
        'post_code',
        'address',
        'price_hourly',
        'price_day',
        'price_monthly',
        'image',
        'money_type',
        'money_type',
        'parking_type',
        'space_area',
        'cancellation_terms',
        'location',
        'status',
    ];

}
