<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Numero;
use App\Models\Jugadore;


class JugadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jugadores=Jugadore::all();
        return view('jugadores.list', compact('jugadores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $numeros=Numero::all();
        return view('jugadores.form-create', compact('numeros'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Jugadore::create($request->all());
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
    public function edit(string $id_jugador)
    {
        $numeros=Numero::all();
        $jugadore= Jugadore::findOrFail($id_jugador);
        return view('jugadores.edit', compact('jugadore','numeros'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_jugador)
    {
        $jugadore= Jugadore::findOrFail($id_jugador);
        $jugadore->update($request->all());
        return redirect()->route('jugadores.index')->with('successEdit', 'Se actulizo correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_jugador)
    {
        $jugadore = Jugadore::findOrFail($id_jugador);
        $jugadore->delete();
        return redirect()->route('jugadores.index')->with('successDelete', 'Se elimino correctamente');
    }
}
