<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JhonpabzController;
use App\Models\Jhonpabz;

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

Route::get('/jhonpabz', [JhonpabzController::class, 'index'])->name('jhonpabz.index');
Route::get('/jhonpabz/create',  [JhonpabzController::class, 'create'])->name('jhonpabz.create');
Route::get('/jhonpabz/{jhonpabz}',  [JhonpabzController::class, 'show'])->name('jhonpabz.show');
Route::post('/jhonpabz', [JhonpabzController::class, 'store'])->name('jhonpabz.store');
Route::delete('/jhonpabz/{jhonpabz}',  [JhonpabzController::class, 'destroy'])->name('jhonpabz.destroy');
