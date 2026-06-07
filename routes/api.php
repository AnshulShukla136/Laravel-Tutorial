<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/test', function(){
    return ["name" => "anshul", "course" => "btech"];
});

Route::get('students', [ApiController::class, 'list']);
Route::post('add-student',[ApiController::class, 'addStudent']);
