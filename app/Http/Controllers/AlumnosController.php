<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\Alumno;

class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos = Alumno::all();
        return view('alumnos.list', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cursos=Curso::all();
        return view('alumnos.form-create', compact('cursos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Alumno::create($request->all());
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
    public function edit(string $id_alumno)
    {
        $cursos=Curso::all();
        $alumno= Alumno::findOrFail($id_alumno);
        return view('alumnos.edit', compact('alumno','cursos')); // compact es para llamar a la variable
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_alumno)
    {
        $alumno= Alumno::findOrFail($id_alumno);
        $alumno->update($request->all());
        return redirect()->route('alumnos.index')->with('successEdit', 'Se actulizo correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $alumno = Alumno::findOrFail($id);
        $alumno->delete();
        return redirect()->route('alumnos.index')->with('successDelete', 'Se elimino correctamente');
    }
}
