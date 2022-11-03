<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('home')->group(function() {
    Route::controller(HomeController::class)->group(function () {
        Route::get('/terms', 'terms')->name('home.terms');
        Route::get('/highscores', 'highscores')->name('home.highscores');
        Route::get('/download', 'download')->name('home.download');
        Route::get('/guilds', 'guilds')->name('home.guilds');

        Route::middleware(['guest'])->group(function() {
            Route::get('/register', 'register')->name('home.register');
            Route::get('/login', 'login')->name('home.login');
        });
    });
});

Route::middleware(['auth'])->group(function () {
    Route::prefix('user')->group(function() {
        Route::controller(UserController::class)->group(function () {
            Route::get('/profile', 'profile')->name('user.profile');
            Route::get('/createcharacter', 'create')->name('user.createcharacter');
            Route::get('/changepassword', 'changePassword')->name('user.changepassword');
            Route::get('/logout', 'logout')->name('user.logout');
        });
    });
});

Route::prefix('dashboard')->group(function() {

});