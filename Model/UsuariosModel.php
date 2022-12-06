<?php
class Usuario{
    private $id;
    private $nombre;
    private $apellido;
    private $fecha;
    private $telefono;
    private $password;
    private $tipo;
    private $email;
    private $tipoCliente = "cliente";
    private $tipoAdmin = "admin";
    public function __construct()
    {
        
    }

  



    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of apellido
     */ 
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set the value of apellido
     *
     * @return  self
     */ 
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get the value of fecha
     */ 
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set the value of fecha
     *
     * @return  self
     */ 
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get the value of telefono
     */ 
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set the value of telefono
     *
     * @return  self
     */ 
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }
      /**
     * Get the value of tipo
     */ 
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @return  self
     */ 
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }


    
    public function InsertarCliente(){
        $conn = new DataBase();
        $sql = "insert into usuarios(id, nombre, apellido, email, fecha_nac, telefono, password, tipo) values (null,?,?,?,?,?,?,?)";
        $stmt = $conn->ms->prepare($sql);
        $stmt->bind_param("ssssiss", $this->nombre, $this->apellido, $this->email, $this->fecha,$this->telefono, $this->password, $this->tipoCliente);
        $stmt->execute();
        $id = $stmt->insert_id;
        return ($id);
    }

    public function InsertarAdmin(){
        $conn = new DataBase();
        $sql = "INSERT INTO usuarios(id, nombre, apellido, email, fecha_nac, telefono, password, tipo) VALUES (null,?,?,?,?,?,?,?)";
        $stmt = $conn->ms->prepare($sql);
        $stmt->bind_param("ssssiss", $this->nombre, $this->apellido, $this->email, $this->fecha,$this->telefono, $this->password, $this->tipoAdmin );
        $stmt->execute();
        $id = $stmt->insert_id;
        return ($id);
    }

    public function ActualizarUsuario(){
        $conn = new DataBase();
        if($this->password){
            $sql = "UPDATE usuarios SET nombre=?,apellido=?,email=?,fecha_nac=?,telefono=?,password=? WHERE id=?";
        $stmt = $conn->ms->prepare($sql);
        $stmt->bind_param("ssssisi", $this->nombre, $this->apellido, $this->email, $this->fecha,$this->telefono, $this->password,  $this->id);
        }else{
            $sql = "UPDATE usuarios SET nombre=?,apellido=?,email=?,fecha_nac=?,telefono=? WHERE id=?";
        $stmt = $conn->ms->prepare($sql);
        $stmt->bind_param("ssssii", $this->nombre, $this->apellido, $this->email, $this->fecha,$this->telefono,  $this->id);
        }
        
        $stmt->execute();
    }

    public function EliminarUsuario(){
            $conn = new DataBase();
            $sql = "delete from usuarios where id=?";
            $stmt = $conn->ms->prepare($sql);
            $stmt->bind_param("i", $this->id);
            $stmt->execute();
    }

    public function BuscarTodosClientes(){
            $conn = new DataBase();
            $sql = "select * from usuarios where tipo='cliente'; ";
            $stmt = $conn->ms->prepare($sql);
            $stmt->execute();
            $result = $stmt->get_result();
            return $result->fetch_all();
    }

    public function BuscarTodosAdmin(){
        $conn = new DataBase();
        $sql = "select * from usuarios where tipo='admin'; ";
        $stmt = $conn->ms->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all();
}

    public function BuscarUsuario(){
            $conn = new DataBase();
            $sql = "select * from usuarios where id=?";
            $stmt = $conn->ms->prepare($sql);
            $stmt->bind_param("i", $this->id);
            $stmt->execute();
            $result = $stmt->get_result();
            // return $result->fetch_all();
            $data = [];
            while($row = $result->fetch_assoc()){
                    $data[] = $row;
            }

            return json_encode($data);
    }


    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
}
  

?>