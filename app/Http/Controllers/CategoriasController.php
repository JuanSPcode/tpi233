<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("categoria.index", ["data"=>Categorias::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("categoria.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "nombrecategoria"=>"required|max:100"
        ]);
        Categorias::create($request->all());
        return redirect()->route("categoria.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Categorias $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categorias $categoria)
    {
        return view("categoria.edit", ["categoria" => $categoria]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categorias $categoria)
    {
        $request->validate([
            "nombrecategoria"=>"required|max:100"
        ]);
        $categoria->update($request->all());
        return redirect()->route("categoria.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categorias $categoria)
    {
        $categoria->delete();
        return redirect()->route("categoria.index");
    }
}
