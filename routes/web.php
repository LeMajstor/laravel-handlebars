<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CitationController;
use App\Http\Controllers\PostsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Index */
Route::get('/', [IndexController::class, 'index']);
Route::get('/content', [IndexController::class, 'content'])->name('index.content');

/* Citation */
Route::get('/citations', [CitationController::class, 'index']);
Route::get('/citations/content', [CitationController::class, 'content'])->name('citation.content');

/* Articles */
Route::get('/articles', [PostsController::class, 'index']);
Route::get('/articles/content', [PostsController::class, 'content'])->name('article.content');

Route::get('/articles/{id}', [PostsController::class, 'show'])->name('post.show');