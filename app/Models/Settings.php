<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;

    protected $table = 'settings';
    protected $fillable = [
        'logo_img',
        'phone',
        'phone_wp',
        'email',
        'address',
        'address_map',
        'hours',
        'copyright',
        'cover_img',
        'cover_title',
        'cover_description'
    ];
}
