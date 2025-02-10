<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JhonpabzController;
use App\Models\Jhonpabz;
use App\Http\Controllers\LinkController;

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

Route::get('/settings', function () {
    return view('settings');
});

Route::get('/jhonpabz', [JhonpabzController::class, 'index'])->name('jhonpabz.index');
Route::get('/jhonpabz/create',  [JhonpabzController::class, 'create'])->name('jhonpabz.create');
Route::get('/jhonpabz/{jhonpabz}',  [JhonpabzController::class, 'show'])->name('jhonpabz.show');

// Route::get('/jhonpabz/settings',  [JhonpabzController::class, 'settings'])->name('jhonpabz.settings');


Route::post('/jhonpabz', [JhonpabzController::class, 'store'])->name('jhonpabz.store');
Route::delete('/jhonpabz/{jhonpabz}',  [JhonpabzController::class, 'destroy'])->name('jhonpabz.destroy');

Route::get('/get-servers', function () {
    return view('components.h5-links-dynamic');
});

Route::get('/links', [LinkController::class, 'index'])->name('links');
Route::resource('links', LinkController::class);
