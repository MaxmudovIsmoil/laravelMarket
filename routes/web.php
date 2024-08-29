<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test/{name}', function ($name) {
    return 'Hello ' . $name;
});

Route::get('/users', [UserController::class, 'index']);
Route::get('/groups', [UserController::class, 'group']);
