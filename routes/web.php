<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [FoodController::class, 'index']);
Route::get('/about', [FoodController::class, 'about']);
Route::get('/menu', [FoodController::class, 'menu']);
Route::get('/book', [FoodController::class, 'book']);
Route::get('/reservation-list', [FoodController::class, 'reservationList']);
Route::post('/book', [FoodController::class, 'formBook'])->name('formBook');


