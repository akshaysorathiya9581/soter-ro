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
    
    Route::get('/workshops', function () {
        return view('main.services.workshops');
    })->name('workshops');
    
    Route::get('/atelier-consultanta', function () {
        return view('main.services.atelier-consultanta');
    })->name('atelier-consultanta');
    
    Route::get('/accounting', function () {
        return view('main.services.accounting');
    })->name('accounting');
    
    Route::get('/payroll', function () {
        return view('main.services.payroll');
    })->name('payroll');
    
    Route::get('/expat', function () {
        return view('main.services.expat');
    })->name('expat');
    
    Route::get('/audit', function () {
        return view('main.services.audit');
    })->name('audit');
    
    Route::get('/tax', function () {
        return view('main.services.tax');
    })->name('tax');
    
    Route::get('/workforce', function () {
        return view('main.services.workforce');
    })->name('workforce');
    
    Route::get('/e-transporten', function () {
        return view('main.services.e-transporten');
    })->name('e-transporten');

    Route::get('/stories', function () {
        return view('main.careers.stories');
    })->name('stories');

    Route::get('/careers', function () {
        return view('main.careers.careers');
    })->name('careers');

    // Policy Routes
    Route::get('/gdpren', function () {
        return view('main.policies.gdpren');
    })->name('gdpren');

    Route::get('/disclosure', function () {
        return view('main.policies.disclosure');
    })->name('disclosure');

    Route::get('/subcontractor', function () {
        return view('main.policies.subcontractor');
    })->name('subcontractor');

    Route::get('/invoices', function () {
        return view('main.policies.invoices');
    })->name('invoices');

    Route::get('/contactus', function () {
        return view('main.contactus');
    })->name('contactus');
    
    // News Route
    Route::get('/actualitate', function () {
        return view('main.news.actualitate');
    })->name('actualitate');

    Route::get('/blog01', function () {
        return view('main.news.blog01');
    })->name('blog01');

    Route::get('/blog01', function () {
        return view('main.news.blog01');
    })->name('blog01');

    Route::get('/blog02', function () {
        return view('main.news.blog02');
    })->name('blog02');

    Route::get('/blog03', function () {
        return view('main.news.blog03');
    })->name('blog03');

    Route::get('/blog05', function () {
        return view('main.news.blog05');
    })->name('blog05');

    Route::get('/blog06', function () {
        return view('main.news.blog06');
    })->name('blog06');

    Route::get('/blog07', function () {
        return view('main.news.blog07');
    })->name('blog07');

    Route::get('/blog08', function () {
        return view('main.news.blog08');
    })->name('blog08');

    Route::get('/blog09', function () {
        return view('main.news.blog09');
    })->name('blog09');

    // Route::get('/actualitate', function () {
    //     return view('main.news.actualitate');
    // })->name('actualitate');

    // Route::get('/actualitate', function () {
    //     return view('main.news.actualitate');
    // })->name('actualitate');
    
});