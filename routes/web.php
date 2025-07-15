<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

// Contact form route

Route::get('/mail', [MailController::class, 'sendMail']);

Route::get('/{any}', function () {
    return view('welcome');
})->where('any', '.*');


