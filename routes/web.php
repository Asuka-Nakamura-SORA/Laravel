<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [PostsController::class, 'index'])->name('posts.index');
Route::post('/posts/store', [PostsController::class, 'store'])->name('posts.store');
Route::get('/posts/{post}', [PostsController::class, 'show'])->name('posts.show');//詳細