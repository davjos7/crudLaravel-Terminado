@extends('layouts.template')
@section('contenido')
<!DOCTYPE html>
<html>
<head>
    <title>Consulta de DNI</title>
</head>
<body>
    <h1>Consulta de DNI</h1>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/consulta-dni" method="post">
        @csrf
        <label for="dniNumber">Número de DNI:</label>
        <input type="text" id="dniNumber" name="dniNumber" required>
        <button type="submit">Consultar</button>
    </form>

    <h1>Resultado de consulta de DNI</h1>
    <p><strong>Nombre:</strong>
        @isset($data['nombres'])
            {{ $data['nombres'] }}
        @else
            No disponible
        @endisset
    </p><br>

    <p><strong>Apellido Paterno:</strong>
        @isset($data['apellidoPaterno'])
            {{ $data['apellidoPaterno'] }}
        @else
            No disponible
        @endisset
    </p><br>

    <p><strong>Apellido Materno:</strong>
        @isset($data['apellidoMaterno'])
            {{ $data['apellidoMaterno'] }}
        @else
            No disponible
        @endisset
    </p><br>

    <p><strong>Número Documento:</strong>
        @isset($data['numeroDocumento'])
            {{ $data['numeroDocumento'] }}
        @else
            No disponible
        @endisset
    </p><br>



</body>
</html>


@endsection
