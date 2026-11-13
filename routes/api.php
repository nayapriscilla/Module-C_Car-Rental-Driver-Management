<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Driver;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/drivers', function () {
    return Driver::all();
});
