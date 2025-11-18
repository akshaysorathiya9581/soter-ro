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

    // About US Routes
    // 
    Route::get('/team', function () {
        return view('main.about.team');
    })->name('team');

    Route::get('/awards', function () {
        return view('main.about.awards');
    })->name('awards');
    
    Route::get('/history', function () {
        return view('main.about.history');
    })->name('history');
    
    Route::get('/division', function () {
        return view('main.about.division');
    })->name('division');
    
    Route::get('/compound_f', function () {
        return view('main.about.compound_f');
    })->name('compound_f');
    
    Route::get('/partnerships', function () {
        return view('main.about.partnerships');
    })->name('partnerships');
    
    // Route::get('/history', function () {
    //     return view('main.about.history');
    // })->name('history');
    
    // Route::get('/history', function () {
    //     return view('main.about.history');
    // })->name('history');
    
    // Route::get('/history', function () {
    //     return view('main.about.history');
    // })->name('history');
    
    // Route::get('/history', function () {
    //     return view('main.about.history');
    // })->name('history');
    
    // Route::get('/history', function () {
    //     return view('main.about.history');
    // })->name('history');
    
});