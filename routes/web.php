<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

// Localized routes - RO (default) and EN
// Routes will be accessible as: /ro/, /en/, /ro/echipa, /en/echipa
// Middleware is already registered globally in bootstrap/app.php
Route::group([
    'prefix' => LaravelLocalization::setLocale()
], function () {
    
    Route::get('/', function () {
        return view('main.acasa');
    })->name('home');

    Route::get('/echipa', function () {
        return view('main.echipa');
    })->name('team');
    
});