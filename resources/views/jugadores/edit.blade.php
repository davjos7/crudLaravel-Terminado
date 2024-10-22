<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Editar Jugador</title>
</head>
<body>
    <x-app-layout>
        <x-slot name="header">
            <div class="row">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight col-8">
                    {{ __('Editar de Jugador') }}
                </h2>
                <a href="{{route('jugadores.index')}}" class="btn btn-outline-info col-4" >Ir a Listado</a>
            </div>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <section class="container mt-3">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <form action="{{route('jugadores.update', $jugadore->id_jugador)}}" method="post" class="row g-2 flex-column">
                                    @csrf
                                    @method('PUT')
                                    <div class="col-md-12">
                                        <label for="exampleInputEmail1" class="form-label">Nombre Jugador</label>
                                        <input type="text" value="{{$jugadore->nombre_jugador}}" name="nombre_jugador" class="form-control" aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="exampleInputEmail1" class="form-label">Pais</label>
                                        <input type="text" value="{{$jugadore->pais_jugador}}" name="pais_jugador" class="form-control" aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1" class="form-label">Edad</label>
                                        <input type="number" value="{{$jugadore->edad_jugador}}" name="edad_jugador" class="form-control" aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="exampleInputEmail1" class="form-label">Numeros</label>
                                        <select class="form-select" name="numero" aria-label="Default select example">
                                            @foreach ($numeros as $numero)
                                                <option value="{{ $numero->numero_camiseta }}" {{ $numero->numero_camiseta == $jugadore->numero ? 'selected' : '' }}>
                                                    {{ $numero->numero_camiseta }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-success mb-3">Enviar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </x-app-layout>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
