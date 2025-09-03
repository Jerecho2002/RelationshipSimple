<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('create');
});

Route::get('/createPost', [PostController::class, 'createPostFunction'])->name('createPostName');

Route::post('/storePost', [PostController::class, 'storePostFunction'])->name('storePostName');