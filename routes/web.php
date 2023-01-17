<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UniverzumController;
use App\Http\Controllers\FilmController;

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

Route::get('/', [UniverzumController::class,'index'])->name('home');
Route::get('/univerzumok/{id}', [UniverzumController::class,'show'])->name('univerzum.show');
Route::get('/filmek/{id}', [FilmController::class,'show'])->name('film.show');
Route::get('/filmek/create', [FilmController::class,'create'])->name('film.create');
Route::post('/filmek', [FilmController::class,'store'])->name('film.store');
 