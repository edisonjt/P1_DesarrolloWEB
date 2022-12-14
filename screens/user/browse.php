<?php session_start(); ?>
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
  <script src="../../js/scriptCartelera.js"></script>
</head>

<body onload="BuscarTodosRanking()">

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
              <li><a href="browse.php" class="active">Ranking</a></li>
              <?php
              if (!isset($_SESSION["email"])) {
                echo "<li><a href='../../signin.php'>Iniciar Sesi??n
                  <img src='../../assets/user/images/profile-header.jpg' alt='' />
                  </a>";
              } elseif (isset($_SESSION["email"])) {
                echo "
                  <li><a href='../../Config/Logout.php'>Cerrar Sesi??n</a></li>
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

          <!-- ***** Featured Games Start ***** -->
          <div class="row">
            <div class="col-lg-8">
              <div class="featured-games header-text">
                <div class="heading-section">
                  <h4><em>Ranking</em> Peliculas</h4>
                </div>
                <div class="owl-features owl-carousel" id="datos">
                  <!-- <div class="item">
                    <div class="thumb">
                      <img src="../../assets/user/images/peli1.jpg" alt="">
                      <div class="hover-effect">
                        <h6>100.4M Visualizaciones</h6>
                      </div>
                    </div>
                    <h4>Forrest Gump<br><span>98% Aprobaci??n</span></h4>
                    <ul>
                      <li><i class="fa fa-star"></i> 4.8</li>
                      <li><i class="fa fa-download"></i> 10.3M</li>
                    </ul>
                  </div>
                  <div class="item">
                    <div class="thumb">
                      <img src="../../assets/user/images/peli2.jpg" alt="">
                      <div class="hover-effect">
                        <h6>2.4M Visualizaciones</h6>
                      </div>
                    </div>
                    <h4>Zodiac<br><span>96% Aprobaci??n</span></h4>
                    <ul>
                      <li><i class="fa fa-star"></i> 4.5</li>
                      <li><i class="fa fa-download"></i> 2.3M</li>
                    </ul>
                  </div>
                  <div class="item">
                    <div class="thumb">
                      <img src="../../assets/user/images/peli3.jpg" alt="">
                      <div class="hover-effect">
                        <h6>12M Visualizaciones</h6>
                      </div>
                    </div>
                    <h4>Top Gun Maverick<br><span>98% Aprobaci??n</span></h4>
                    <ul>
                      <li><i class="fa fa-star"></i> 4.9</li>
                      <li><i class="fa fa-download"></i> 10.3M</li>
                    </ul>
                  </div>
                  <div class="item">
                    <div class="thumb">
                      <img src="../../assets/user/images/peli4.jpg" alt="">
                      <div class="hover-effect">
                        <h6>8.4K Visualizaciones</h6>
                      </div>
                    </div>
                    <h4>Your Name<br><span>96% Aprobaci??n</span></h4>
                    <ul>
                      <li><i class="fa fa-star"></i> 4.4</li>
                      <li><i class="fa fa-download"></i> 2.3M</li>
                    </ul>
                  </div> -->


                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="top-downloaded">
                <div class="heading-section">
                  <h4><em>SNACKS</em></h4>
                  <h6>Acompa??a tu pel??cula con un snack</h6><br>
                </div>
                <ul>
                  <li>
                    <img src="../../assets/user/images/snack1.jpg" alt="" class="templatemo-item">
                    <h4>Combo 1</h4>
                    <h6>Canguil/Bebida</h6>
                    <h6>/Dulce</h6>
                    <div class="download">
                      <a href="#"><i class="fa fa-cart-plus"></i></a>
                    </div>
                  </li>
                  <li>
                    <img src="../../assets/user/images/snack2.png" alt="" class="templatemo-item">
                    <h4>Combo 2</h4>
                    <h6>Canguil/Bebida</h6>
                    <div class="download">
                      <a href="#"><i class="fa fa-cart-plus"></i></a>
                    </div>
                  </li>
                  <li>
                    <img src="../../assets/user/images/snack3.png" alt="" class="templatemo-item">
                    <h4>Combo 3</h4>
                    <h6>Nachos/Bebida</h6>
                    <div class="download">
                      <a href="#"><i class="fa fa-cart-plus"></i></a>
                    </div>
                  </li>
                </ul>

              </div>
            </div>
          </div>
          <!-- ***** Featured Games End ***** -->

          <!-- ***** Start Stream Start ***** -->
          <!-- <div class="start-stream">
            <div class="col-lg-12">
              <div class="heading-section">
                <h4><em>How To Start Your</em> Live Stream</h4>
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <div class="item">
                    <div class="icon">
                      <img src="../../assets/user/images/service-01.jpg" alt="" style="max-width: 60px; border-radius: 50%;">
                    </div>
                    <h4>Go To Your Profile</h4>
                    <p>Cyborg Gaming is free HTML CSS website template provided by TemplateMo. This is Bootstrap v5.2.0 layout.</p>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="item">
                    <div class="icon">
                      <img src="../../assets/user/images/service-02.jpg" alt="" style="max-width: 60px; border-radius: 50%;">
                    </div>
                    <h4>Live Stream Button</h4>
                    <p>If you wish to support us, you can make a <a href="https://paypal.me/templatemo" target="_blank">small contribution via PayPal</a> to info [at] templatemo.com</p>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="item">
                    <div class="icon">
                      <img src="../../assets/user/images/service-03.jpg" alt="" style="max-width: 60px; border-radius: 50%;">
                    </div>
                    <h4>You Are Live</h4>
                    <p>You are not allowed to redistribute this template's downloadable ZIP file on any other template collection website.</p>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="main-button">
                    <a href="profile.php">Go To Profile</a>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          <!-- ***** Start Stream End ***** -->

          <!-- ***** Live Stream Start ***** -->
          <!-- <div class="live-stream">
            <div class="col-lg-12">
              <div class="heading-section">
                <h4><em>Most Popular</em> Live Stream</h4>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-3 col-sm-6">
                <div class="item">
                  <div class="thumb">
                    <img src="../../assets/user/images/stream-01.jpg" alt="">
                    <div class="hover-effect">
                      <div class="content">
                        <div class="live">
                          <a href="#">Live</a>
                        </div>
                        <ul>
                          <li><a href="#"><i class="fa fa-eye"></i> 1.2K</a></li>
                          <li><a href="#"><i class="fa fa-gamepad"></i> CS-GO</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="down-content">
                    <div class="avatar">
                      <img src="../../assets/user/images/avatar-01.jpg" alt="" style="max-width: 46px; border-radius: 50%; float: left;">
                    </div>
                    <span><i class="fa fa-check"></i> KenganC</span>
                    <h4>Just Talking With Fans</h4>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="item">
                  <div class="thumb">
                    <img src="../../assets/user/images/stream-02.jpg" alt="">
                    <div class="hover-effect">
                      <div class="content">
                        <div class="live">
                          <a href="#">Live</a>
                        </div>
                        <ul>
                          <li><a href="#"><i class="fa fa-eye"></i> 1.2K</a></li>
                          <li><a href="#"><i class="fa fa-gamepad"></i> CS-GO</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="down-content">
                    <div class="avatar">
                      <img src="../../assets/user/images/avatar-02.jpg" alt="" style="max-width: 46px; border-radius: 50%; float: left;">
                    </div>
                    <span><i class="fa fa-check"></i> LunaMa</span>
                    <h4>CS-GO 36 Hours Live Stream</h4>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="item">
                  <div class="thumb">
                    <img src="../../assets/user/images/stream-03.jpg" alt="">
                    <div class="hover-effect">
                      <div class="content">
                        <div class="live">
                          <a href="#">Live</a>
                        </div>
                        <ul>
                          <li><a href="#"><i class="fa fa-eye"></i> 1.2K</a></li>
                          <li><a href="#"><i class="fa fa-gamepad"></i> CS-GO</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="down-content">
                    <div class="avatar">
                      <img src="../../assets/user/images/avatar-03.jpg" alt="" style="max-width: 46px; border-radius: 50%; float: left;">
                    </div>
                    <span><i class="fa fa-check"></i> Areluwa</span>
                    <h4>Maybe Nathej Allnight Chillin'</h4>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="item">
                  <div class="thumb">
                    <img src="../../assets/user/images/stream-04.jpg" alt="">
                    <div class="hover-effect">
                      <div class="content">
                        <div class="live">
                          <a href="#">Live</a>
                        </div>
                        <ul>
                          <li><a href="#"><i class="fa fa-eye"></i> 1.2K</a></li>
                          <li><a href="#"><i class="fa fa-gamepad"></i> CS-GO</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="down-content">
                    <div class="avatar">
                      <img src="../../assets/user/images/avatar-04.jpg" alt="" style="max-width: 46px; border-radius: 50%; float: left;">
                    </div>
                    <span><i class="fa fa-check"></i> GangTm</span>
                    <h4>Live Streaming Till Morning</h4>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="main-button">
                  <a href="streams.php">Discover All Streams</a>
                </div>
              </div>
            </div>
          </div> -->
          <!-- ***** Live Stream End ***** -->

        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright ?? 2036 <a href="#">Cyborg Gaming</a> Company. All rights reserved.

            <br>Design: <a href="https://templatemo.com" target="_blank" title="free CSS templates">TemplateMo</a> Distributed By <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
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