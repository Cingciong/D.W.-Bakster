<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\Api\PageContentController;
use App\Http\Controllers\Api\RoomController;

Route::post('/contact', [MailController::class, 'sendContactForm']);

// Page Content API routes
Route::prefix('page-content')->group(function () {
    Route::get('/key/{key}', [PageContentController::class, 'getByKey']);
    Route::get('/section/{section}', [PageContentController::class, 'getBySection']);
    Route::get('/section/{section}/key-value', [PageContentController::class, 'getSectionAsKeyValue']);
});

// Rooms API routes
Route::prefix('rooms')->group(function () {
    Route::get('/', [RoomController::class, 'index']);
    Route::get('/{slug}', [RoomController::class, 'show']);
});
