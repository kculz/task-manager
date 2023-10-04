<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1'], function(){
    Route::apiResource('tasks', TaskController::class)->only('index', 'show', 'store', 'update', 'destroy');
}); 