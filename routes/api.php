<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DevicesController;

Route::get('/user', function (Request $request) { return $request->user();
})->middleware('auth:sanctum');

Route::get('/tbdevices', [DevicesController::class, 'index']);
Route::post('/tbdevices', [DevicesController::class, 'store']);
Route::get('/tbdevices/{id}', [DevicesController::class, 'show']);
Route::put('/tbdevices/{id}', [DevicesController::class, 'update']);
Route::delete('/tbdevices/{id}', [DevicesController::class, 'destroy']);
Route::get('/test', function () {
    return 'Hello world';
});