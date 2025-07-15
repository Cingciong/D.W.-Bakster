<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

// Contact form route
Route::get('/mail', [MailController::class, 'sendMail']);

// Test email route (works in both dev and production)
Route::get('/test-email', [MailController::class, 'testEmail']);

// Check mail configuration
Route::get('/mail-config', [MailController::class, 'checkMailConfig']);

Route::get('/{any}', function () {
    return view('welcome');
})->where('any', '.*');


