<?php

use App\Http\Controllers\WilayahController;
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
    // return view('wilayah/getData');
    return view('welcome');
});

Route::prefix('wilayah')->group(function () {
    Route::get('/', [WilayahController::class, 'get_data']);
    Route::post('/add/store', [WilayahController::class, 'dataStore'])->name('wilayah.store');
    // Route::put('/{id}', [LocationController::class, 'update'])->name('location.update');
    // Route::delete('/{id}', [LocationController::class, 'destroy'])->name('location.destroy');
    // Route::post('/search', [LocationController::class, 'search'])->name('location.search');
    // Route::post('/filter', [LocationController::class, 'filter'])->name('location.filter');
});