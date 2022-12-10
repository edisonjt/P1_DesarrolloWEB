<?php
session_start();

if (!isset($_SESSION["email"])) {
  header('Location: ../../signin.php');
  return false;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>CINE23 - Panel Administradores</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="keywords" />
  <meta content="" name="description" />

  <!-- Favicon -->
  <link href="../../assets/admin/img/favicon.ico" rel="icon" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet" />

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Libraries Stylesheet -->
  <link href="../../assets/admin/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
  <link href="../../assets/admin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="../../assets/admin/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Template Stylesheet -->
  <link href="../../assets/admin/css/style.css" rel="stylesheet" />
  <script src="../../js/scriptAdmin.js"></script>
</head>

<body onload="BuscarTodosClientes();">
  <div class="container-fluid position-relative d-flex p-0">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
      <div class="spinner-border text-primary" style="width: 3rem; height: 3rem" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>
    <!-- Spinner End -->

    <!-- Sidebar Start -->
    <div class="sidebar pe-4 pb-3">
      <nav class="navbar bg-secondary navbar-dark">
        <a href="index.php" class="navbar-brand mx-4 mb-3">
          <h3 class="text-primary">
            <i class="fa fa-user-edit me-2"></i>Panel Admin
          </h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
          <div class="position-relative">
            <img class="rounded-circle" src="../../assets/admin/img/user2.jpg" alt="" style="width: 40px; height: 40px" />
            <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
          </div>
          <div class="ms-3">
            <h6 class="mb-0">El Admin</h6>
            <span>Admin</span>
          </div>
        </div>
        <div class="navbar-nav w-100">
          <a href="index.php" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"><i class="fa fa-user me-2"></i>Usuarios</a>
            <div class="dropdown-menu bg-transparent border-0">
              <a href="clientes.php" class="dropdown-item" style="margin: bottom 10px;">Clientes</a>
              <a href="admin.php" class="dropdown-item">Administradores</a>
            </div>
          </div>
          <a href="pelicula.php" class="nav-item nav-link"><i class="bi bi-tv me-2"></i>Peliculas</a>

          <a href="venta.php" class="nav-item nav-link"><i class="bi bi-receipt me-2"></i>Ventas</a>

        </div>
      </nav>
    </div>
    <!-- Sidebar End -->

    <!-- Content Start -->
    <div class="content">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
        <a href="index.php" class="navbar-brand d-flex d-lg-none me-4">
          <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
        </a>
        <a href="#" class="sidebar-toggler flex-shrink-0">
          <i class="fa fa-bars"></i>
        </a>

        <div class="navbar-nav align-items-center ms-auto">

          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
              <img class="rounded-circle me-lg-2" src="../../assets/admin/img/user2.jpg" alt="" style="width: 40px; height: 40px" />
              <span class="d-none d-lg-inline-flex">El Admin</span>
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
              <a href="../../Config/Logout.php" class="dropdown-item">Log Out</a>
            </div>
          </div>
        </div>
      </nav>
      <!-- Navbar End -->

      <!-- Form Start -->
      <div class="container-fluid pt-4 px-4">
        <div class="col-sm-12 col-xl-12">
          <div class="bg-secondary rounded h-100 p-4">
            <form id="form" onsubmit="return false;">
              <input type="number" style="display:none" id="id" />
              <h6 class="mb-4">Formulario Clientes</h6>
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
              <button type="submit" class="btn btn-primary" id="guardar" onclick="GuardarCliente()">Registro</button>
              <button type="submit" class="btn btn-success" id="editar" onclick="EditarUsuario()">Editar</button>
            </form>
          </div>
        </div>
        <div id="res"></div>
      </div>
      <!-- Form End -->

      <!-- Recent Sales Start -->
      <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary text-center rounded p-4">
          <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Clientes</h6>
            <a href="">Show All</a>
          </div>
          <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
              <thead>
                <tr class="text-white">
                  <th scope="col">ID</th>
                  <th scope="col">Nombre Apellido</th>
                  <th scope="col">Fecha Naciemiento</th>
                  <th scope="col">Email</th>
                  <th scope="col">Telefono</th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody id="datos">

              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- Recent Sales End -->



      <!-- Footer Start -->
      <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary rounded-top p-4">
          <div class="row">
            <div class="col-12 col-sm-6 text-center text-sm-start">
              &copy; <a href="#">Cine23</a>, All Right Reserved.
            </div>
            <div class="col-12 col-sm-6 text-center text-sm-end">
              <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "#/credit-removal". Thank you for your support. ***/-->
              Designed By <a href="#">Estudiantes cansados</a>

            </div>
          </div>
        </div>
      </div>
      <!-- Footer End -->
    </div>
    <!-- Content End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
  </div>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/admin/lib/chart/chart.min.js"></script>
  <script src="../../assets/admin/lib/easing/easing.min.js"></script>
  <script src="../../assets/admin/lib/waypoints/waypoints.min.js"></script>
  <script src="../../assets/admin/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="../../assets/admin/lib/tempusdominus/js/moment.min.js"></script>
  <script src="../../assets/admin/lib/tempusdominus/js/moment-timezone.min.js"></script>
  <script src="../../assets/admin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

  <!-- Template Javascript -->
  <script src="../../assets/admin/js/main.js"></script>
</body>

</html>