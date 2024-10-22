<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight col-8">
                {{ __('Listado de Jugadores') }}
            </h2>
            <a href="{{route('jugadores.create')}}" class="btn btn-outline-info col-4" >Nuevo Registro</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Pais</th>
                        <th scope="col">edad</th>
                        <th scope="col">Numero</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($jugadores as $jugadore )
                      <tr>
                        <th scope="row">{{$jugadore->id_jugador}}</th>
                        <td>{{$jugadore->nombre_jugador}}</td>
                        <td>{{$jugadore->pais_jugador}}</td>
                        <td>{{$jugadore->edad_jugador}}</td>
                        <td>{{$jugadore->numero}}</td>
                        <td><a class="btn btn-success" href="{{route('jugadores.edit', $jugadore->id_jugador)}}">editar</a></td>
                        <td>
                            <form action="{{route('jugadores.destroy', $jugadore->id_jugador)}}" method="POST">
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
