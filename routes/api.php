<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// GET route for /api/v1/movies
Route::get('/api/v1/movies', 'MovieController@index');

// POST route for /api/v1/movies
Route::post('/api/v1/movies', 'MovieController@store');

