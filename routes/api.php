<?php

use App\Http\Controllers\Api\UmkmController as ApiUmkmController;
use App\Http\Controllers\UmkmController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/umkm', [ApiUmkmController::class, 'index']);
