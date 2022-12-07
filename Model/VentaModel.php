<?php
//include("../Config/Database.php");
class Reserva
{
    private $id;
    private $id_cliente;
    private $fecha;
    private $num_asientos;
    private $total;
    private $id_pelicula;

    public function __construct()
    {
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getId_cliente()
    {
        return $this->id_cliente;
    }


    public function setId_cliente($id_cliente)
    {
        $this->id_cliente = $id_cliente;

        return $this;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getNum_asientos()
    {
        return $this->num_asientos;
    }

    public function setNum_asientos($num_asientos)
    {
        $this->num_asientos = $num_asientos;

        return $this;
    }

    public function getTotal()
    {
        return $this->total;
    }

    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    public function getId_pelicula()
    {
        return $this->id_pelicula;
    }

    public function setId_pelicula($id_pelicula)
    {
        $this->id_pelicula = $id_pelicula;

        return $this;
    }

    public function InsertarVenta()
    {
        $conn = new DataBase();
        $sql = "insert into venta(id, id_cliente, fecha, num_asientos, total, id_pelicula) values (null,?,?,?,?,?)";
        $stmt = $conn->ms->prepare($sql);
        $stmt->bind_param(
            "isidi", 
            $this->id_cliente, 
            $this->fecha, 
            $this->num_asientos, 
            $this->total, 
            $this->id_pelicula
        );
        $stmt->execute();
        $id = $stmt->insert_id;
        return ($id);
    }

    public function EliminarVenta(){
        $conn = new DataBase();
        $sql = "delete from venta where id=?";
        $stmt = $conn->ms->prepare($sql);
        $stmt->bind_param("i", $this->id);
        $stmt->execute();
}

public function BuscarTodos(){
    $conn = new DataBase();
    $sql = "select * from venta; ";
    $stmt = $conn->ms->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_all();
}

}
