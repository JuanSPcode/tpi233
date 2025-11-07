<?php

use App\Http\Controllers\Ejercicio1Controller;
use App\Models\ejercicio1;
use Illuminate\Support\Facades\Route;



Route::get("/", [Ejercicio1Controller::class,"index"])->name("ejercicio1");