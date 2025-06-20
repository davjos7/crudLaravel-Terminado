@extends('layouts.template')

@section('contenido')

<div class="container-fluid py-4">
    <div class="row mb-4">
        <div class="col-12">
            <div class="card bg-primary text-white shadow">
                <div class="card-body text-center">
                    <h1>Bienvenido al Sistema de Inventario</h1>
                    <h4>(En proceso...)</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <!-- Tarjeta productos -->
        <div class="col-md-3 mb-4">
            <div class="card shadow border-0">
                <div class="card-body text-center">
                    <h5 class="card-title">Productos</h5>
                    <h2>120</h2>
                </div>
            </div>
        </div>

        <!-- Tarjeta Categorías -->
        <div class="col-md-3 mb-4">
            <div class="card shadow border-0">
                <div class="card-body text-center">
                    <h5 class="card-title">Categorías</h5>
                    <h2>8</h2>
                </div>
            </div>
        </div>

        <!-- Tarjeta Proveedores -->
        <div class="col-md-3 mb-4">
            <div class="card shadow border-0">
                <div class="card-body text-center">
                    <h5 class="card-title">Proveedores</h5>
                    <h2>15</h2>
                </div>
            </div>
        </div>

        <!-- Tarjeta Usuarios -->
        <div class="col-md-3 mb-4">
            <div class="card shadow border-0">
                <div class="card-body text-center">
                    <h5 class="card-title">Usuarios</h5>
                    <h2>5</h2>
                </div>
            </div>
        </div>

    </div>

    <!-- Segunda fila -->
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card shadow border-0">
                <div class="card-header bg-success text-white text-center">
                    Movimientos Recientes
                </div>
                <div class="card-body">
                    <p>- Se agregó 10 unidades de Laptop HP.</p>
                    <p>- Se actualizó el stock de Monitor LG.</p>
                    <p>- Se eliminó producto Obsoleto.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card shadow border-0">
                <div class="card-header bg-warning text-white text-center">
                    Alertas de Stock Bajo
                </div>
                <div class="card-body">
                    <p>- Teclado Gamer (5 unidades)</p>
                    <p>- Mouse Logitech (3 unidades)</p>
                    <p>- Memoria RAM (2 unidades)</p>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
