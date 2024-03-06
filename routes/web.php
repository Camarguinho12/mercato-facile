<?php

use App\Http\Controllers\HomepageController;
use App\Livewire\Dashboard;
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

Route::get('/', [HomepageController::class,'homepage'])->name('homepage');
Route::get('/dashboard', Dashboard::class)->name('dashboard');
Route::get('/create', [HomepageController::class,'create'])->name('create');
Route::get('/edit', [HomepageController::class,'edit'])->name('edit');
Route::get('/show', [HomepageController::class,'show'])->name('show');