<?php

use App\Http\Controllers\Back\Dashboard;
use App\Http\Controllers\Back\TenantsController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\PrivacyPolicyController;
use App\Http\Controllers\Front\QuestAnswerController;
use App\Http\Controllers\Front\Homepage;
use App\Http\Controllers\LocaleController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

require_once "admin.php";

Route::group(['middleware' => 'setlocale', 'prefix' => '{locale?}'], function () {
    Route::get('/', [Homepage::class, 'index'])->name('esassehife');
    Route::post('/', [Homepage::class, 'currencyChange'])->name('currencyChange');
    Route::get('/privacy', [PrivacyPolicyController::class, 'index'])->name('mexfilik');
    Route::get('/faq', [QuestAnswerController::class, 'index'])->name('faq');
    Route::get('/contact', [ContactController::class, 'index'])->name('elaqe');
    Route::resource('/tenants', TenantsController::class);
});


Route::get('/locale/{locale}', function ($lang) {
    Session::put('locale', $lang);
    $segments = prev_segments(url()->previous());
    $segments[0] = $lang;
    $redirect = implode('/',$segments);
    app()->setLocale($lang);

    return redirect('/'.$redirect);
})->name('setLocale');





