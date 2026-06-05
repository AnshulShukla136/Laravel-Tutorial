<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/user', [UserController::class, 'getUser']);

// Route::get('/aboutuser', [UserController::class, 'aboutUser']);

// Route::get('/user/{name}', [UserController::class, 'getUser']);


Route::get('/user-form', function(){
    return view('user-form');
});
Route::post('/adduser', [UserController::class, 'addUser']);
