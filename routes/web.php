<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
// Web Routes
|--------------------------------------------------------------------------
// Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
*/

// Home route, displaying the list of foods
Route::get('/', [FoodController::class, 'listfood'])->name('home');

// Food detail route
Route::get('/foods/{id}', [FoodController::class, 'detailfood'])->name('detail');

// Authentication routes
Auth::routes();

// Protected routes for authenticated users
Route::middleware('auth')->group(function () {
    Route::resource('category', CategoryController::class);
    Route::resource('food', FoodController::class);
    Route::resource('customer', CustomerController::class);
});

// Route to the HomeController index for logged-in users
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
