<?php

use App\Http\Controllers\Back\Dashboard;
use App\Http\Controllers\Front\Homepage;
use Illuminate\Support\Facades\Route;

require_once "admin.php";


Route::get('/', [Homepage::class, 'index']);





