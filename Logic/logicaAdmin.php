<?php
    include ("../Config/Database.php");
    require_once("../Model/UsuariosModel.php");
    require_once("../Model/PeliculaModel.php");
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

            case "GuardarPelicula":
                $Pelicula = new Pelicula();
                $Pelicula->setNombre($data->nombre);
                $Pelicula->setEstreno($data->estreno);
                $Pelicula->setGenero($data->genero);
                $Pelicula->setDuracion($data->duracion);
                $Pelicula->setClasificacion($data->clasificacion);
                $Pelicula->setSinopsis($data->sinopsis);
                $Pelicula->setIdioma($data->idioma);
                $Pelicula->setTipo($data->tipo);
                $Pelicula->setImagen($data->imagen);
                echo $Pelicula->InsertarPelicula();
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
                            <td><img src='$fila[8]' width='100%'></td>
                            <td><button class='btn btn-danger' onclick='EliminarPelicula($fila[0]);'>Eliminar</button></td>
                            <td><button class='btn btn-success' onclick='BuscarPelicula($fila[0]);'>Editar</button></td>
                          </tr>";
                }
                break;
            case "EliminarPelicula":
                $Pelicula = new Pelicula();
                $Pelicula->setId($data->id);
                $Pelicula->EliminarPelicula();
                break;
            case "BuscarPelicula":
            $Pelicula = new Pelicula();
            $Pelicula->setId($data->id);
            $resultado = $Pelicula->BuscarPelicula();
            echo $resultado;
            break;
            case "EditarPelicula":
           
                $Pelicula = new Pelicula();
                $Pelicula->setId($data->id);
                $Pelicula->setNombre($data->nombre);
                $Pelicula->setEstreno($data->estreno);
                $Pelicula->setGenero($data->genero);
                $Pelicula->setDuracion($data->duracion);
                $Pelicula->setClasificacion($data->clasificacion);
                $Pelicula->setSinopsis($data->sinopsis);
                $Pelicula->setIdioma($data->idioma);
                $Pelicula->setTipo($data->tipo);
                $Pelicula->setImagen($data->imagen);
                echo $Pelicula->ActualizarPelicula();
            
            
            break;
    }
    

?>