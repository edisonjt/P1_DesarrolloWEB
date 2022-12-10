<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>CINE 23 - Registro</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="keywords" />
  <meta content="" name="description" />

  <!-- Favicon -->
  <link href="assets/admin/img/favicon.ico" rel="icon" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet" />

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Libraries Stylesheet -->
  <link href="assets/admin/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
  <link href="assets/admin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="assets/admin/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Template Stylesheet -->
  <link href="assets/admin/css/style.css" rel="stylesheet" />
  <script src="./js/scriptAdmin.js"></script>
</head>

<body>
  <div class="container-fluid position-relative d-flex p-0">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
      <div class="spinner-border text-primary" style="width: 3rem; height: 3rem" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>
    <!-- Spinner End -->

    <!-- Sign Up Start -->
    <div class="container-fluid">
      <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh">
        <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
          <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <a href="index.html" class="">
                <h3 class="text-primary">
                  <i class="fa fa-user-edit me-2"></i>DarkPan
                </h3>
              </a>
              <h3>Sign Up</h3>
            </div>
            <form onsubmit="return false;">
              <div class="form-floating mb-3">
                <input type="text" id="nombre" class="form-control" placeholder="name@example.com" />
                <label for="floatingInput">Nombre</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" id="apellido" class="form-control" placeholder="name@example.com" />
                <label for="floatingInput">Apellido</label>
              </div>

              <div class="form-floating mb-3">
                <input type="date" id="fechaNac" class="form-control" placeholder="name@example.com" />
                <label for="floatingInput">Fecha de Nacimiento</label>
              </div>

              <div class="form-floating mb-3">
                <input type="tel" id="telefono" class="form-control" placeholder="name@example.com" />
                <label for="floatingInput">Telefono</label>
              </div>

              <div class="form-floating mb-3">
                <input type="email" id="email" class="form-control" placeholder="name@example.com" />
                <label for="floatingInput">Email</label>
              </div>

              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="password" placeholder="Password" />
                <label for="floatingPassword">Password</label>
              </div>
              <button type="submit" class="btn btn-primary py-3 w-100 mb-4" onclick="GuardarClienteIndex()">
                Registrar
              </button>
            </form>
            <p class="text-center mb-0">
              ¿Ya tienes una cuenta? <a href="signin.php">Inicia Sesión</a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- Sign Up End -->
  </div>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/admin/lib/chart/chart.min.js"></script>
  <script src="assets/admin/lib/easing/easing.min.js"></script>
  <script src="assets/admin/lib/waypoints/waypoints.min.js"></script>
  <script src="assets/admin/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="assets/admin/lib/tempusdominus/js/moment.min.js"></script>
  <script src="assets/admin/lib/tempusdominus/js/moment-timezone.min.js"></script>
  <script src="assets/admin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

  <!-- Template Javascript -->
  <script src="assets/admin/js/main.js"></script>
</body>

</html>