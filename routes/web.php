<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('task-1', [\App\Http\Controllers\TasksController::class, 'generateTable']);
Route::get('task-2', [\App\Http\Controllers\TasksController::class, 'optimized']);
Route::get('task-3', [\App\Http\Controllers\TasksController::class, 'testing']);
Route::get('task-4', [\App\Http\Controllers\TasksController::class, 'dataSample']);
Route::get('task-5', [\App\Http\Controllers\TasksController::class, 'qa']);
