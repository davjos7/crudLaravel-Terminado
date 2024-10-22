@extends('layouts.template')

@section('contenido')

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Perfil
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .container {
        margin-top: 50px;
    }

    .btn-primary {
        background-color: #007bff;
        border: none;
    }
    .btn-secondary {
        border: none;
    }
    .custom-file {
        position: relative;
        display: inline-block;
        width: 100%;
        height: calc(1.5em + .75rem + 2px);
        margin-bottom: 0;
    }
    .custom-file-input {
        position: absolute;
        width: 100%;
        height: 100%;
        margin: 0;
        opacity: 0;
    }
    .custom-file-label {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        z-index: 1;
        height: calc(1.5em + .75rem + 2px);
        padding: .375rem .75rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        border: 1px solid #ced4da;
        border-radius: .25rem;
    }
    .custom-file-label::after {
        content: "Buscar";
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        z-index: 3;
        display: block;
        height: 100%;
        padding: .375rem .75rem;
        line-height: 1.5;
        color: #495057;
        content: "Buscar";
        background-color: #e9ecef;
        border-left: inherit;
        border-radius: 0 .25rem .25rem 0;
    }
</style>
</head>

    <div class="card shadow-lg mx-4 card-profile-bottom" >
      <div class="card-body p-3">
        <div class="row gx-4">
            <div class="container mt-5">
                <div class="card">
                    @foreach ($users as $user )

                    <form method="POST" action="{{ route('perfil.update', $user->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <!-- Campos de edición del usuario -->
                        <input type="text" name="name" value="{{ $user->name }}" disabled>
                        <img id="preview-image" src="{{ $user->image_url }}" alt="imagen actual" width="150">
                        <input type="file" name="image" id="image" accept="image/*">
                        <button type="submit">Update</button>
                    </form>

          @endforeach
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
          {{-- <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
            <div class="nav-wrapper position-relative end-0">
              <ul class="nav nav-pills nav-fill p-1" role="tablist">
                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
                    <i class="fa-brands fa-instagram"></i>
                    <span class="ms-2">Instagram</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                    <i class="fa-brands fa-twitter"></i>
                    <span class="ms-2">Twitter</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                    <i class="fa-brands fa-github"></i>
                    <span class="ms-2">Github</span> --}}
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <p class="mb-0">Editar Perfil</p>
                <a class="btn btn-primary btn-sm ms-auto" href=" {{route('perfil.index')}}">Guardar</a>
              </div>
            </div>
            <div class="card-body">
              <p class="text-uppercase text-sm">Informacion Personal</p>
              <div class="row">

                <form action="{{route('perfil.update', $user->id)}}" class="row" id="perfilSystem" method="post">
                @csrf
                @method('PUT')
                <div class="col-md-6">
                    @foreach ($users as $user )
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Nombre del Usuarios</label>
                    <input class="form-control" name="name" type="text" value="{{$user->name}}">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Email</label>
                    <input class="form-control" name="email" type="email" value="{{$user->email}}">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Contraseña</label>
                    <input class="form-control" name="password" type="password" value="{{$user->password}}">
                  </div>
                </div>
              </div>
              <hr class="horizontal dark">
              <p class="text-uppercase text-sm">
                INFORMACIÓN DEL CONTACTO</p>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Address</label>
                    <input class="form-control" name="address" type="text" value="{{$user->address}}">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">City</label>
                    <input class="form-control" name="city" type="text" value="{{$user->city}}">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Country</label>
                    <input class="form-control" name="country" type="text" value="{{$user->country}}">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Postal code</label>
                    <input class="form-control" name="postal_code" type="text" value="{{$user->postal_code}}">
                  </div>
                </div>
              </div>
              <hr class="horizontal dark">
              <p class="text-uppercase text-sm">About me</p>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">About me</label>
                    <input class="form-control" name="About_me" type="text" value="{{$user->About_me}}">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <button class="btn btn-primary btn-sm ms-auto col-md-2">Guardar</button>
            </div>
            </form>
              @endforeach
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-profile">
            <img src="https://i.pinimg.com/736x/ab/30/02/ab3002cc6856bb57be9815d05b5ae701.jpg" alt="bicho" style="border-radius: 10px" height="709px">
        </div>
      </div>
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                Este
                <script>
                  document.write(new Date().getFullYear())
                </script>,
                <i class="fa fa-heart"></i> es mi año
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/argon-dashboard.min.js?v=2.0.4"></script>
@endsection

