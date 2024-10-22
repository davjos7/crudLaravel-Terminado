@extends('layouts.template')
@section('contenido')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <div class="d-flex align-items-center">
                    <p class="mb-0">Tabla de Cursos</p>
                     <a class="btn btn-dark btn-sm ms-auto" href="{{route('albunes.create')}}">Nuevo registro</a>
                </div>
            </div>
          <div class="card-body px-3 pt-2">
            <div class="table-responsive p-3">
                @foreach ($albums as $album )
                  <div class="card px-2 pt-2 col-md-4 mb-3">
                    @if ($album->imagen)
                        <img src="{{asset('storage/'. $album->imagen)}}" alt="">
                    @else
                        <img src="{{asset('assets/img/sinfoto.jpg')}}" alt="">
                    @endif
                    <div class="card-body">
                      <h5 class="card-title">{{$album->nombre_completo}}</h5>
                    </div>
                  </div>
                @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
