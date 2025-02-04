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

Route::get('/jhonpabz', [JhonpabzController::class, 'index']);

Route::get('/jhonpabz/create', function () {
    return view('jhonpabz.create');
});

Route::get('/jhonpabz/{id}', function ($id) {
    return view('jhonpabz.show', ["id" => $id]);
});
