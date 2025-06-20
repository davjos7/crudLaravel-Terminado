@extends('layouts.template')
@section('contenido')



<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <div class="d-flex align-items-center">
                <p class="mb-0">Tabla de Productos</p>
                <a href="{{ route('productos.create') }}" class="btn btn-primary btn-sm ms-auto">Nuevo Producto</a>
            </div>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nombre</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center">Precio</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center">Cantidad</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center">Categoría</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center">Proveedor</th>
                    <th class="text-secondary opacity-7 text-center">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                    @if ($productos->isEmpty())
                        <tr>
                            <td class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" colspan="7">No hay productos registrados</td>
                        </tr>
                    @else
                        @foreach ($productos as $producto)
                        <tr>
                            <td>
                                <p class="text-xs font-weight-bold px-3 mb-0">{{ $producto->id_producto }}</p>
                            </td>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">{{ $producto->nombre_producto }}</p>
                            </td>
                            <td class="text-center">
                                <p class="text-xs mb-0">S/ {{ number_format($producto->precio, 2) }}</p>
                            </td>
                            <td class="text-center">
                                <span class="text-xs font-weight-bold">{{ $producto->cantidad }}</span>
                            </td>
                            <td class="text-center">
                                <span class="text-xs">{{ $producto->categoria }}</span>
                            </td>
                            <td class="text-center">
                                <span class="text-xs">{{ $producto->proveedor }}</span>
                            </td>
                            <td class="text-center">
                                <div class="d-grid gap-2 d-md-block">
                                    <a href="{{ route('productos.edit', $producto->id_producto) }}" class="btn btn-success btn-sm">Editar</a>
                                    <button type="button" class="btn btn-danger btn-sm" onclick="document.getElementById('delete-form-{{ $producto->id_producto }}').submit();">Eliminar</button>
                                    <form id="delete-form-{{ $producto->id_producto }}" action="{{ route('productos.destroy', $producto->id_producto) }}" method="POST" style="display: none;">
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
</div>


@endsection

