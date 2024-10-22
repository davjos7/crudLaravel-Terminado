@extends('layouts.template')

@section('contenido')

<div class="container-fluid py-4">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
            <div class="card-header pb-0">
                <div class="d-flex align-items-center">
                    <p class="mb-0">Registrar Alumnos</p>
                    <a href="{{route('alumnos.index')}}" class="btn btn-dark btn-sm ms-auto" >Ir a Listado</a>
                </div>
            </div>
          <div class="card-body">
            <p class="text-uppercase text-sm">Completar Informacion</p>
            <div class="row">
                <form action="{{route('alumnos.store')}}" method="post" class="row">
                @csrf
                <div class="col-md-6">
                        <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Nombre</label>
                        <input type="text" name="nombre_alumno" class="form-control" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Apellido</label>
                        <input type="text" name="apellido_alumno" class="form-control" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Edad</label>
                        <input type="number" name="edad_alumno" class="form-control" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="example-text-input" class="form-control-label">fecha</label>
                        <input type="date" name="fecha_alumno" class="form-control" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Cursos</label>
                        <select class="form-select" name="cursos" aria-label="Default select example">
                            <option selected>Seleccione</option>
                            @foreach ($cursos as $curso )
                            <option value="{{$curso->nombre_curso}}">{{$curso->nombre_curso}}</option>
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
