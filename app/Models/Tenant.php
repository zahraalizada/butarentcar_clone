<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;
    protected $fillable = [
        'car_name',
        'fullname',
        'email',
        'phone',
        'reception_place',
        'reserve_date',
        'return_date',
    ];
}
