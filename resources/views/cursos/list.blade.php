@extends('layouts.template')

@section('contenido')

<!-- CREAR ALUMNO MODEL -->

<div class="modal fade" id="CrearModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
  <h5 class="modal-title" id="exampleModalLabel">Registrar curso</h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">
    <form id="crearCursoForm" method="POST" action="{{route('cursos.store')}}">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre_curso" required>
        </div>

        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </div>
    </form>
</div>
</div>
</div>

<!-- FIN CREAR ALUMNO MODEL -->


<!-- EDITAR ALUMNO MODEL -->
@foreach ($cursos as $curso )
<div class="modal fade" id="EditarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
  <h5 class="modal-title" id="exampleModalLabel">Editar Curso</h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">
    <form id="editarCursoForm" method="POST" action="{{route('cursos.update', $curso->id_curso)}}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" value="{{$curso->nombre_curso}}" id="nombre" name="nombre_curso" required>
        </div>

        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </div>
    </form>
</div>
</div>
</div>
@endforeach
<!-- FIN EDITAR ALUMNO MODEL -->

<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <div class="d-flex align-items-center">
                    <p class="mb-0">Tabla de Cursos</p>
                    <button type="button" class="btn btn-dark btn-sm ms-auto" data-toggle="modal" data-target="#CrearModal">
                        Nuevo registro
                    </button>
                </div>
            </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombre Curso</th>
                    <th class="text-secondary opacity-7"></th>
                  </tr>
                </thead>
                <tbody>
                    @if ($cursos->isEmpty())
                        <tr>
                            <td class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" colspan="12">Cursos sin registrar</td>
                        </tr>
                    @else
                @foreach ($cursos as $curso )
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm px-2 opacity-7">{{$curso->id_curso}}</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs text-center font-weight-bold mb-0">{{$curso->nombre_curso}}</p>
                    </td>
                    <td class="align-middle">
                        <div class="d-grid gap-2 d-md-block">
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#EditarModal">
                                Editar
                            </button>
                              <!-- Botón que enviará el formulario -->
                            <button type="button" class="btn btn-danger btn-sm" onclick="document.getElementById('delete-form-{{ $curso->id_curso }}').submit();">Eliminar</button>
                            <!-- Formulario oculto -->
                            <form id="delete-form-{{ $curso->id_curso }}" action="{{ route('cursos.destroy', $curso->id_curso) }}" method="POST" style="display: none;">
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

<div class="container">
    <div class="row">
        <div class="col-md-8"></div>

    </div>
</div>



@endsection

