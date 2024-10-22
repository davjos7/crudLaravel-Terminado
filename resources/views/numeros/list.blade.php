<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Numero Listado</title>
</head>
<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight col-md-8">
                {{ __('Listado Numero') }}
            </h2>
            <button type="button" class="btn btn-primary col-md-4" data-toggle="modal" data-target="#CrearModal">
                Nuevo registro
              </button>
        </div>
    </x-slot>


<!-- CREAR ALUMNO MODEL -->

<div class="modal fade" id="CrearModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Registrar Numeros</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form id="crearNumeroForm" method="POST" action="{{route('numeros.store')}}">
                @csrf
                <div class="mb-3">
                    <label for="nombre" class="form-label">Numero</label>
                    <input type="number" class="form-control" id="nombre" name="numero_camiseta" required>
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
  @foreach ($numeros as $numero )
<div class="modal fade" id="EditarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Numero</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form id="editarNumeroForm" method="POST" action="{{route('numeros.update', $numero->id_numero)}}">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nombre" class="form-label">Numero</label>
                    <input type="text" class="form-control" value="{{$numero->numero_camiseta}}" id="nombre" name="numero_camiseta" required>
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




    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Numero de la camiseta</th>
                      </tr>
                    </thead>
                    <tbody>
            @foreach ( $numeros as $numero )
                      <tr>
                        <th scope="row">{{$numero->id_numero}}</th>
                        <td>{{$numero->numero_camiseta}}</td>
                        <td>
                            <button type="button" class="btn btn-primary col-md-4" data-toggle="modal" data-target="#EditarModal">
                                Editar
                              </button>
                        </td>
                        <td>
                            <form action="{{ route('numeros.destroy', $numero->id_numero) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                      </tr>
            @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</x-app-layout>
