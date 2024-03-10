<?php

use App\Http\Controllers\HomepageController;
use App\Livewire\Dashboard\Stats;
use Faker\Guesser\Name;
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

// Route::get('/dashboard/crea', [HomepageController::class, 'dashboard'])->name('dashboard')->middleware('auth');

Route::get('/', [HomepageController::class,'homepage'])->name('homepage');

Route::get('/show/prodotto/{product}', [HomepageController::class,'show'])->name('show');

Route::prefix('/dashboard')->name('dashboard.')->middleware('auth')->group(function () {
    Route::get('/crea', [HomepageController::class, 'dashboard'])->name('crea');
	Route::get('/statistiche',Stats::class)->name('stats');
});