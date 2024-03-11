<?php

use App\Http\Controllers\HomepageController;
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

Route::get('/dashboard', [HomepageController::class, 'dashboard'])->name('dashboard')->middleware('auth');

Route::get('/', [HomepageController::class,'homepage'])->name('homepage');

Route::get('/show/prodotto/{product}', [HomepageController::class,'show'])->name('show');

Route::get('/categoria/{category}', [HomepageController::class, 'categoryShow'])->name('categoryShow');