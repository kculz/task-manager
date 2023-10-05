<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful;

Route::group(['prefix' => 'v1', 'middleware' => ['auth:sanctum', EnsureFrontendRequestsAreStateful::class]], function () {
    Route::apiResource('tasks', TaskController::class);
});