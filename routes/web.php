<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\CompetitionController;
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

Route::get('/areas', [AreaController::class, 'index'])->name('areas.index');
Route::get('/areas/{id}', [AreaController::class, 'show'])->name('areas.show');

Route::get('/competitions', [CompetitionController::class, 'index'])->name('competitions.index');
Route::get('/competitions/{id}', [CompetitionController::class, 'show'])->name('competitions.show');
