@extends('layouts.template')
@section('contenido')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
            <div class="card-header pb-0">
                <div class="d-flex align-items-center">
                    <p class="mb-0">Registrar Album</p>
                    <a href="{{route('albunes.index')}}" class="btn btn-dark btn-sm ms-auto" >Ir a Listado</a>
                </div>
            </div>
          <div class="card-body">
            <p class="text-uppercase text-sm">Completar Informacion</p>
            <div class="row">
                <form action="{{route('albunes.store')}}" method="post" class="row" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Nombre</label>
                    <input type="text" name="nombre_completo" class="form-control" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="formFile" class="form-label">Elige imagen</label>
                    <input class="form-control" name="imagen" type="file" id="image" accept="image/*"> <br>
                    {{-- @error('file')
                        <small class="text danger">el archivo debe ser una imagen</small>
                    @enderror --}}
                </div>
                 <div class="mb-6">
                    <center>
                    <img id="preview-image"  width="200">
                </center>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-sm ms-auto col-md-2">Guardar</button>
                </div>
                <div class="col-md-10"></div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    // JavaScript para mostrar la vista previa de la imagen
    document.getElementById("image").addEventListener("change", function() {
        const reader = new FileReader();

        reader.onload = function() {
            const previewImage = document.getElementById('preview-image');
            previewImage.src = reader.result;
        }

        if (this.files[0]) {
            reader.readAsDataURL(this.files[0]);
        } else {
            document.getElementById('preview-image').src = '';
        }
    });
</script>

@endsection
