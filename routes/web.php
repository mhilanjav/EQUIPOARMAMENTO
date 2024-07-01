<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonalController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("personal/index",[PersonalController::class, "index"])->name("personal.index");
Route::get("personal/crear",[PersonalController::class, "create"])->name("personal.create");
Route::get("personal/guardar",[PersonalController::class, "store"])->name("personal.store");
