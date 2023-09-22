<?php

use App\Http\Controllers\Back\CarBrandController;
use App\Http\Controllers\Back\CarsController;
use App\Http\Controllers\Back\CarDetailsController;
use App\Http\Controllers\Back\CurrencyController;
use App\Http\Controllers\Back\Dashboard;
use App\Http\Controllers\Back\DriverStatusController;
use App\Http\Controllers\Back\PrivacyPolicyController;
use App\Http\Controllers\Back\QuestAnswerController;
use App\Http\Controllers\Back\SettingsController;
use App\Http\Controllers\Back\SocialController;
use App\Http\Controllers\Back\TenantsController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['setlocale'], 'prefix' => '{locale?}'], function () {
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/login',[AuthController::class,'login'])->name('login');
        Route::post('/getlogin',[AuthController::class,'getlogin'])->name('getlogin');
        Route::get('/register',[AuthController::class,'register'])->name('register');
        Route::post('/getregister',[AuthController::class,'getregister'])->name('getregister');

        Route::group(['middleware' => ['admin']],function (){
            Route::get('dashboard', [Dashboard::class, 'index'])->name('dashboard');
            Route::resource('questanswer', QuestAnswerController::class);
            Route::resource('privacypolicy', PrivacyPolicyController::class);
            Route::resource('settings', SettingsController::class);
            Route::resource('driverstatus', DriverStatusController::class);
            Route::resource('cars', CarsController::class);
            Route::resource('cardetails', CardetailsController::class);
            Route::resource('carbrands', CarBrandController::class);
            Route::resource('social', SocialController::class);
            Route::resource('currency', CurrencyController::class);
            Route::resource('tenants', TenantsController::class);
        });

    });

});







