<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

// Contact form route
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

// Vue Router handles all routes on frontend
Route::get('/{any}', function () {
    return view('welcome');
})->where('any', '.*');
