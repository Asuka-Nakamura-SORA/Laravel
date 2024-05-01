<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [PostsController::class, 'index'])->name('posts.index');
Route::post('/posts', [PostsController::class, 'store'])->name('posts.store');