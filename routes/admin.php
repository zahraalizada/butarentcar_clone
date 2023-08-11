<?php

use App\Http\Controllers\Back\CarsController;
use App\Http\Controllers\Back\CarDetailsController;
use App\Http\Controllers\Back\CurrencyController;
use App\Http\Controllers\Back\Dashboard;
use App\Http\Controllers\Back\DriverStatusController;
use App\Http\Controllers\Back\PrivacyPolicyController;
use App\Http\Controllers\Back\QuestAnswerController;
use App\Http\Controllers\Back\SettingsController;
use App\Http\Controllers\Back\SocialController;

Route::group(['middleware' => 'setlocale', 'prefix' => '{locale?}'], function () {
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('dashboard', [Dashboard::class, 'index'])->name('dashboard');
        Route::resource('questanswer', QuestAnswerController::class);
        Route::resource('privacypolicy', PrivacyPolicyController::class);
        Route::resource('settings', SettingsController::class);
        Route::resource('driverstatus', DriverStatusController::class);
        Route::resource('cars', CarsController::class);
        Route::resource('cardetails', CardetailsController::class);
        Route::resource('social', SocialController::class);
        Route::resource('currency', CurrencyController::class);
    });

});







