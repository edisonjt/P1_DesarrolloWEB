<?php
include("../Config/Database.php");
require_once("../Model/UsuariosModel.php");
require_once("../Model/PeliculaModel.php");
require_once("../Model/VentaModel.php");
$data = json_decode(file_get_contents("php://input"));

switch ($data->operacion) {
    case "BuscarTodosClientes":
        $Usuario = new Usuario();
        $resultado = $Usuario->BuscarTodosClientes();
        foreach ($resultado as $fila) {
            echo "<tr>
                <td>$fila[0]</td>
                        <td>$fila[1] $fila[2]</td>
                        <td>$fila[4]</td>
                        <td>$fila[3]</td>
                        <td>$fila[5]</td>
                      </tr>";
        }
        break;
    case "BuscarTodosAdmin":
        $Usuario = new Usuario();
        $resultado = $Usuario->BuscarTodosAdmin();
        foreach ($resultado as $fila) {
            echo "<tr>
                    <td>$fila[0]</td>
                            <td>$fila[1] $fila[2]</td>
                            <td>$fila[4]</td>
                            <td>$fila[3]</td>
                            <td>$fila[5]</td>


                          </tr>";
        }
        break;
    case "BuscarTodosPelicula":
        $Pelicula = new Pelicula();
        $resultado = $Pelicula->BuscarTodos();
        foreach ($resultado as $fila) {
            echo "<tr>
                        <td>$fila[0]</td>
                                <td>$fila[1]</td>
                                <td>$fila[2]</td>
                                <td>$fila[4]</td>
                                <td>$fila[3]</td>
                                <td>$fila[5]</td>
                                <td><img src='$fila[8]' width='30%'></td>
    
    
                              </tr>";
        }
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
