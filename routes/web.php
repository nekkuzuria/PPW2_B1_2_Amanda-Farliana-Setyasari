<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

//route resource
Route::get('/', function () {
    return view('welcome');
});
Route::resource('/posts', PostController::class);
    