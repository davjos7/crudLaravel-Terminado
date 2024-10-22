@extends('layouts.template')
@section('contenido')



    <div class="container-fluid py-4">
        <div class="row">
          <div class="col-12">
            <div class="card mb-4">
              <div class="card-header pb-0">
                <div class="d-flex align-items-center">
                    <p class="mb-0">Tabla de Alumnos</p>
                    <a href="{{route('alumnos.create')}}" class="btn btn-primary btn-sm ms-auto" >Nuevo Registro</a>
                </div>
              </div>
              <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                  <table class="table align-items-center mb-0">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nombre</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Apellido</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Edad</th>
                        <th class="text-secondary opacity-7"></th>
                      </tr>
                    </thead>
                    <tbody>
                        @if ($alumnos->isEmpty())
                            <tr>
                                <td class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" colspan="12">Alumnos sin registrar</td>
                            </tr>
                        @else
                    @foreach ($alumnos as $alumno )
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm px-2 opacity-7">{{$alumno->id_alumno}}</h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-xs font-weight-bold mb-0">{{$alumno->nombre_alumno}}</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                            <p class="text-xs font-weight-bold mb-0">{{$alumno->apellido_alumno}}</p>
                        </td>
                        <td class="align-middle text-center">
                          <span class="mb-0 text-xs font-weight-bold">{{$alumno->edad_alumno}}</span>
                        </td>
                        <td class="align-middle">
                            <div class="d-grid gap-2 d-md-block">
                                <a href="{{route('alumnos.edit', $alumno->id_alumno)}}" class="btn btn-success  btn-sm">Editar</a>
                                  <!-- Botón que enviará el formulario -->
                                <button type="button" class="btn btn-danger btn-sm" onclick="document.getElementById('delete-form-{{ $alumno->id_alumno }}').submit();">Eliminar</button>
                                <!-- Formulario oculto -->
                                <form id="delete-form-{{ $alumno->id_alumno }}" action="{{ route('alumnos.destroy', $alumno->id_alumno) }}" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                                </form>
                            </div>
                        </td>

                      </tr>
                      @endforeach
                    @endif
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection

