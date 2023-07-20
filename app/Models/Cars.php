<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;

    protected $table = 'cars';
    protected $fillable = [
        'car_name',
        'car_logo',
        'price',
        'user_fullname',
        'user_email',
        'user_phone',
        'place_reception',
        'date_of_addmision',
        'date_of_return',
        'driver_status_id'
    ];
}
