<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', [TaskController::class, 'index']);

Route::post('/tasks', [TaskController::class, 'store']);

Route::put('/tasks/{task}', [TaskController::class, 'update']);

Route::put('/tasks/{task}/status', [TaskController::class, 'updateStatus']);

Route::delete('/tasks/{task}', [TaskController::class, 'destroy']);