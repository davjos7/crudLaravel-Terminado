@extends('layouts.template')

@section('contenido')

<div class="container-fluid py-4">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
            <div class="card-header pb-0">
                <div class="d-flex align-items-center">
                    <p class="mb-0">Registrar Producto</p>
                    <a href="{{ route('productos.index') }}" class="btn btn-dark btn-sm ms-auto">Ir a Listado</a>
                </div>
            </div>
          <div class="card-body">
            <p class="text-uppercase text-sm">Completar Información</p>
            <div class="row">
                <form action="{{ route('productos.store') }}" method="POST" class="row">
                    @csrf

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label">Nombre del Producto</label>
                            <input type="text" name="nombre_producto" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label">Precio</label>
                            <input type="number" step="0.01" name="precio" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label">Cantidad</label>
                            <input type="number" name="cantidad" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label">Categoría</label>
                            <input type="text" name="categoria" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label">Proveedor</label>
                            <input type="text" name="proveedor" class="form-control">
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
