<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

Route::get('/', [ContentController::class, 'index']);
Route::resource('contents', ContentController::class);

Route::get('/', function () {
    return view('welcome');
});
