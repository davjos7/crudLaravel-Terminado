<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::all();
        return view('productos.list', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productos.form-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Producto::create($request->all());
        return redirect()->back()->with('success', 'Se registro correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_producto)
    {
        $producto = Producto::findOrFail($id_producto);
        return view('productos.edit', compact('producto')); // compact es para llamar a la variable
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_producto)
    {
        $producto= Producto::findOrFail($id_producto);
        $producto->update($request->all());
        return redirect()->route('productos.index')->with('successEdit', 'Se actulizo correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_producto)
    {
        $producto = Producto::findOrFail($id_producto);
        $producto->delete();
        return redirect()->route('productos.index')->with('successDelete', 'Se elimino correctamente');
    }
}
