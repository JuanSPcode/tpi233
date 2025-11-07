<?php

namespace App\Http\Controllers;

use App\Models\ejercicio1;
use Illuminate\Http\Request;

class Ejercicio1Controller extends Controller
{

    public function index()
    {
        return view("ejercicio1.index");
    }


}
