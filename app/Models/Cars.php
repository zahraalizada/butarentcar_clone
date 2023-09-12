<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;

    protected $table = 'cars';
    protected $fillable = [
        'name',
        'price',
        'brand',
        'driver_status_id',
    ];

    public function withDriverStatus(){
        return $this->hasone(DriverStatus::class,'id','driver_status_id');
    }

    public function carDetail(){
        return $this->hasOne(CarDetails::class,'car_id','id');
    }
}
