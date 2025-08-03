<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\Api\RoomController;
use App\Http\Controllers\Api\GalleryController;
use App\Http\Controllers\Api\PricingController;

Route::post('/contact', [MailController::class, 'sendContactForm']);

Route::apiResource('rooms', RoomController::class, ['only' => ['index', 'show']]);
Route::apiResource('gallery', GalleryController::class, ['only' => ['index']]);
Route::apiResource('pricing', PricingController::class, ['only' => ['index']]);
