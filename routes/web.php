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
    Route::get('/addData', [WilayahController::class, 'addData'])->name('wilayah.add');
    Route::post('/addData/store', [WilayahController::class, 'dataStore'])->name('wilayah.store');
    Route::get('/edit/{id}', [WilayahController::class, 'editData'])->name('wilayah.edit');
    Route::put('/edit/{id}', [WilayahController::class, 'dataUpdate'])->name('wilayah.update');
    Route::delete('/{id}', [WilayahController::class, 'destroy'])->name('wilayah.destroy');
});
