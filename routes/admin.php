<?php

use App\Http\Controllers\Back\Dashboard;
use App\Http\Controllers\Back\PrivacyPolicyController;
use App\Http\Controllers\Back\QuestAnswerController;
use App\Http\Controllers\Back\SocialController;


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', [Dashboard::class, 'index'])->name('dashboard');
    Route::resource('questanswer', QuestAnswerController::class);
    Route::resource('privacypolicy', PrivacyPolicyController::class);
    Route::resource('social', SocialController::class);
});



