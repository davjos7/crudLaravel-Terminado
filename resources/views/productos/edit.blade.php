@extends('layouts.template')

@section('contenido')


<div class="container-fluid py-4">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header pb-0">
            <div class="d-flex align-items-center">
              <p class="mb-0">Editar Producto</p>
            </div>
          </div>
          <div class="card-body">
            <p class="text-uppercase text-sm">Modificar Información</p>
            <div class="row">
              <form action="{{ route('productos.update', $producto->id_producto) }}" method="POST" class="row">
                @csrf
                @method('PUT')

                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-control-label">Nombre del Producto</label>
                    <input type="text" name="nombre_producto" value="{{ $producto->nombre_producto }}" class="form-control" required>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-control-label">Precio</label>
                    <input type="number" name="precio" value="{{ $producto->precio }}" step="0.01" class="form-control" required>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-control-label">Cantidad</label>
                    <input type="number" name="cantidad" value="{{ $producto->cantidad }}" class="form-control" required>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-control-label">Categoría</label>
                    <input type="text" name="categoria" value="{{ $producto->categoria }}" class="form-control">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-control-label">Proveedor</label>
                    <input type="text" name="proveedor" value="{{ $producto->proveedor }}" class="form-control">
                  </div>
                </div>

                <div class="form-group mt-3">
                  <button type="submit" class="btn btn-primary btn-sm ms-auto col-md-2">Guardar</button>
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

