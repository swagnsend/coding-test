<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::post('/post', [PostController::class, 'store'])->name('posts.store');
Route::get('/post/create', [PostController::class, 'create'])->name('posts.create');
Route::get('/post/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::get('/post/{post}', [PostController::class, 'show'])->name('posts.show');
Route::put('/post/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/post/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

