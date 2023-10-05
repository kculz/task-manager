<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'v1', 'middleware'=>'auth:sanctum'],function () {
    Route::apiResource('tasks', TaskController::class);
});