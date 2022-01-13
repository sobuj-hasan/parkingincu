<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parkingspace extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'description',
        'image',
        'icon_image',
        'country',
        'city',
        'post_code',
        'address',
        'price_hourly',
        'price_day',
        'price_monthly',
        'money_type',
        'parking_type',
        'space_type',
        'space_area',
        'cancellation_terms',
        'location',
        'status',
    ];

}
