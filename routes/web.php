<?php

use App\Http\Controllers\Back\Dashboard;
use App\Http\Controllers\Front\Homepage;
use App\Http\Controllers\LocaleController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

require_once "admin.php";


Route::get('/', [Homepage::class, 'index']);


Route::get('/locale/{locale}', function ($lang) {
    Session::put('locale', $lang);
    $segments = prev_segments(url()->previous());
    $segments[0] = $lang;
    $redirect = implode('/',$segments);
    app()->setLocale($lang);
    return redirect('/'.$redirect);
})->name('setLocale');





