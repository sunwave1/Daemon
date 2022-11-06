<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthExternal\SocialiteController;

Route::middleware(['guest'])->group(function() {
    Route::controller(SocialiteController::class)->group(function() {
        Route::get('/auth/{driver}/redirect', 'redirect')->name('auth.socialite.redirect');
        Route::get('/auth/{driver}/authorization', 'callback');
    });
});