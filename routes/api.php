<?php
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TaskStatusController;
use App\Http\Controllers\InteractionController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('tasks', TaskController::class);
Route::put('/tasks/{task}/status', [
    'as' => 'task.status', 'uses' => 'App\Http\Controllers\TaskStatusController@update'
]);

Route::patch('/interactions', [
    'as' => 'interactions.counter', 'uses' => 'App\Http\Controllers\InteractionController@patch'
]);
