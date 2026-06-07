<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/aboutuser', [UserController::class, 'aboutUser']);

// Route::get('/user/{name}', [UserController::class, 'getUser']);


Route::get('/user-form', function(){
    return view('user-form');
});
Route::post('/adduser', [UserController::class, 'addUser']);
Route::view('url', 'url');


Route::get('users', [StudentController::class, 'users']);
//for form
use App\Http\Controllers\MakeController;
Route::get('/userform', [MakeController::class, 'index']);

Route::post('/add-user', [MakeController::class, 'store']);

Route::get('/delete/{id}', [MakeController::class, 'delete']);

//for session
Route::view('login', 'login');

Route::view('profile', 'profile');

Route::post('login', [UserController::class, 'login']);

//for File Upload
use App\Http\Controllers\UploadController;
Route::view('upload',  'upload');
Route::post('upload', [UploadController::class, 'upload']);
