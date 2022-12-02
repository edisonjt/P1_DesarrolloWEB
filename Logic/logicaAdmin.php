<?php

    require_once("../Model/UsuariosModel.php");
    $data = json_decode(file_get_contents("php://input"));

    switch ($data->operacion) {
        case "GuardarCliente":
           
                $Usuario = new Usuario();
                $Usuario->setNombre($data->nombre);
                $Usuario->setApellido($data->apellido);
                $date = new DateTime($data->fechaNac);
                $result = $date->format('Y-m-d');
                $Usuario->setFecha($data->fechaNac);
                $Usuario->setTelefono($data->telefono);
                $Usuario->setEmail($data->email);
                $Usuario->setPassword(hash("sha256",md5($data->password)));
                echo $Usuario->InsertarCliente();
            
            
            break;
            case "GuardarAdmin":
           
                $Usuario = new Usuario();
                $Usuario->setNombre($data->nombre);
                $Usuario->setApellido($data->apellido);
                $date = new DateTime($data->fechaNac);
                $result = $date->format('Y-m-d');
                $Usuario->setFecha($data->fechaNac);
                $Usuario->setTelefono($data->telefono);
                $Usuario->setEmail($data->email);
                $Usuario->setPassword(hash("sha256",md5($data->password)));
                echo $Usuario->InsertarAdmin();
            
            
            break;
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
                        <td><button class='btn btn-danger' onclick='EliminarUsuario($fila[0]);'>Eliminar</button></td>
                        <td><button class='btn btn-success' onclick='BuscarUsuario($fila[0]);'>Editar</button></td>
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
                            <td><button class='btn btn-danger' onclick='EliminarUsuario($fila[0]);'>Eliminar</button></td>
                            <td><button class='btn btn-success' onclick='BuscarUsuario($fila[0]);'>Editar</button></td>
                          </tr>";
                }
                break;
            case "EliminarUsuario":
                $Usuario = new Usuario();
                $Usuario->setId($data->id);
                $Usuario->EliminarUsuario();
                break;
            case "BuscarUsuario":
            $Usuario = new Usuario();
            $Usuario->setId($data->id);
            $resultado = $Usuario->BuscarUsuario();
            echo $resultado;
            break;
            case "EditarUsuario":
           
                $Usuario = new Usuario();
                $Usuario->setId($data->id);
                $Usuario->setNombre($data->nombre);
                $Usuario->setApellido($data->apellido);
                $Usuario->setFecha($data->fechaNac);
                $Usuario->setTelefono($data->telefono);
                $Usuario->setEmail($data->email);
                if($data->password!==""){
                    $Usuario->setPassword(hash("sha256",md5($data->password)));
                }
                
                echo $Usuario->ActualizarUsuario();
            
            
            break;
    }
    

?>