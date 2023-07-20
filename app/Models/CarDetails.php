<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarDetails extends Model
{
    use HasFactory;

    protected $table = 'car_details';
    protected $fillable = [
        'img',
        'production_year',
        'gearbox',
        'engine_power',
        'climate_status',
        'number_of_doors',
        'number_of_seats',
        'type_of_seats',
        'baggage'
    ];
}
