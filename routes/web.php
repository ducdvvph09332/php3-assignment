<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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
//Client
Route::get('/', function () {
    return view('client.welcome');
})->name('homepage');

//ADMIN
Route::prefix('/admin')->group(function () {
    Route::view('/dashboard', 'admin.dashboard.index')->name('dashboard');
    Route::resource('users', UserController::class);
    Route::resource('comments', CommentController::class);
    Route::resource('products', ProductController::class);
    Route::resource('categories', CategoryController::class);
});

//AUTH
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/post-login', [AuthController::class, 'loginPost'])->name('post-login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/post-register', [AuthController::class, 'registerStore'])->name('post-register');
