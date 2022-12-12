<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BookableController;
use App\Http\Controllers\Api\BookableAvailabilityController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('bookables', BookableController::class)->only(['index', 'show']);
Route::get('bookables/{bookable}/availability', BookableAvailabilityController::class)->name('bookables.availability.show');
