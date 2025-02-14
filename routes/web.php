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

Route::get('/login', function () {
    return view('auth.login');
})->name('login')->middleware('guest');

Route::post('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/links', [App\Http\Controllers\LinkController::class, 'index'])->name('links.index');
    Route::get('/links/create', [App\Http\Controllers\LinkController::class, 'create'])->name('links.create');
    Route::post('/links', [App\Http\Controllers\LinkController::class, 'store'])->name('links.store');
    Route::get('/links/{link}/edit', [App\Http\Controllers\LinkController::class, 'edit'])->name('links.edit');
    Route::put('/links/{link}', [App\Http\Controllers\LinkController::class, 'update'])->name('links.update');
    Route::delete('/links/{link}', [App\Http\Controllers\LinkController::class, 'destroy'])->name('links.destroy');
});
