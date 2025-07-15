<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

Route::post('/contact', [MailController::class, 'sendContactForm']);
