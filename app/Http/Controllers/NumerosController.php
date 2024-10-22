<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Numero;

class NumerosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $numeros=Numero::all();
        return view('numeros.list', compact('numeros')); // tenemos que llamar a la variable para que me muestre el listado
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $numeros=Numero::all();
        return view('numeros.list');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Numero::create($request->all());
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_numero)
    {
        $numero=Numero::findOrFail($id_numero);
        $numero->update($request->all());
        return redirect()->route('numeros.index')->with('successEdit', 'Se actulizo correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_numero)
    {
        $numero=Numero::findOrFail($id_numero);
        $numero->delete();
        return redirect()->route('numeros.index')->with('successDelete', 'Se elimino correctamente');
    }
}
