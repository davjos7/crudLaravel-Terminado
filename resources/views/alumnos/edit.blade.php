@extends('layouts.template')

@section('contenido')


<div class="container-fluid py-4">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header pb-0">
            <div class="d-flex align-items-center">
              <p class="mb-0">Editar Alumno</p>
            </div>
          </div>
          <div class="card-body">
            <p class="text-uppercase text-sm">Editar Informacion</p>
            <div class="row">
                <form action="{{route('alumnos.update', $alumno->id_alumno)}}" method="post" class="row">
                @csrf
                @method('PUT')
                <div class="col-md-6">
                        <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Nombre</label>
                        <input type="text" value="{{$alumno->nombre_alumno}}" name="nombre_alumno" class="form-control" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Apellido</label>
                        <input type="text" value="{{$alumno->apellido_alumno}}" name="apellido_alumno" class="form-control" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Edad</label>
                        <input type="number" value="{{$alumno->edad_alumno}}" name="edad_alumno" class="form-control" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Cursos</label>
                        <select class="form-select" name="cursos" aria-label="Default select example">
                            @foreach ($cursos as $curso)
                                <option value="{{ $curso->nombre_curso }}" {{ $curso->nombre_curso == $alumno->cursos ? 'selected' : '' }}>
                                    {{ $curso->nombre_curso }}
                                </option>
                            @endforeach
                        </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-sm ms-auto col-md-2">Guardar</button>
                    </div>
                    <div class="col-md-10"></div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

