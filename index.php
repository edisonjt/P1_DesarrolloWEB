<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

  <title>Cyborg - Awesome HTML5 Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/user/css/fontawesome.css" />
  <link rel="stylesheet" href="assets/user/css/templatemo-cyborg-gaming.css" />
  <link rel="stylesheet" href="assets/user/css/owl.css" />
  <link rel="stylesheet" href="assets/user/css/animate.css" />
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <!--

TemplateMo 579 Cyborg Gaming

https://templatemo.com/tm-579-cyborg-gaming

-->

  <script src="./js/scriptCartelera.js"></script>
</head>

<body onload="BuscarTodosCartelera();">
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
            <a href="index.php" class="logo">
              <img src="assets/user/images/logo1.png" alt="" />
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Search End ***** -->
            <div class="search-input">
              <form id="search" action="#">
                <input type="text" placeholder="Type Something" id="searchText" name="searchKeyword" onkeypress="handle" />
                <i class="fa fa-search"></i>
              </form>
            </div>
            <!-- ***** Search End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li><a href="index.php" class="active">Cartelera</a></li>
              <li><a href="screens/user/browse.php">Ranking</a></li>
              <?php
              if (!isset($_SESSION["email"])) {
                echo "<li><a href='signin.php'>Iniciar Sesión
                  <img src='assets/user/images/profile-header.jpg' alt='' />
                  </a>";
              } elseif (isset($_SESSION["email"])) {
                echo "
                  <li><a href='Config/Logout.php'>Cerrar Sesión</a></li>
                  <li><a href='screens/user/profile.php'>$_SESSION[nombre]
                  <img src='assets/user/images/profile-header.jpg' alt='' />
                  </a>";
              }
              ?>
              </li>
            </ul>
            <a class="menu-trigger">
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
          <div class="main-banner">
            <div class="row">
              <div class="col-lg-7">
                <div class="header-text">
                  <h6>BIENVENIDOS A CINE23</h6>
                  <h4>El mejor cine del mundo</h4>
                  <div class="main-button">
                    <a href="signin.php">Iniciar Sesión</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Banner End ***** -->

          <!-- ***** Most Popular Start ***** -->
          <div class="most-popular">
            <div class="row">
              <div class="col-lg-12">
                <div class="heading-section">
                  <h4><em>Cartelera</em> de películas</h4>
                </div>
                <div class="row" id="datos">
                 
                  
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Most Popular End ***** -->

          <!-- ***** Gaming Library Start ***** -->
          <!-- <div class="gaming-library">
            <div class="col-lg-12">
              <div class="heading-section">
                <h4><em>Your Gaming</em> Library</h4>
              </div>
              <div class="item">
                <ul>
                  <li>
                    <img src="assets/user/images/game-01.jpg" alt="" class="templatemo-item" />
                  </li>
                  <li>
                    <h4>Dota 2</h4>
                    <span>Sandbox</span>
                  </li>
                  <li>
                    <h4>Date Added</h4>
                    <span>24/08/2036</span>
                  </li>
                  <li>
                    <h4>Hours Played</h4>
                    <span>634 H 22 Mins</span>
                  </li>
                  <li>
                    <h4>Currently</h4>
                    <span>Downloaded</span>
                  </li>
                  <li>
                    <div class="main-border-button border-no-active">
                      <a href="#">Donwloaded</a>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="item">
                <ul>
                  <li>
                    <img src="assets/user/images/game-02.jpg" alt="" class="templatemo-item" />
                  </li>
                  <li>
                    <h4>Fortnite</h4>
                    <span>Sandbox</span>
                  </li>
                  <li>
                    <h4>Date Added</h4>
                    <span>22/06/2036</span>
                  </li>
                  <li>
                    <h4>Hours Played</h4>
                    <span>740 H 52 Mins</span>
                  </li>
                  <li>
                    <h4>Currently</h4>
                    <span>Downloaded</span>
                  </li>
                  <li>
                    <div class="main-border-button">
                      <a href="#">Donwload</a>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="item last-item">
                <ul>
                  <li>
                    <img src="assets/user/images/game-03.jpg" alt="" class="templatemo-item" />
                  </li>
                  <li>
                    <h4>CS-GO</h4>
                    <span>Sandbox</span>
                  </li>
                  <li>
                    <h4>Date Added</h4>
                    <span>21/04/2036</span>
                  </li>
                  <li>
                    <h4>Hours Played</h4>
                    <span>892 H 14 Mins</span>
                  </li>
                  <li>
                    <h4>Currently</h4>
                    <span>Downloaded</span>
                  </li>
                  <li>
                    <div class="main-border-button border-no-active">
                      <a href="#">Donwloaded</a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="main-button">
                <a href="profile.php">View Your Library</a>
              </div>
            </div>
          </div> -->
          <!-- ***** Gaming Library End ***** -->
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>
            Copyright © 2036 <a href="#">Cyborg Gaming</a> Company. All rights
            reserved.

            <br />Design:
            <a href="https://templatemo.com" target="_blank" title="free CSS templates">TemplateMo</a>
            Distributed By
            <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
          </p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/user/js/isotope.min.js"></script>
  <script src="assets/user/js/owl-carousel.js"></script>
  <script src="assets/user/js/tabs.js"></script>
  <script src="assets/user/js/popup.js"></script>
  <script src="assets/user/js/custom.js"></script>
</body>

</html>