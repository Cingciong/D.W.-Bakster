<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\Api\PageContentController;

Route::post('/contact', [MailController::class, 'sendContactForm']);

// Page Content API routes
Route::prefix('page-content')->group(function () {
    Route::get('/key/{key}', [PageContentController::class, 'getByKey']);
    Route::get('/section/{section}', [PageContentController::class, 'getBySection']);
    Route::get('/section/{section}/key-value', [PageContentController::class, 'getSectionAsKeyValue']);
});
