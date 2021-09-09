<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/provinces', [App\Http\Controllers\RajaOngkirController::class, 'getProvinces']);
Route::get('/cities/{id}', [App\Http\Controllers\RajaOngkirController::class, 'getCities']);
Route::post('/checkOngkir', [App\Http\Controllers\RajaOngkirController::class, 'checkOngkir']);
