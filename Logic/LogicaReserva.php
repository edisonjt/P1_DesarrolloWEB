<?php
    include ("../Config/Database.php");
    require_once("../Model/VentaModel.php");
    require_once("../Model/PeliculaModel.php");
    require_once("../Model/UsuariosModel.php");
    $data = json_decode(file_get_contents("php://input"));

    switch ($data->operacion) {
        case "GuardarReserva":
           
                $reserva = new Reserva();
                $reserva->setId_cliente($data->idUsuario);
                
                
                $reserva->setFecha($data->fecha);
                $reserva->setNum_asientos($data->cantidad);
                $reserva->setTotal($data->total);
                $reserva->setId_pelicula($data->idPelicula);
                echo $reserva->InsertarVenta();
            
            
        break;
        case "BuscarTodosReserva":
            $reserva = new Reserva();
            $resultado = $reserva->BuscarTodos();
            foreach ($resultado as $fila) {
                echo "<tr>
                <td>$fila[0]</td>
                        <td>$fila[1]</td>
                        <td>$fila[5]</td>
                        <td>$fila[2]</td>
                        <td>$fila[3]</td>
                        <td>$fila[4]</td>
                        
                      </tr>";
            }
            break; 

    
    }
?>
    