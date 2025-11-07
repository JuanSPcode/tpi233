<?php

namespace App\Http\Controllers;

use App\Models\Proveedores;
use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("proveedor.index",["data"=>Proveedores::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("proveedor.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "nombreproveedor"=>"required|max:100"
        ]);
        Proveedores::create($request->all());
        return redirect()->route("proveedor.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Proveedores $proveedor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proveedores $proveedor)
    {
        return view("proveedor.edit", ["proveedor" => $proveedor]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proveedores $proveedor)
    {
        $request->validate([
            "nombreproveedor"=>"required|max:100"
        ]);
        $proveedor->update($request->all());
        return redirect()->route("proveedor.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proveedores $proveedor)
    {
        $proveedor->delete();
        return redirect()->route("proveedor.index");
    }
}
