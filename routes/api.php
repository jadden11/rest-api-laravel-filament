<?php

use App\Http\Controllers\RestAPIController;
use App\Models\RestAPI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



// Read Data
Route::get('/restapis', [RestAPIController::class, 'index']);
