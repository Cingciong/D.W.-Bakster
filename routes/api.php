<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\Api\PageContentController;
use App\Http\Controllers\Api\RoomController;
use App\Http\Controllers\Api\GalleryController;

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

// Galleries API routes
Route::prefix('galleries')->group(function () {
    Route::get('/', [GalleryController::class, 'index']);
    Route::get('/{slug}', [GalleryController::class, 'show']);
    Route::get('/category/{category}', [GalleryController::class, 'byCategory']);
});
