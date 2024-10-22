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
</head>

    <div class="card shadow-lg mx-4 card-profile-bottom">
      <div class="card-body p-3">
        <div class="row gx-4">
        <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
                    <img width="100px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJ3Sz275KZaTeZyS-thzhD6U9VIkfO8c-WPA&s" alt="">
            </div>
        </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                {{ Auth::user()->name }}
              </h5>
              <p class="mb-0 font-weight-bold text-sm">
                {{ Auth::user()->city }}
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
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
                    <span class="ms-2">Github</span>
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
                <p class="mb-0">Mi Perfil</p>

                <a class="btn btn-primary btn-sm ms-auto" href=" {{route('perfil.create')}}">Editar</a>
              </div>
            </div>
            <div class="card-body">
              <p class="text-uppercase text-sm">Informacion Personal</p>
              <div class="row">
                <form action="" class="row">
                    <div class="col-md-6">

                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Nombre del Usuarios</label>
                        <input class="form-control" type="text" value="{{ auth()->user()->name }}" disabled>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Email</label>
                        <input class="form-control" type="email" value="{{ auth()->user()->email }}" disabled>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Contraseña</label>
                        <input class="form-control" type="password" value="{{ Auth::user()->password }}" disabled>
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
                        <input class="form-control" type="text" value="{{ Auth::user()->address }}" disabled>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">City</label>
                        <input class="form-control" type="text" value="{{ Auth::user()->city }}" disabled>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Country</label>
                        <input class="form-control" type="text" value="{{ Auth::user()->country }}" disabled>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Postal code</label>
                        <input class="form-control" type="text" value="{{ Auth::user()->postal_code}}" disabled>
                      </div>
                    </div>
                  </div>
                  <hr class="horizontal dark">
                  <p class="text-uppercase text-sm">About me</p>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">About me</label>
                        <input class="form-control" type="text" value="{{ Auth::user()->About_me}}" disabled>
                      </div>
                    </div>
                  </div>
                </form>

            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-profile">
            <img src="https://i.pinimg.com/736x/ab/30/02/ab3002cc6856bb57be9815d05b5ae701.jpg" alt="bicho" style="border-radius: 10px" height="709px">
        </div>
      </div>
      <footer class="footer pt-3">
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


  <script>
    function habilitarEdicion() {
        var formulario = document.getElementById('perfilSystem');
        var elementos = formulario.elements;
        for (var i = 0; i < elementos.length; i++) {
            if (elementos[i].hasAttribute('disabled')) {
                elementos[i].removeAttribute('disabled');
            }
        }
    }
</script>

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

