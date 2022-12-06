<?php

class Pelicula{
    private $id;
    private $nombre;
    private $genero;
    private $duracion;
    private $estreno;
    private $clasificacion;
    private $sinopsis;
    private $idioma;
    private $tipo;
    private $imagen;


    public function __construct()
    {
        
    }

  public function InsertarPelicula(){
    $conn = new DataBase();
    $sql = "INSERT INTO `pelicula`(`id`, `nombre`, `genero`, `duracion`, `fecha_estreno`, `clasificacion`, `sinopsis`, `idiomas`, `tipo`, `imagen`) VALUES (null,?,?,?,?,?,?,?,?,?)";
    $stmt = $conn->ms->prepare($sql);
    $stmt->bind_param("sssssssss", $this->nombre, $this->genero, $this->duracion, $this->estreno,$this->clasificacion, $this->sinopsis, $this->idioma, $this->tipo, $this->imagen);
    $stmt->execute();
    $id = $stmt->insert_id;
    return ($id);
  }

  public function EliminarPelicula(){
        $conn = new DataBase();
        $sql = "delete from pelicula where id=?";
        $stmt = $conn->ms->prepare($sql);
        $stmt->bind_param("i", $this->id);
        $stmt->execute();
    }

    public function ActualizarPelicula(){
        $conn = new DataBase();
        $sql = "UPDATE `pelicula` SET `nombre`=?,`genero`=?,`duracion`=?,`fecha_estreno`=?,`clasificacion`=?,`sinopsis`=?,`idiomas`=?,`tipo`=?, `imagen`=? WHERE id=?";
        $stmt = $conn->ms->prepare($sql);
        $stmt->bind_param("sssssssssi", $this->nombre, $this->genero, $this->duracion, $this->estreno,$this->clasificacion, $this->sinopsis, $this->idioma, $this->tipo, $this->imagen, $this->id);
        $stmt->execute();
        
    }
    
    public function BuscarPelicula(){
        $conn = new DataBase();
        $sql = "select * from pelicula where id=?";
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

    public function BuscarTodos(){
        $conn = new DataBase();
        $sql = "select * from pelicula; ";
        $stmt = $conn->ms->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all();
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
     * Get the value of genero
     */ 
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set the value of genero
     *
     * @return  self
     */ 
    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get the value of estreno
     */ 
    public function getEstreno()
    {
        return $this->estreno;
    }

    /**
     * Set the value of estreno
     *
     * @return  self
     */ 
    public function setEstreno($estreno)
    {
        $this->estreno = $estreno;

        return $this;
    }

    /**
     * Get the value of clasificacion
     */ 
    public function getClasificacion()
    {
        return $this->clasificacion;
    }

    /**
     * Set the value of clasificacion
     *
     * @return  self
     */ 
    public function setClasificacion($clasificacion)
    {
        $this->clasificacion = $clasificacion;

        return $this;
    }

    /**
     * Get the value of sinopsis
     */ 
    public function getSinopsis()
    {
        return $this->sinopsis;
    }

    /**
     * Set the value of sinopsis
     *
     * @return  self
     */ 
    public function setSinopsis($sinopsis)
    {
        $this->sinopsis = $sinopsis;

        return $this;
    }

    /**
     * Get the value of idioma
     */ 
    public function getIdioma()
    {
        return $this->idioma;
    }

    /**
     * Set the value of idioma
     *
     * @return  self
     */ 
    public function setIdioma($idioma)
    {
        $this->idioma = $idioma;

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

    /**
     * Get the value of duracion
     */ 
    public function getDuracion()
    {
        return $this->duracion;
    }

    /**
     * Set the value of duracion
     *
     * @return  self
     */ 
    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;

        return $this;
    }

   

    /**
     * Get the value of imagen
     */ 
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set the value of imagen
     *
     * @return  self
     */ 
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }
}
  

?>