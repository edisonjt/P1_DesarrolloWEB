<?php
    include ("../Config/Database.php");
    require_once("../Model/UsuariosModel.php");
    require_once("../Model/PeliculaModel.php");
    $data = json_decode(file_get_contents("php://input"));
    session_start();
    switch ($data->operacion) {
        

            case "MostrarCartelera":
                $Pelicula = new Pelicula();
                $resultado = $Pelicula->BuscarTodos();
                foreach ($resultado as $fila) {
                    echo "<div class='col-lg-3 col-sm-6'>
                    <div class='item'>
                      <img src='$fila[8]' alt='' />
                      <h4>$fila[1]<br /></h4>
                      <span><b>Duración: </b>$fila[3]</span>
                      <span><b>Clasificación: </b>$fila[5]</span>
                      <span><b>Género: </b>$fila[2]</span>
                      <div class='col-lg-12'>
                        <div class='main-button'>
                          ";
                          if (!isset($_SESSION['email'])) {
                            echo '<a href="signin.php">Reservar</a>';
                          } elseif (isset($_SESSION['email'])) {
                            echo '<a href="screens/user/reserva.php?idPelicula='.$fila[0].'&titulo='.$fila[1].'">Reservar</a>';
                          }
                          echo "
                        </div>
                      </div>
                    </div>
                  </div>";
                }
                break;

                case "MostrarRanking":
                  $Pelicula = new Pelicula();
                  $resultado = $Pelicula->BuscarTodos();
                  $visualisaciones= rand(10, 50).".".rand(0, 9);
                  foreach ($resultado as $fila) {
                      echo "<div class='item'>
                      <div class='thumb'>
                        <img src='$fila[8]' alt='' width='10px'>
                        <div class='hover-effect'>
                          <h6>$visualisaciones M Visualizaciones</h6>
                        </div>
                      </div>
                      <h4>$fila[1]<br><span>".rand(80, 100)."% Aprobación</span></h4>
                      <ul>
                        <li><i class='fa fa-star'></i> 4.".rand(5, 9)."</li>
                        <li><i class='fa fa-download'></i> $visualisaciones M</li>
                      </ul>
                    </div>";
                  }
                  break;
          
    }
    

?>