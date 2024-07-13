<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\GradoController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("personal/index",[PersonalController::class, "index"])->name("personal.index");
Route::get("personal/crear",[PersonalController::class, "create"])->name("personal.create");
Route::post("personal/guardar",[PersonalController::class, "store"])->name("personal.store");


Route::get("grado/index",[GradoController::class, "index"])->name("grado.index");
Route::get("grado/crear",[GradoController::class, "create"])->name("grado.create");
Route::post("grado/guardar",[GradoController::class, "store"])->name("grado.store");
