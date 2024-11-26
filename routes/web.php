<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ComentController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\UsersController;
use App\Http\Middleware\isAdmin;
use App\Http\Middleware\isLogin;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Route::get('/admin',[AdminController::class,'admin'])->middleware('isAdmin');
Route::get('/userdata',[AdminController::class,'userData'])->middleware('isAdmin');
Route::get('/productdata',[AdminController::class,'productData'])->middleware('isAdmin');
Route::get('/categorydata',[AdminController::class,'categoryData'])->middleware('isAdmin');
Route::get('/commentdata',[AdminController::class,'commentData'])->middleware('isAdmin');
Route::get('/halamanlogin',[AuthController::class,'halLogin'])->middleware('isLoged');
Route::get('/halamanregister',[AuthController::class,'halRegister'])->middleware('isLoged');
Route::post('/login',[AuthController::class,'login']);
Route::post('/register',[AuthController::class,'register']);
Route::get('/logout',[AuthController::class,'logout'])->middleware(isLogin::class);
Route::get('/baned',[ErrorController::class,'baned'])->middleware('is_not_baned');
Route::post('/search',[ProductController::class,'searching']);

Route::resource('product',ProductController::class)->middleware('is_baned');
Route::resource('rating',RatingController::class)->middleware('is_baned');
Route::resource('category',CategoryController::class)->middleware('is_baned');
Route::resource('comment',CommentController::class)->middleware('is_baned');
Route::resource('users',UsersController::class)->middleware('is_baned');
Route::resource('cart',CartController::class)->middleware('isLogin');

