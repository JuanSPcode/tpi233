<?php

use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\Ejercicio1Controller;
use App\Http\Controllers\ProveedoresController;
use App\Models\ejercicio1;
use Illuminate\Support\Facades\Route;



Route::get("/", [Ejercicio1Controller::class,"index"])->name("ejercicio1");

Route::resource("proveedor", ProveedoresController::class);
Route::resource("categoria", CategoriasController::class)->parameters(['categoria' => 'categoria']);