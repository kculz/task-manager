<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'v1', 'middleware' => 'auth:sanctum'], function(){
    Route::apiResource('projects', ProjectController::class)->only('store', 'update');
});