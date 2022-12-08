<?php session_start();

include("../../Config/Database.php");
require_once("../../Model/UsuariosModel.php");
require_once("../../Model/VentaModel.php");
$id = $_SESSION["id"];
$usuario = new Usuario();
$usuario->setId($id);
$result = $usuario->BuscarUsuario();
$result = json_decode($result, true);

$reservas = new Reserva();
$reservas->setId_cliente($id);
$cantReservas = $reservas->CantidadReservasUsuario();

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <title>Cyborg - Awesome HTML5 Template</title>

  <!-- Bootstrap core CSS -->
  <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="../../assets/user/css/fontawesome.css">
  <link rel="stylesheet" href="../../assets/user/css/templatemo-cyborg-gaming.css">
  <link rel="stylesheet" href="../../assets/user/css/owl.css">
  <link rel="stylesheet" href="../../assets/user/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <!--

TemplateMo 579 Cyborg Gaming

https://templatemo.com/tm-579-cyborg-gaming

-->
</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="../../index.php" class="logo">
              <img src="../../assets/user/images/logo1.png" alt="">
            </a>
            <!-- ***** Logo End ***** -->

            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li><a href="../../index.php">Cartelera</a></li>
              <li><a href="browse.php">Ranking</a></li>


              <?php
              if (!isset($_SESSION["email"])) {
                echo "<li><a href='../../signin.php'>Iniciar Sesión
                  <img src='../../assets/user/images/profile-header.jpg' alt='' />
                  </a>";
              } elseif (isset($_SESSION["email"])) {
                echo "
                  <li><a href='../../Config/Logout.php'>Cerrar Sesión</a></li>
                  <li><a href='profile.php'>$_SESSION[nombre]
                  <img src='../../assets/user/images/profile-header.jpg' alt='' />
                  </a>";
              }
              ?>
              </li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">

          <!-- ***** Banner Start ***** -->
          <div class="row">
            <div class="col-lg-12">
              <div class="main-profile ">
                <div class="row">
                  <div class="col-lg-4">
                    <img src="../../assets/user/images/profile.jpg" alt="" style="border-radius: 23px;">
                  </div>
                  <div class="col-lg-4 align-self-center">
                    <div class="main-info header-text">
                      <span>Miembro</span>
                      <h4><?php echo $result[0]["nombre"] . " " . $result[0]["apellido"]; ?></h4>
                      <p><b>Fecha de nacimiento: </b><?php echo $result[0]["fecha_nac"]; ?></p>
                      <p><b>E-mail: </b><?php echo $result[0]["email"]; ?></p>
                      <p><b>Teléfono: </b> <?php echo $result[0]["telefono"]; ?></p>
                      <!-- <div class="main-border-button">
                        <a href="#">Start Live Stream</a>
                      </div> -->
                    </div>
                  </div>
                  <div class="col-lg-4 align-self-center">
                    <ul>
                      <li>Peliculas reservadas <span> <?php echo count($cantReservas) ?></span></li>


                    </ul>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <!-- ***** Banner End ***** -->

        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2036 <a href="#">Cyborg Gaming</a> Company. All rights reserved.

            <br>Design: <a href="https://templatemo.com" target="_blank" title="free CSS templates">TemplateMo</a> Distributed By <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
          </p>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="../../vendor/jquery/jquery.min.js"></script>
  <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="../../assets/user/js/isotope.min.js"></script>
  <script src="../../assets/user/js/owl-carousel.js"></script>
  <script src="../../assets/user/js/tabs.js"></script>
  <script src="../../assets/user/js/popup.js"></script>
  <script src="../../assets/user/js/custom.js"></script>


</body>

</html>