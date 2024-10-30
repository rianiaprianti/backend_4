<?php

// use App\Http\Controllers\AnimalController;
use App\Http\Controllers\ControllerStudent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/student', [ControllerStudent::class, 'index']);
Route::post('/student', [ControllerStudent::class, 'store']);
Route::put('/student/{id}', [ControllerStudent::class, 'update']);
Route::delete('/student/{id}', [ControllerStudent::class, 'destroy']);






//praktikum3

// Route::get('/animals',[AnimalController::class, 'index']);

// Route::post('/animals',[AnimalController::class, 'store']);

// Route::put('/animals/{id}',[AnimalController::class, 'update']);

// Route::delete('/animals/{id}',[AnimalController::class, 'destroy']);
