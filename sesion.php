<?php
session_start();
//include("./Config/Database.php");


if (!empty($_POST["btningresar"])) {
    //if (empty($_POST["usuario"]) and empty($_POST["password"])) {
        //echo '<div> Rellenar los campos vacios ';
    //} else {
        $email = $_POST["email"];
        $password1 = $_POST["password"];
        $password = hash('SHA256',md5($password1));
        

        $conn = new DataBase();
        $sql = "SELECT * FROM usuarios WHERE email = ? AND password = ?; ";
        $stmt = $conn->ms->prepare($sql);
        $stmt->bind_param("ss", $email,$password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result-> fetch_all()) {
            $_SESSION["email"] = $email;
            $_SESSION["password"] = $password;
            //$_SESSION["CONTADOR"] = 0;
            header('Location:index.php');
        } else {
            echo '<div class="alert alert-danger">ACCESO DENEGADO</div>';
        }
    //}
}

?>