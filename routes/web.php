<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ComentController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RatingController;
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

Route::get('/', function () {
    return view('home');
});

Route::resource('product',ProductController::class);
Route::resource('rating',RatingController::class);
Route::resource('category',CategoryController::class);
Route::resource('comment',CommentController::class);

