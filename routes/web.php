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
        return view('main.about.echipa');
    })->name('echipa');

    Route::get('/awards', function () {
        return view('main.about.awards');
    })->name('awards');

    
    Route::get('/history', function () {
        return view('main.about.history');
    })->name('history');
    
});