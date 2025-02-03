<?php

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
    return view('welcome');
});

Route::get('/jhonpabz', function () {
    $jhonpabz = [
        ["name" => "lyka", "skill" => "99", "id" => "1"],
        ["name" => "cesar", "skill" => "98", "id" => "2"],
    ];
    return view('jhonpabz.index', ["greeting" => "Hell no!", "jhonpabz" =>  $jhonpabz]);
});

Route::get('/jhonpabz/create', function () {
    return view('jhonpabz.create');
});

Route::get('/jhonpabz/{id}', function ($id) {
    return view('jhonpabz.show', ["id" => $id]);
});
