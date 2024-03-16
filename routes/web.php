<?php

use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\divisionsController;
use App\Http\Controllers\conferencesController;
use App\Http\Controllers\citiesController;

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
Route::resource('/conferences', conferencesController::class);
Route::resource('/divisions', divisionsController::class);
Route::resource('/teams', TeamController::class);
Route::resource('/cities', citiesController::class);
